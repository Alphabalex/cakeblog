<?php $title="cakeblog | Home";?>
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
    <?= $this->element('newsletter'); ?>
    <?= $this->element('footer'); ?>
    <?= $this->Html->script(['jquery-3.5.0.min', 'popper.min', 'bootstrap.min','ajax-contact','owl.carousel.min','switch','main']) ?>
    <?= $this->fetch('script') ?>
</body>
</html>
