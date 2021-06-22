<!-- Navigation-->
<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
            <?= $this->Html->image("logo-dark.png", [
            "alt" => "logo",
            "class"=>"logo-dark",
            'url' => ['controller' => 'Blog', 'action' => 'index']
            ]);
            ?>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Users', 'action'=>'login']) ?>"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Users', 'action'=>'logout']) ?>"> Logout </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=$this->Url->build(['controller'=>'Users', 'action'=>'register']) ?>"> Sign up </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"> Authors </a>
                    </li>
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
                            <a href="#">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
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
