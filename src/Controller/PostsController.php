<?php

namespace App\Controller;

class PostsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $posts = $this->Paginator->paginate($this->Posts->find());
        $this->set(compact('posts'));
    }


    public function view($slug = null)
    {
        $post = $this->Posts->findBySlug($slug)->firstOrFail();
        $this->set(compact('post'));
    }
}
