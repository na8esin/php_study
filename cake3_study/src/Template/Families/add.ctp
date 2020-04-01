<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Family $family
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="families form large-9 medium-8 columns content">
    <?= $this->Form->create($family) ?>
    <fieldset>
        <legend><?= __('Add Family') ?></legend>
        <?php
            echo $this->Form->control('customer_id');
            echo $this->Form->control('lname');
            echo $this->Form->control('fname');
            echo $this->Form->control('lname_kana');
            echo $this->Form->control('fname_kana');
            echo $this->Form->control('gender');
            echo $this->Form->control('birthday', ['empty' => true]);
            echo $this->Form->control('relation');
            echo $this->Form->control('job_name');
            echo $this->Form->control('job_type');
            echo $this->Form->control('smoking');
            echo $this->Form->control('note');
            echo $this->Form->control('created_user_id');
            echo $this->Form->control('modified_user_id');
            echo $this->Form->control('delete_flg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
