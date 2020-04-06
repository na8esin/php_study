<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appoint $appoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Appoints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mail Logs'), ['controller' => 'MailLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mail Log'), ['controller' => 'MailLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="appoints form large-9 medium-8 columns content">
    <?= $this->Form->create($appoint) ?>
    <fieldset>
        <legend><?= __('Add Appoint') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('customer_id', ['options' => $customers, 'empty' => true]);
            echo $this->Form->control('role');
            echo $this->Form->control('date_from');
            echo $this->Form->control('date_from_hhmm');
            echo $this->Form->control('date_to');
            echo $this->Form->control('date_to_hhmm');
            echo $this->Form->control('contacted', ['empty' => true]);
            echo $this->Form->control('status_code');
            echo $this->Form->control('child_status_code');
            echo $this->Form->control('grandson_status_code');
            echo $this->Form->control('repeat_pattern_div');
            echo $this->Form->control('repeat_week_div');
            echo $this->Form->control('repeat_pattern_dayofweek');
            echo $this->Form->control('repeat_pattern_month_dayofmonth');
            echo $this->Form->control('repeat_end_date', ['empty' => true]);
            echo $this->Form->control('tel');
            echo $this->Form->control('spot');
            echo $this->Form->control('spot_url');
            echo $this->Form->control('note');
            echo $this->Form->control('note_cc');
            echo $this->Form->control('note_etc1');
            echo $this->Form->control('note_etc2');
            echo $this->Form->control('note_etc3');
            echo $this->Form->control('presented_lifeplan', ['empty' => true]);
            echo $this->Form->control('presented_lifeplan_means');
            echo $this->Form->control('presence_relation');
            echo $this->Form->control('presence_note');
            echo $this->Form->control('interest_car_insurer');
            echo $this->Form->control('is_counter_introduction');
            echo $this->Form->control('result_counter_introduction');
            echo $this->Form->control('google_calendar_id');
            echo $this->Form->control('presented_lifeplan_flg');
            echo $this->Form->control('presence_flg');
            echo $this->Form->control('created_user_id');
            echo $this->Form->control('modified_user_id');
            echo $this->Form->control('delete_flg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
