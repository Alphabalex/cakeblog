 <!--post-default-->
 <section class="section pt-55 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-20">
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
                        <div class="post-single-footer">
                            <div class="tags">
                                <ul class="list-inline">
                                    <li>
                                        <a href="blog-grid.html">Travel</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">Nature</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">tips</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">forest</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">beach</a>
                                    </li>
                                
                                </ul>
                            </div>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>                           
                        </div>
                </div>
                <!--next & previous-posts-->
                <div class="row">
                    <?php if(!empty($prev)): ?>
                    <div class="col-md-6">
                        <div class="widget">
                            <div class="widget-next-post">
                                <div class="small-post">
                                    <div class="image">
                                    <?=@$this->Html->image($prev->image,[
                                        "alt"=>"post cover",
                                        'url'=>['controller'=>'Blog', 'action'=>'view',$prev->id]
                                    ]) ?>                                         
                                    </div>
                                    <div class="content">
                                        <div>
                                            <a class="link" href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'view',$prev->id]) ?>"><i class="arrow_left"></i>Previous post</a>
                                        </div>
                                        <?=$this->Html->link(h($prev->title),['controller'=>'Blog', 'action'=>'view',$prev->id])?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($next)): ?>
                    <div class="col-md-6">
                        <div class="widget">
                            <div class="widget-previous-post">
                                <div class="small-post">
                                    <div class="image">
                                    <?=@$this->Html->image($next->image,[
                                        "alt"=>"post cover",
                                        'url'=>['controller'=>'Blog', 'action'=>'view',$next->id]
                                    ]) ?>  
                                    </div>
                                    <div class="content">
                                        <div>
                                            <a class="link" href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'view',$next->id]) ?>">
                                                <span> Next post</span>
                                                <span class="arrow_right"></span>
                                            </a>
                                        </div>
                                        <?=$this->Html->link(h($next->title),['controller'=>'Blog', 'action'=>'view',$next->id])?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div><!--/-->
                <!--widget-comments-->
                <div class="widget mb-50">
                        <div class="title">
                            <h5>3 Comments</h5>
                        </div>
                        <ul class="widget-comments">
                            <li class="comment-item">
                                <img src="assets/img/user/1.jpg" alt="">
                                <div class="content">
                                    <ul class="info list-inline">
                                        <li>Mohammed Ali</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat
                                        quod non fugiat aliquid sit similique!
                                    </p>
                                    <div><a href="#" class="link"> <i class="arrow_back"></i> Reply</a></div>
                                </div>
                            </li>
                            <li class="comment-item">
                                <img src="assets/img/author/1.jpg" alt="">
                                <div class="content">
                                    <ul class="info list-inline">
                                        <li>Simon Albert</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>
                                                      
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat quod non
                                        fugiat aliquid sit similique!
                                    </p>
                                    <div>
                                        <a href="#" class="link">
                                            <i class="arrow_back"></i> Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-item">
                                <img src="assets/img/user/2.jpg" alt="">
                                <div class="content">
                               
                                    <ul class="info list-inline">
                                        <li>Adam bobly</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>
                    
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus at doloremque adipisci eum placeat
                                        quod non fugiat aliquid sit similique!
                                    </p>

                                    <div>
                                        <a href="#" class="link">
                                            <i class="arrow_back"></i> Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                       <!--Leave-comments-->
                        <div class="title">
                            <h5>Leave a Reply</h5>
                        </div>
                        <form class="widget-form" action="#" method="POST" id="main_contact_form">
                            <p>Your email address will not be published ,Required fields are marked *.</p>
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message*" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name*" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="required">
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>
                                        <input name="name" type="checkbox" value="1" required="required"> 
                                       <span>save my name and email in this browser for the next time I comment.</span>                                   
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn-custom">
                                        Post Comment
                                    </button>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 max-width">
                    <!--widget-author-->
                    <?= $this->element('author'); ?>
                    <!--/-->
                    <?= $this->element('sidebar'); ?>
                   
                    <!--widget-categories-->
                    <?= $this->element('category'); ?>
                    <!--/-->
                    
                    <!--widget-instagram-->
                    <?= $this->element('instagram'); ?>
                    <!--/-->

                    <!--widget-tags-->
                    <?= $this->element('tag'); ?>
                    <!--/-->
                </div>
            </div>
        </div>
    </section><!--/-->
