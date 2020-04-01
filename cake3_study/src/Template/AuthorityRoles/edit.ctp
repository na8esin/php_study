<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorityRole $authorityRole
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $authorityRole->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $authorityRole->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Authority Roles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="authorityRoles form large-9 medium-8 columns content">
    <?= $this->Form->create($authorityRole) ?>
    <fieldset>
        <legend><?= __('Edit Authority Role') ?></legend>
        <?php
            echo $this->Form->control('role_type');
            echo $this->Form->control('menu_code');
            echo $this->Form->control('func_code');
            echo $this->Form->control('action_code');
            echo $this->Form->control('authority_code');
            echo $this->Form->control('enabled');
            echo $this->Form->control('created_user_id');
            echo $this->Form->control('modified_user_id');
            echo $this->Form->control('delete_flg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
