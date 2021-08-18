    <!--search-->
<section class="categorie-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="categorie-title">
                         <small>
                            <a href="<?= $this->Url->build('/') ?>">Home</a>
                            <span class="arrow_carrot-right"></span> Search
                        </small>
                        <h3>Search results for : <span> <?= h($search) ?></span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--grid-layout-->
    <section class="mt-80">
        <div class="container-fluid">
            <div class="row">
            <?php foreach($posts as $post): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="post-card">
                        <div class="post-card-image">
                        <?=@$this->Html->image($post->image,[
                            "alt"=>"post cover",
                            'url'=>['controller'=>'Blog', 'action'=>'view',$post->id]
                        ]) ?>
                        </div>
                        <div class="post-card-content">
                            <a href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'category',$post->category->id])?>" class="categorie"><?= h($post->category->title) ?></a>
                            <h5>
                                <a href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'view',$post->id])?>"><?= h($post->title) ?></a>
                            </h5>
                            <p>
                            <?= $this->Text->truncate(
                                $post->body,
                                250,
                                [
                                    'ellipsis'=>'...',
                                    'exact'=>false
                                ]
                            ); ?>
                            </p>
                            <div class="post-card-info">
                                <ul class="list-inline">
                                    <!-- <li>
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="author.html"><?= h($post->user->lastname) ?> <?= h($post->user->firstname) ?></a>
                                    </li>
                                    <li class="dot"></li>
                                    <li><?= h($post->created) ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php
                $paginator=$this->Paginator->setTemplates([
                    'number'=>'<li><a href="{{url}}">{{text}}</a></li>',
                    'current'=>'<li class="active"><a href="{{url}}">{{text}}</a></li>',
                    'first'=>'<li><a href="{{url}}"><i class="arrow_carrot-2left"></i></a></li>',
                    'last'=>'<li><a href="{{url}}"><i class="arrow_carrot-2right"></i></a></li>',
                    'prevActive'=>'<li><a href="{{url}}"><i class="arrow_carrot-left"></i></a></li>',
                    'nextActive'=>'<li><a href="{{url}}"><i class="arrow_carrot-right"></i></a></li>'
                ]);
                ?>
                <!--pagination-->
                <div class="col-lg-12">
                    <div class="pagination mt--10">
                        <ul class="list-inline">
                            <?php
                            echo $paginator->first();
                            if($paginator->hasPrev()){
                                echo $paginator->prev();
                            }
                            echo $paginator->numbers();
                            if($paginator->hasNext()){
                                echo $paginator->next();
                            }
                            echo $paginator->last();
                            ?>
                        </ul>
                    </div>
                    <p class="text-center"><?= $paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} post(s) out of {{count}} total')) ?></p>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>
    <!--/-->




