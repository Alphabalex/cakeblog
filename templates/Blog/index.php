    <!--grid-layout-->
    <section class="mt-80">
        <div class="container-fluid">
            <div class="row">
            <?php foreach($posts as $post): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="post-card">
                        <div class="post-card-image">
                            <a href="post-default.html">
                            <img src="assets/img/blog/25.jpg" alt="">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <a href="blog-grid.html" class="categorie"><?= h($post->category->title) ?></a>
                            <h5>
                                <a href="post-default.html"><?= h($post->title) ?></a>
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
                                        <a href="author.html">
                                            <img src="assets/img/author/1.jpg" alt="">
                                        </a>
                                    </li>
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




