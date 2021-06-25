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
                </div>
            </div>
        </div>
    </section><!--/-->
