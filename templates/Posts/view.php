
<h1><?= h($post->title) ?></h1>
<p><?= h($post->body) ?></p>
<p><small>Created: <?= $post->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $post->slug]) ?></p>
<p><b>Tags:</b> <?= h($post->tag_string) ?></p>
