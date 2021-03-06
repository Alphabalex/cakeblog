<!--footer-->
<footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 text-center">
                    <div class="copyright">
                        <p>© Copyright 2021 Made By
                            <a href="https://linkedin.com/in/abdulquddus-balogun-905595143" target="_blank">Balogun Abdulquddus</a>, All rights reserved.</p>
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="arrow_up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="search-width  text-center">
                <button type="button" class="close">
                    <i class="icon_close"></i>
                </button>
                <form class="search-form" action="<?= $this->Url->build(['controller'=>'Blog', 'action'=>'search'])?>" method="get">
                    <input type="search" placeholder="What are you looking for?" name="q">
                    <button type="submit" class="search-btn">search</button>
                </form>
            </div>
        </div>
    </div>
    <!--/-->
