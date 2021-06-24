    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    $roles=['admin'=>'admin','author'=>'author'];
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('role', ['options' => $roles]);
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete this user #{0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
        </div>
    </div>
