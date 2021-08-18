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
        $this->Authentication->addUnauthenticatedActions(['index','about','contact','category','view','search','author']);
        // loading category model
        $this->loadModel('Categories');
        $categories = $this->Categories->find('all',['contain'=>'Posts']);
        $this->set('categories',$categories);
        // loading post model
        $this->loadModel('Posts');
        $latests=$this->Posts->find('all')->order(['Posts.id DESC'])->limit('5');
        $this->set('latests',$latests);
        // loading user model
        $this->loadModel('Users');
        $authors = $this->Users->find('all',['contain'=>'Posts']);
        $this->set('authors',$authors);
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
            'conditions'=>['Posts.published'=>'1'],
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
        $this->paginate = ['contain' => [
            'Users','Categories'=>['conditions' => ['Categories.id'=>$id]]],
            'limit'=>'10',
            'order'=>['Posts.id DESC'],
            'conditions'=>['Posts.published'=>'1']
        ];
        $posts = $this->paginate($this->Posts);
        $cat = $this->Categories->get($id, [
            'contain' => ['Posts'],
        ]);

        $this->set(compact('cat','posts'));
    }

    public function author($id=null)
    {
        $this->Authorization->skipAuthorization();
        $this->paginate = ['contain' => [
            'Users'=>['conditions' => ['Users.id'=>$id]],'Categories'],
            'limit'=>'10',
            'order'=>['Posts.id DESC'],
            'conditions'=>['Posts.published'=>'1']
        ];
        $author = $this->Users->get($id, [
            'contain' => ['Posts'=>['conditions' => ['Posts.published'=>'1']]],
        ]);
        $posts = $this->paginate($this->Posts);
        $this->set(compact('posts','author'));
    }

    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $post = $this->Posts->get($id, [
            'contain' => ['Categories','Users'],
        ]);
        $prev = $this->Posts->find('prev',['id'=>$id])->first();
        $next = $this->Posts->find('next',['id'=>$id])->first();
        $this->set(compact('post','prev','next'));
    }

    public function search()
    {
        $this->Authorization->skipAuthorization();
        $search=$this->request->getQuery('q');
        $this->paginate = [
            'contain' => ['Categories','Users'],
            'limit'=>'10',
            'order'=>['Posts.id DESC'],
            'conditions'=>['Posts.published'=>'1']
        ];
        $posts = $this->paginate($this->Posts->find()->where(function($exp,$query) use($search){
            return $exp->like('Posts.title','%'.$search.'%');
        }));
        $this->set(compact('posts','search'));

    }

}
