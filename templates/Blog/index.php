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
                                        <a href="#"><?= h($post->user->lastname) ?> <?= h($post->user->firstname) ?></a>
                                    </li>
                                    <li class="dot"></li>
                                    <li><?= h($post->created) ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?= $this->element('paginator'); ?>
            </div>
        </div>
    </section>
    <!--/-->




