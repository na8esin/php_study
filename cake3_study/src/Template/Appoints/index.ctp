<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appoint[]|\Cake\Collection\CollectionInterface $appoints
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Appoint'), ['action' => 'add']) ?></li>
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
<div class="appoints index large-9 medium-8 columns content">
    <h3><?= __('Appoints') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_from_hhmm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_to_hhmm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contacted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('child_status_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grandson_status_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('repeat_pattern_div') ?></th>
                <th scope="col"><?= $this->Paginator->sort('repeat_week_div') ?></th>
                <th scope="col"><?= $this->Paginator->sort('repeat_pattern_dayofweek') ?></th>
                <th scope="col"><?= $this->Paginator->sort('repeat_pattern_month_dayofmonth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('repeat_end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('spot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presented_lifeplan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presented_lifeplan_means') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presence_relation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presence_note') ?></th>
                <th scope="col"><?= $this->Paginator->sort('interest_car_insurer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_counter_introduction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('result_counter_introduction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('google_calendar_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presented_lifeplan_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presence_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete_flg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($appoints as $appoint): ?>
            <tr>
                <td><?= $this->Number->format($appoint->id) ?></td>
                <td><?= $appoint->has('user') ? $this->Html->link($appoint->user->name, ['controller' => 'Users', 'action' => 'view', $appoint->user->id]) : '' ?></td>
                <td><?= $appoint->has('customer') ? $this->Html->link($appoint->customer->id, ['controller' => 'Customers', 'action' => 'view', $appoint->customer->id]) : '' ?></td>
                <td><?= h($appoint->role) ?></td>
                <td><?= h($appoint->date_from) ?></td>
                <td><?= h($appoint->date_from_hhmm) ?></td>
                <td><?= h($appoint->date_to) ?></td>
                <td><?= h($appoint->date_to_hhmm) ?></td>
                <td><?= h($appoint->contacted) ?></td>
                <td><?= h($appoint->status_code) ?></td>
                <td><?= h($appoint->child_status_code) ?></td>
                <td><?= h($appoint->grandson_status_code) ?></td>
                <td><?= h($appoint->repeat_pattern_div) ?></td>
                <td><?= h($appoint->repeat_week_div) ?></td>
                <td><?= h($appoint->repeat_pattern_dayofweek) ?></td>
                <td><?= h($appoint->repeat_pattern_month_dayofmonth) ?></td>
                <td><?= h($appoint->repeat_end_date) ?></td>
                <td><?= h($appoint->tel) ?></td>
                <td><?= h($appoint->spot) ?></td>
                <td><?= h($appoint->presented_lifeplan) ?></td>
                <td><?= h($appoint->presented_lifeplan_means) ?></td>
                <td><?= h($appoint->presence_relation) ?></td>
                <td><?= h($appoint->presence_note) ?></td>
                <td><?= $this->Number->format($appoint->interest_car_insurer) ?></td>
                <td><?= h($appoint->is_counter_introduction) ?></td>
                <td><?= h($appoint->result_counter_introduction) ?></td>
                <td><?= h($appoint->google_calendar_id) ?></td>
                <td><?= h($appoint->presented_lifeplan_flg) ?></td>
                <td><?= h($appoint->presence_flg) ?></td>
                <td><?= h($appoint->created) ?></td>
                <td><?= $this->Number->format($appoint->created_user_id) ?></td>
                <td><?= h($appoint->modified) ?></td>
                <td><?= $this->Number->format($appoint->modified_user_id) ?></td>
                <td><?= $this->Number->format($appoint->delete_flg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $appoint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appoint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoint->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
