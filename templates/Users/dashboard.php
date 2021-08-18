<div class="column-responsive column-80">
    <div class="posts index content">
        <?= $this->Html->link(__('New Post'), ['controller'=>'Posts','action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Posts') ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('user_id','Author') ?></th>
                        <th><?= $this->Paginator->sort('category_id') ?></th>
                        <th><?= $this->Paginator->sort('title') ?></th>
                        <th><?= $this->Paginator->sort('image') ?></th>
                        <th><?= $this->Paginator->sort('published') ?></th>
                        <th><?= $this->Paginator->sort('created') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?= $this->Number->format($post->id) ?></td>
                        <td>
                        <?= $post->user->lastname ?>
                        <?= $post->user->firstname ?>
                        </td>
                        <td><?= $post->has('category') ? $this->Html->link($post->category->title, ['controller' => 'Categories', 'action' => 'view', $post->category->id]) : '' ?></td>
                        <td><?= h($post->title) ?></td>
                        <td><?=@$this->Html->image($post->image,['width' => '100','height'=>'100']) ?></td>
                        <td><?= h($post->published) ?></td>
                        <td><?= h($post->created) ?></td>
                        <td><?= h($post->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller'=>'Posts','action' => 'view', $post->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller'=>'Posts','action' => 'edit', $post->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller'=>'Posts','action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?= $this->element('paginator'); ?>
    </div>
</div>

