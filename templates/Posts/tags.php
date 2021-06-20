<h1>
    Posts tagged with
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
<?php foreach ($posts as $post): ?>
    <article>
        <h4><?= $this->Html->link(
            $post->title,
            ['controller' => 'Posts', 'action' => 'view', $post->slug]
        ) ?></h4>
        <span><?= h($post->created) ?></span>
    </article>
<?php endforeach; ?>
</section>
