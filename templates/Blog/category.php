<!--category-->
<section class="categorie-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="categorie-title">
                         <small>
                            <a href="<?= $this->Url->build('/') ?>">Home</a>
                            <span class="arrow_carrot-right"></span> <?= h($cat->title) ?>
                        </small>
                        <h3>Category : <span> <?= h($cat->title) ?></span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--blog-grid-->
    <section class="blog-grid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt-30">
                    <div class="row">
                    <?php if (!empty($posts)) : ?>
                        <?php foreach ($posts as $post) : ?>
                        <div class="col-lg-6 col-md-6">
                            <!--Post-1-->
                            <div class="post-card">
                                <div class="post-card-image">
                                <?=@$this->Html->image($post->image,[
                            "alt"=>"post cover",
                            'url'=>['controller'=>'Blog', 'action'=>'view',$post->id]
                        ]) ?>
                                </div>
                                <div class="post-card-content">
                                    <a href="<?=$this->Url->build(['controller' => 'Blog', 'action' => 'category', $cat->id]) ?>" class="categorie"><?= h($cat->title) ?></a>
                                    <h5>
                                        <a href="<?=$this->Url->build(['controller' => 'Blog', 'action' => 'view', $post->id]) ?>"><?= h($post->title) ?></a>
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
                                            <li>
                                                <a href="#"><?= $post->user->firstname.' '. $post->user->lastname?></a>
                                            </li>
                                            <li class="dot"></li>
                                            <li><?= h($post->created) ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                            <!--/-->
                    <?= $this->element('paginator'); ?>
                        </div>
                    </div>
                <div class="col-lg-4 max-width">
                    <!--widget-latest-posts-->
                    <?= $this->element('sidebar'); ?>
                    <!--/-->

                    <!--widget-categories-->
                    <?= $this->element('category'); ?>
                </div>
            </div>
        </div>
    </section><!--/-->
