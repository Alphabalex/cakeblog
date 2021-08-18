<!-- Navigation-->
<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
            <a href="<?=$this->Url->build(['controller' => 'Blog', 'action' => 'index'])?>">
                <?= $this->Html->image("logo-dark.png",["class"=>"logo-dark","alt" => "logo"]) ?>
                <?= $this->Html->image("logo-white.png",["class"=>"logo-white","alt" => "logo"]) ?>
            </a>
            </div>
            <!--/-->

            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'index']) ?>"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'about']) ?>"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'contact']) ?>"> Contact </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Categories</a>
                        <ul class="dropdown-menu fade-up">
                        <?php foreach($categories as $key=> $category):?>
                        <?php if(!empty($category->posts)):?>
                            <li><a class="dropdown-item" href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'category',$category->id])?>"><?= $category->title?></a></li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Authors</a>
                        <ul class="dropdown-menu fade-up">
                        <?php foreach($authors as $key=> $author):?>
                        <?php if(!empty($author->posts)):?>
                            <li><a class="dropdown-item" href="<?=$this->Url->build(['controller'=>'Blog', 'action'=>'author',$author->id])?>"><?= $author->firstname.' '.$author->lastname?></a></li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php if($this->Identity->isLoggedIn()):?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Users', 'action'=>'dashboard']) ?>"> Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Users', 'action'=>'logout']) ?>"> Logout </a>
                    </li>
                    <?php else:?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Users', 'action'=>'login']) ?>"> Login </a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
            <!--/-->

            <!--navbar-right-->
            <div class="navbar-right ml-auto">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="https://wa.me/+2348085744967" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/in/abdulquddus-balogun-905595143" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/Alphabalex" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="search-icon">
                    <i class="icon_search"></i>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <!--/-->
