<?php

namespace App\Controller;

class PostsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $posts = $this->Paginator->paginate($this->Posts->find());
        $this->Authorization->skipAuthorization();
        $this->set(compact('posts'));
    }


    public function view($slug = null)
    {
        $post = $this->Posts
        ->findBySlug($slug)
        ->contain('Tags')
        ->firstOrFail();
        $this->Authorization->skipAuthorization();
    $this->set(compact('post'));
    }

    public function add()
    {
        $post = $this->Posts->newEmptyEntity();
        $this->Authorization->authorize($post);
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());

            $post->user_id = $this->request->getAttribute('identity')->getIdentifier();
            $post->category_id = 1;


            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
        // Get a list of tags.
        $tags = $this->Posts->Tags->find('list')->all();

        // Set tags to the view context
        $this->set('tags', $tags);
        //set post to the view context
        $this->set('post', $post);
    }

    public function edit($slug)
    {
        $post = $this->Posts
        ->findBySlug($slug)
        ->contain('Tags')
        ->firstOrFail();
        $this->Authorization->authorize($post);
        if ($this->request->is(['post', 'put'])) {
            $this->Posts->patchEntity($post, $this->request->getData(),[
                'accessibleFields' => ['user_id' => false]
            ]);
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
        // Get a list of tags.
        $tags = $this->Posts->Tags->find('list')->all();

        // Set tags to the view context
        $this->set('tags', $tags);

        $this->set('post', $post);
    }
    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);

        $post = $this->Posts->findBySlug($slug)->firstOrFail();
        $this->Authorization->authorize($post);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post titled {0} has been deleted.', $post->title));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function tags(...$tags)
    {
        // The 'pass' key is provided by CakePHP and contains all
        // the passed URL path segments in the request.
        // $tags = $this->request->getParam('pass');
        $posts = $this->Posts->find('tagged', [
                'tags' => $tags
            ])
            ->all();
            $this->Authorization->skipAuthorization();

        // Pass variables into the view template context.
        $this->set([
            'posts' => $posts,
            'tags' => $tags
        ]);
    }
}
