<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Functions Controller
 *
 * @property \App\Model\Table\FunctionsTable $Functions
 *
 * @method \App\Model\Entity\Function[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FunctionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $functions = $this->paginate($this->Functions);

        $this->set(compact('functions'));
    }

    /**
     * View method
     *
     * @param string|null $id Function id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $function = $this->Functions->get($id, [
            'contain' => ['PermissionFunctions']
        ]);

        $this->set('function', $function);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $function = $this->Functions->newEntity();
        if ($this->request->is('post')) {
            $function = $this->Functions->patchEntity($function, $this->request->getData());
            if ($this->Functions->save($function)) {
                $this->Flash->success(__('The function has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The function could not be saved. Please, try again.'));
        }
        $this->set(compact('function'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Function id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $function = $this->Functions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $function = $this->Functions->patchEntity($function, $this->request->getData());
            if ($this->Functions->save($function)) {
                $this->Flash->success(__('The function has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The function could not be saved. Please, try again.'));
        }
        $this->set(compact('function'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Function id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $function = $this->Functions->get($id);
        if ($this->Functions->delete($function)) {
            $this->Flash->success(__('The function has been deleted.'));
        } else {
            $this->Flash->error(__('The function could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
