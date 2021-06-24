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

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>Blog</a>
        </div>
        <div class="top-nav-links">
            <?php $name = $this->Identity->get('firstname'); ?>
            <a href="<?= $this->Url->build('/') ?>">Home</a>
            <a href="<?= $this->Url->build(['controller'=>'Users','action' => 'logout']) ?>">Logout</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <h1><?= $this->Html->link(__('Hi '.$name.'!'), ['controller'=>'Users','action' => 'dashboard'], ['class' => 'side-nav-item']) ?></h1>
            <div class="row">
                <aside class="column">
                    <div class="side-nav">
                        <h4 class="heading"><?= __('Actions') ?></h4>
                        <?= $this->Html->link(__('List Posts'), ['controller'=>'Posts','action' => 'index'], ['class' => 'side-nav-item']) ?>
                        <?= $this->Html->link(__('New Post'), ['controller'=>'Posts','action' => 'add'], ['class' => 'side-nav-item']) ?>
                        <?php if($this->Identity->get('role')=='admin'): ?>
                        <?= $this->Html->link(__('List Users'), ['controller'=>'users','action' => 'index'], ['class' => 'side-nav-item']) ?>
                        <?= $this->Html->link(__('New User'), ['controller'=>'Users','action' => 'add'], ['class' => 'side-nav-item']) ?>
                        <?= $this->Html->link(__('List Categories'), ['controller'=>'Categories','action' => 'index'], ['class' => 'side-nav-item']) ?>
                        <?= $this->Html->link(__('New Category'), ['controller'=>'Categories','action' => 'add'], ['class' => 'side-nav-item']) ?>
                    <?php endif; ?>
                    </div>
                </aside>
                <?= $this->fetch('content') ?>
            </div>

        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
