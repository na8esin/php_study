<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appoint $appoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Appoint'), ['action' => 'edit', $appoint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appoint'), ['action' => 'delete', $appoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appoint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Appoints'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appoint'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mail Logs'), ['controller' => 'MailLogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mail Log'), ['controller' => 'MailLogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="appoints view large-9 medium-8 columns content">
    <h3><?= h($appoint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $appoint->has('user') ? $this->Html->link($appoint->user->name, ['controller' => 'Users', 'action' => 'view', $appoint->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $appoint->has('customer') ? $this->Html->link($appoint->customer->id, ['controller' => 'Customers', 'action' => 'view', $appoint->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($appoint->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date From Hhmm') ?></th>
            <td><?= h($appoint->date_from_hhmm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date To Hhmm') ?></th>
            <td><?= h($appoint->date_to_hhmm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Code') ?></th>
            <td><?= h($appoint->status_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Child Status Code') ?></th>
            <td><?= h($appoint->child_status_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grandson Status Code') ?></th>
            <td><?= h($appoint->grandson_status_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Repeat Pattern Div') ?></th>
            <td><?= h($appoint->repeat_pattern_div) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Repeat Week Div') ?></th>
            <td><?= h($appoint->repeat_week_div) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Repeat Pattern Dayofweek') ?></th>
            <td><?= h($appoint->repeat_pattern_dayofweek) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Repeat Pattern Month Dayofmonth') ?></th>
            <td><?= h($appoint->repeat_pattern_month_dayofmonth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($appoint->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Spot') ?></th>
            <td><?= h($appoint->spot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presented Lifeplan Means') ?></th>
            <td><?= h($appoint->presented_lifeplan_means) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presence Relation') ?></th>
            <td><?= h($appoint->presence_relation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presence Note') ?></th>
            <td><?= h($appoint->presence_note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Counter Introduction') ?></th>
            <td><?= h($appoint->is_counter_introduction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Result Counter Introduction') ?></th>
            <td><?= h($appoint->result_counter_introduction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Google Calendar Id') ?></th>
            <td><?= h($appoint->google_calendar_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($appoint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Interest Car Insurer') ?></th>
            <td><?= $this->Number->format($appoint->interest_car_insurer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created User Id') ?></th>
            <td><?= $this->Number->format($appoint->created_user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified User Id') ?></th>
            <td><?= $this->Number->format($appoint->modified_user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete Flg') ?></th>
            <td><?= $this->Number->format($appoint->delete_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date From') ?></th>
            <td><?= h($appoint->date_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date To') ?></th>
            <td><?= h($appoint->date_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacted') ?></th>
            <td><?= h($appoint->contacted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Repeat End Date') ?></th>
            <td><?= h($appoint->repeat_end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presented Lifeplan') ?></th>
            <td><?= h($appoint->presented_lifeplan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($appoint->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($appoint->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presented Lifeplan Flg') ?></th>
            <td><?= $appoint->presented_lifeplan_flg ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presence Flg') ?></th>
            <td><?= $appoint->presence_flg ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Spot Url') ?></h4>
        <?= $this->Text->autoParagraph(h($appoint->spot_url)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($appoint->note)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note Cc') ?></h4>
        <?= $this->Text->autoParagraph(h($appoint->note_cc)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note Etc1') ?></h4>
        <?= $this->Text->autoParagraph(h($appoint->note_etc1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note Etc2') ?></h4>
        <?= $this->Text->autoParagraph(h($appoint->note_etc2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note Etc3') ?></h4>
        <?= $this->Text->autoParagraph(h($appoint->note_etc3)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Applications') ?></h4>
        <?php if (!empty($appoint->applications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Appoint Id') ?></th>
                <th scope="col"><?= __('Applied') ?></th>
                <th scope="col"><?= __('Contracted Date') ?></th>
                <th scope="col"><?= __('Notification Date') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Concluded') ?></th>
                <th scope="col"><?= __('Application Type') ?></th>
                <th scope="col"><?= __('Start Deduction') ?></th>
                <th scope="col"><?= __('Contractor') ?></th>
                <th scope="col"><?= __('Contractor Job') ?></th>
                <th scope="col"><?= __('Contractor Job Name') ?></th>
                <th scope="col"><?= __('Policy Number') ?></th>
                <th scope="col"><?= __('Insurant') ?></th>
                <th scope="col"><?= __('Insurant Job') ?></th>
                <th scope="col"><?= __('Insurant Job Name') ?></th>
                <th scope="col"><?= __('Insurant Id') ?></th>
                <th scope="col"><?= __('Product Category Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Pay Type') ?></th>
                <th scope="col"><?= __('Period Insurer Type') ?></th>
                <th scope="col"><?= __('Period Insurer Date') ?></th>
                <th scope="col"><?= __('Premium') ?></th>
                <th scope="col"><?= __('Annual Premium') ?></th>
                <th scope="col"><?= __('Is Transfer') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Constituent') ?></th>
                <th scope="col"><?= __('Death Benefit') ?></th>
                <th scope="col"><?= __('Checked User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created User Id') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Modified User Id') ?></th>
                <th scope="col"><?= __('Delete Flg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($appoint->applications as $applications): ?>
            <tr>
                <td><?= h($applications->id) ?></td>
                <td><?= h($applications->customer_id) ?></td>
                <td><?= h($applications->appoint_id) ?></td>
                <td><?= h($applications->applied) ?></td>
                <td><?= h($applications->contracted_date) ?></td>
                <td><?= h($applications->notification_date) ?></td>
                <td><?= h($applications->status) ?></td>
                <td><?= h($applications->concluded) ?></td>
                <td><?= h($applications->application_type) ?></td>
                <td><?= h($applications->start_deduction) ?></td>
                <td><?= h($applications->contractor) ?></td>
                <td><?= h($applications->contractor_job) ?></td>
                <td><?= h($applications->contractor_job_name) ?></td>
                <td><?= h($applications->policy_number) ?></td>
                <td><?= h($applications->insurant) ?></td>
                <td><?= h($applications->insurant_job) ?></td>
                <td><?= h($applications->insurant_job_name) ?></td>
                <td><?= h($applications->insurant_id) ?></td>
                <td><?= h($applications->product_category_id) ?></td>
                <td><?= h($applications->product_id) ?></td>
                <td><?= h($applications->pay_type) ?></td>
                <td><?= h($applications->period_insurer_type) ?></td>
                <td><?= h($applications->period_insurer_date) ?></td>
                <td><?= h($applications->premium) ?></td>
                <td><?= h($applications->annual_premium) ?></td>
                <td><?= h($applications->is_transfer) ?></td>
                <td><?= h($applications->note) ?></td>
                <td><?= h($applications->constituent) ?></td>
                <td><?= h($applications->death_benefit) ?></td>
                <td><?= h($applications->checked_user_id) ?></td>
                <td><?= h($applications->created) ?></td>
                <td><?= h($applications->created_user_id) ?></td>
                <td><?= h($applications->modified) ?></td>
                <td><?= h($applications->modified_user_id) ?></td>
                <td><?= h($applications->delete_flg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Applications', 'action' => 'view', $applications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Applications', 'action' => 'edit', $applications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applications', 'action' => 'delete', $applications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Mail Logs') ?></h4>
        <?php if (!empty($appoint->mail_logs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Kind') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Appoint Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Opened') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($appoint->mail_logs as $mailLogs): ?>
            <tr>
                <td><?= h($mailLogs->id) ?></td>
                <td><?= h($mailLogs->code) ?></td>
                <td><?= h($mailLogs->kind) ?></td>
                <td><?= h($mailLogs->customer_id) ?></td>
                <td><?= h($mailLogs->appoint_id) ?></td>
                <td><?= h($mailLogs->user_id) ?></td>
                <td><?= h($mailLogs->opened) ?></td>
                <td><?= h($mailLogs->created) ?></td>
                <td><?= h($mailLogs->created_user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MailLogs', 'action' => 'view', $mailLogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MailLogs', 'action' => 'edit', $mailLogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MailLogs', 'action' => 'delete', $mailLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailLogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
