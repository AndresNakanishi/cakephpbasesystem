<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class PagesController extends AppController
{
    public $paginate = [
        'order' => [
            'posts.id' => 'DESC'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
    }
    // Home - Just Layout
    public function home()
    {
        $this->viewBuilder()->setLayout('guests');

        $posts = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users'], 'conditions' => ['status' => 2], 'order' => ['posts.id' => 'DESC'], 'limit' => 3])->all();
    
        $this->set(compact('posts'));
    }

    // Blog Page
    public function blog()
    {
        $this->viewBuilder()->setLayout('guests');

        $posts = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users'], 'conditions' => ['status' => 2], 'order' => ['posts.id' => 'DESC'], 'limit' => 10])->all();
    
        $this->set(compact('posts'));
    }

    // Category Blog Page
    public function category($cat = null)
    {
        $this->viewBuilder()->setLayout('guests');

        $posts = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users'], 'conditions' => ['status' => 2, 'Categories.slug' => $cat], 'order' => ['posts.id' => 'DESC']])->all();
    
        $this->set(compact('posts','cat'));
    }


    // Individual Post
    public function post($slug = null)
    {
        $this->viewBuilder()->setLayout('posts');

        $post = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users'],'conditions' => ['posts.slug' => $slug]])->first();
    
        $this->set(compact('post'));
    }
}
