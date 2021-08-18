<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css(['all', 'elegant-font-icons', 'bootstrap.min','owl.carousel','style','custom','normalize.min', 'milligram.min', 'cake']) ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <?php $name = $this->Identity->get('firstname'); ?>
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>Blog</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center" id="navbars">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Users','action' => 'dashboard']) ?>">Dashboard<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= $this->Url->build('/') ?>">Home</a>
                    </li>
                    <?php if($this->Identity->get('role')=='admin'): ?>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown1">
                        <a class="dropdown-item" href="<?= $this->Url->build(['controller'=>'Categories','action' => 'add']) ?>">New Category</a>
                        <a class="dropdown-item" href="<?= $this->Url->build(['controller'=>'Categories','action' => 'index']) ?>">List Categories</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown2">
                        <a class="dropdown-item" href="<?= $this->Url->build(['controller'=>'Users','action' => 'add']) ?>">New User</a>
                        <a class="dropdown-item" href="<?= $this->Url->build(['controller'=>'Users','action' => 'index']) ?>">List Users</a>
                    </div>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown3">
                        <a class="dropdown-item" href="<?= $this->Url->build(['controller'=>'Posts','action' => 'add']) ?>">New Post</a>
                        <a class="dropdown-item" href="<?= $this->Url->build(['controller'=>'Posts','action' => 'index']) ?>">List Posts</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $name ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown4">
                        <a class="dropdown-item" href="<?= $this->Url->build(['controller'=>'Users','action' => 'logout']) ?>">Logout</a>
                    </div>
                    </li>
                </ul>
                </div>
            </nav>
            <?= $this->fetch('content') ?>
            </div>
        </main>
    <?= $this->element('footer'); ?>
    <?= $this->Html->script(['jquery-3.5.0.min','bootstrap.bundle.min',]) ?>
    <?= $this->fetch('script') ?>
</body>
</html>
