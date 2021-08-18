<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $this->paginate = [
            'contain' => ['Categories','Users'],
            'order'=>['Posts.id DESC'],
        ];
        $posts = $this->paginate($this->Posts);
        $this->set(compact('posts'));
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Categories'],
        ]);
        // $post= $this->Posts->findBySlug($slug)->contain(['Categories','Tags'])->firstOrFail();
        $this->Authorization->skipAuthorization();
        $this->set(compact('post'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Posts->newEmptyEntity();
        $this->Authorization->authorize($post);
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if(!$post->getErrors){
                $image=$this->request->getData('post_image');
                $name=$image->getClientFilename();
                $path=WWW_ROOT.'img'.DS.$name;
                if($name){
                    $image->moveTo($path);
                    $post->image=$name;
                }
            }
            $post->user_id = $this->request->getAttribute('identity')->getIdentifier();
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $categories = $this->Posts->Categories->find('list', ['limit' => 200]);
        $this->set(compact('post', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Categories'],
        ]);
        $this->Authorization->authorize($post);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData(),[
                'accessibleFields' => ['user_id' => false]
            ]);
            if(!$post->getErrors){
                $image=$this->request->getData('change_image');
                $name=$image->getClientFilename();
                if($name){
                    $path=WWW_ROOT.'img'.DS.$name;
                    $image->moveTo($path);
                    if($post->image!='')
                    {
                        $current_image=WWW_ROOT.'img'.DS.$post->image;
                        if(file_exists($current_image))
                        {
                            unlink($current_image);
                        }
                    }

                    $post->image=$name;
                }
            }
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $categories = $this->Posts->Categories->find('list', ['limit' =>100 ]);
        $this->set(compact('post', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        $this->Authorization->authorize($post);
        if($post->image!='')
        {
            $current_image=WWW_ROOT.'img'.DS.$post->image;
        }
        if ($this->Posts->delete($post)) {
            if(file_exists($current_image))
            {
                unlink($current_image);
            }
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
