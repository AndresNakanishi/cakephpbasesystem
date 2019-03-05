<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow();
    }

    // Home - Just Layout
    public function home()
    {
        $this->viewBuilder()->setLayout('guests');

        $posts = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users']], ['conditions' => ['status' => 2]])->all();
    
        $this->set(compact('posts'));
    }

    // Home - Just Layout
    public function post($slug = null)
    {
        $this->viewBuilder()->setLayout('posts');

        $post = TableRegistry::get('posts')->find('all', ['contain' => ['Categories','Users']], ['conditions' => ['slug' => $slug]])->first();
    
        $this->set(compact('post'));
    }
}
