<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Blog Controller
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('app');
        $this->Authentication->addUnauthenticatedActions(['index','about','contact','category','view','search']);
    }
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
            'limit'=>'10',
            'order'=>['Posts.id DESC'],
        ];

        $posts = $this->paginate($this->Posts);
        $this->set(compact('posts'));

    }

    public function about()
    {
        $this->Authorization->skipAuthorization();
    }

    public function contact()
    {
        $this->Authorization->skipAuthorization();
    }

    public function category($id=null)
    {
        $this->Authorization->skipAuthorization();
        $cat = $this->Categories->get($id, [
            'contain' => ['Posts'],
        ]);

        $this->set(compact('cat'));
    }

    public function author($id=null)
    {
        $this->Authorization->skipAuthorization();
        $author = $this->Users->get($id, [
            'contain' => ['Posts'],
        ]);

        $this->set(compact('author'));
    }

    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $post = $this->Posts->get($id, [
            'contain' => ['Categories','Users'],
        ]);

        $this->set(compact('post'));
    }

    public function search()
    {
        $this->Authorization->skipAuthorization();
        $search=$this->request->getQuery('q');
        $this->paginate = [
            'contain' => ['Categories','Users'],
            'limit'=>'10',
            'order'=>['Posts.id DESC'],
        ];
        $posts = $this->paginate($this->Posts->find()->where(function($exp,$query) use($search){
            return $exp->like('Posts.title','%'.$search.'%');
        }));
        $this->set('posts',$posts);

    }

}
