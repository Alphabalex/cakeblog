<h1>Posts</h1>
<button><?= $this->Html->link('Add Post', ['action' => 'add']) ?></button>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th colspan="2">Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <?= $this->Html->link($post->title, ['action' => 'view', $post->slug]) ?>
        </td>
        <td>
            <?= $post->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $post->slug]) ?>
        </td>
        <td>
        <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $post->slug],
                ['confirm' => 'Are you sure you want to delete this post?'])
        ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
