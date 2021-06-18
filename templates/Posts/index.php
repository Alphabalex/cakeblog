<h1>Posts</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
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
    </tr>
    <?php endforeach; ?>
</table>
