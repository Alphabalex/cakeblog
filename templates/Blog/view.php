 <!--post-default-->
 <section class="section pt-55 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mb-20">
                    <!--Post-single-->
                    <div class="post-single">
                        <div class="post-single-image">
                        <?=@$this->Html->image($post->image,[
                            "alt"=>"post cover",
                            'url'=>['controller'=>'Blog', 'action'=>'view',$post->id]
                        ]) ?>
                        </div>
                        <div class="post-single-content">
                        <?= $post->has('category') ? $this->Html->link($post->category->title, ['controller' => 'Blog', 'action' => 'category', $post->category->id],['class'=>'categorie']) : '' ?>
                            <h4><?= h($post->title) ?></h4>
                            <div class="post-single-info">
                                <ul class="list-inline">
                                    <li><a href="author.html"><img src="assets/img/author/1.jpg" alt=""></a></li>
                                    <li><a href="#"><?= h($post->user->lastname) ?> <?= h($post->user->firstname) ?></a> </li>
                                    <li class="dot"></li>
                                    <li><?= h($post->modified) ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="post-single-body">
                            <p>
                                <?= $this->Text->autoParagraph(h($post->body)); ?>
                            </p>
                            <div class="row">
                                <div class="col-md-12 ">
                                </div>
                            </div>
                        </div> <!--/-->

                    <!--next & previous-posts-->
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-next-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="post-default.html">
                                                <img src="assets/img/latest/1.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="post-default.html">
                                                    <i class="arrow_left"></i>Preview post</a>
                                            </div>
                                            <a href="post-default.html">7 Healty Dinner Recipes for a Date Night at Home</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-previous-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="post-default.html">
                                                <img src="assets/img/blog/2.jpg" alt="...">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="post-default.html">
                                                    <span> Next post</span>
                                                    <span class="arrow_right"></span>
                                                </a>
                                            </div>
                                            <a href="post-default.html">How to Choose Outfits for Work for woman and men</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/-->

                </div>
            </div>
        </div>
    </section><!--/-->
