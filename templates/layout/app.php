<?php $title="cakeBLOG - Home";?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <title>
        <?= $title ?>:
        <?= $this->fetch('title') ?>
    </title>
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <?= $this->Html->css(['all', 'elegant-font-icons', 'bootstrap.min','owl.carousel','style','custom']) ?>
    <?= $this->fetch('css') ?>
</head>
<body>
<!--loading -->
<div class="loading">
        <div class="circle"></div>
</div>
<?= $this->element('nav'); ?>

    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <!--footer-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 text-center">
                    <div class="copyright">
                        <p>© Copyright 2021 Made By
                            <a href="#">Balogun Abdulquddus</a>, All rights reserved.</p>
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
                <form class="search-form" action="#">
                    <input type="search" value="" placeholder="What are you looking for?">
                    <button type="submit" class="search-btn">search</button>
                </form>
            </div>
        </div>
    </div>
    <!--/-->

    <?= $this->Html->script(['jquery-3.5.0.min', 'popper.min', 'bootstrap.min','ajax-contact','owl.carousel.min','switch','main']) ?>
    <?= $this->fetch('script') ?>
</body>
</html>
