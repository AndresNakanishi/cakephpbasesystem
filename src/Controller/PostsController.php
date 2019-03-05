<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('system-datatables');

        $posts = $this->Posts->find('all', ['contain' => ['Categories','Users']])->all();

        $this->set(compact('posts'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('system-default');
        $session = $this->request->getSession();
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
            $data['category_id'] = (int)$data['category_id'];
            $slug = $this->slugify($data['title']);
            if (isset($data['publish']) && $data['publish'] == 'publish') {
                unset($data['publish']);
                $post->status = 2;
                $post->published_at = date('Y-m-d H:i:s');
            } elseif (isset($data['save']) && $data['save'] == 'save') {
                unset($data['save']);
                $post->status = 1;
            }   
            $data['img_url'] = $this->postImg($data['img_url'], $slug);
            $post = $this->Posts->patchEntity($post, $data);
            $post->slug = $slug;
            $post->user_id = $this->Auth->user('id');
            // Tipo de Publicación => 0 == Publicación de Blog
            $post->type = 1;
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Fue creada la publicación.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo crear la publicación, intente más tarde.'));
        }
        $categories = $this->Posts->Categories->find('list');
        $this->set(compact('post', 'users', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('system-default');
        $session = $this->request->session();
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['title'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
            if ($data['img_url']['name'] == null) {
                unset($data['img_url']);
            } else {
                $data['img_url'] = $this->postImg($data['img_url'], $post->slug);
            }
            $post = $this->Posts->patchEntity($post, $data);
            $post->user_id = $this->Auth->user('id');
            if (isset($data['publish']) && $data['publish'] == 'publish') {
                unset($data['publish']);
                $post->status = 2;
                if ($post->published_at == NULL) {
                    $post->published_at = date('Y-m-d H:i:s');
                }
            } elseif (isset($data['save']) && $data['save'] == 'save') {
                unset($data['save']);
            }   
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('La publicación fue editada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ups... Hubo un problema. Intenta más tarde.'));
        }
        $categories = $this->Posts->Categories->find('list');
        $this->set(compact('post', 'users', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get','post', 'delete']);

        $post = $this->Posts->get($id);
        $slug = $post->slug;

        $imgFolder = "img/blogs/";
        $folder = WWW_ROOT . $imgFolder;
        $fileName = "$slug.jpg";
        $fileDest = $folder . $fileName;

        $deleted = false;

        if ($post->status == 2) {
            try {
                $post->status = 0;
                $deleted = $this->Posts->save($post);
            } catch(\Exception $e) {

            }    
            
            if ($deleted) {
                $this->Flash->success(__('La publicación ha sido enviada a la papelera.'));
            } else {
                $this->Flash->error(__('La publicación no ha podido ser enviada a la papelera.'));
            }
        } else {
            try {
                if (file_exists($fileDest)) {   
                    unlink($fileDest);                     
                }
                $deleted = $this->Posts->delete($post);
            } catch(\Exception $e) {

            }    
            
            if ($deleted) {
                $this->Flash->success(__('La publicación ha sido eliminada.'));
            } else {
                $this->Flash->error(__('La publicación no ha podido ser eliminada.'));
            }
        }

        return $this->redirect(['action' => 'index']);
    }


    // Slug Creator
    private function slugify($text)
    {
      // replace non letter or digits by -
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, '-');

      // remove duplicate -
      $text = preg_replace('~-+~', '-', $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }

    private function postImg($img, $slug){
        $imgFolder = "img/blogs/";
        $folder = WWW_ROOT . $imgFolder;
        $fileName = "$slug.jpg";
        $fileTmp = $img["tmp_name"];
        $fileDest = $folder . $fileName;
            
        if ($img['name'] !== '') {
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            if (file_exists($fileDest)) {   
                unlink($fileDest);
                $success = move_uploaded_file($fileTmp, $fileDest);                         
            } else {
                $success = move_uploaded_file($fileTmp, $fileDest);                         
            }

            $newAvatar = $imgFolder . $fileName;
        }
        return $newAvatar;
    }
}
