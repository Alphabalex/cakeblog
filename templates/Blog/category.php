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
                    <?php if (!empty($cat->posts)) : ?>
                        <?php foreach ($cat->posts as $posts) : ?>
                        <div class="col-lg-6 col-md-6">
                            <!--Post-1-->
                            <div class="post-card">
                                <div class="post-card-image">
                                <?=@$this->Html->image($posts->image,[
                            "alt"=>"post cover",
                            'url'=>['controller'=>'Blog', 'action'=>'view',$posts->id]
                        ]) ?>
                                </div>
                                <div class="post-card-content">
                                    <a href="<?=$this->Url->build(['controller' => 'Blog', 'action' => 'category', $cat->id]) ?>" class="categorie"><?= h($cat->title) ?></a>
                                    <h5>
                                        <a href="<?=$this->Url->build(['controller' => 'Blog', 'action' => 'view', $posts->id]) ?>"><?= h($posts->title) ?></a>
                                    </h5>
                                    <p>
                                    <?= $this->Text->truncate(
                                        $posts->body,
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
                                                <a href="#"><?= $posts->user->firstname.' '. $posts->user->lastname?></a>
                                            </li>
                                            <li class="dot"></li>
                                            <li><?= h($posts->created) ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                            <!--/-->
                        </div>
                    </div>
                <div class="col-lg-4 max-width">
                    <!--widget-latest-posts-->
                    <?= $this->element('sidebar'); ?>
                    <!--/-->

                    <!--widget-categories-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Categories</h5>
                        </div>
                        <ul class="widget-categories">
                        <?php foreach($categories as $key=> $category):?>
                        <?php if(!empty($category->posts)):?>
                            <li>
                                <a href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'category',$category->id])?>" class="categorie"><?= $category->title?></a>
                                <span class="ml-auto"><?=count($category->posts)?></span>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/-->
