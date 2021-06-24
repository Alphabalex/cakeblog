    <div class="column-responsive column-80">
        <div class="posts form content">
            <?= $this->Form->create($post,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <?php
                    echo $this->Form->control('category_id', ['options' => $categories]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('body');
                    echo $this->Form->control('post_image',['type'=>'file']);
                    echo $this->Form->control('published');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
