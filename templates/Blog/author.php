<!--author-->
<section class="section author full-space mb-40 pt-55">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--widget-author-->
                    <div class="widget-author inner-width">
                        <h6><span>Hi, I'm <?= $author->firstname.' '. $author->lastname?></span></h6>
                        <div class="link"><?= count($author->posts)?> Articles</div>
                        <div class="social-media">
                            <ul class="list-inline">
                                <li>
                                    <a href="mailto:<?=$author->email?>" class="color-facebook">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--mansory-layout-->
    <section class="masonry-layout col2-layout mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!--cards-->
                    <div class="card-columns">
                        <!--Post-1-->
                        <?php if (!empty($author->posts)) : ?>
                        <?php foreach ($author->posts as $posts) : ?>
                        <div class="card">
                            <div class="post-card post-full">
                                <div class="post-card-image">
                                <?=@$this->Html->image($posts->image,[
                            "alt"=>"post cover",
                            'url'=>['controller'=>'Blog', 'action'=>'view',$posts->id]
                        ]) ?>
                                </div>
                                <div class="post-card-content">
                                    <a href="blog-grid.html" class="categorie"><?=$posts->category->title?></a>
                                    <h5>
                                    <a href="<?=$this->Url->build(['controller' => 'Blog', 'action' => 'view', $posts->id]) ?>"><?= h($posts->title) ?></a>
                                    </h5>
                                    <p><?= $this->Text->truncate(
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
                                            <a href="#"><?= $author->firstname.' '. $author->lastname?></a>
                                            </li>
                                            <li class="dot"></li>
                                            <li><?= h($posts->created) ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/-->
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    </div>
                    <!--/-->
                </div>

            </div>
        </div>
    </section>
    <!--/-->
