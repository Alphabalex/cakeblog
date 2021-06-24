    <div class="column-responsive column-80">
        <div class="posts form content">
            <?= $this->Form->create($post) ?>
            <fieldset>
                <legend><?= __('Edit Post') ?></legend>
                <?php
                    echo $this->Form->control('category_id', ['options' => $categories]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('body');
                    echo $this->Form->control('published');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete this post #{0}?', $post->id), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </div>
