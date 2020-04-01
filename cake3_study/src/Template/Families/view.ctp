<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Family $family
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Family'), ['action' => 'edit', $family->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Family'), ['action' => 'delete', $family->id], ['confirm' => __('Are you sure you want to delete # {0}?', $family->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="families view large-9 medium-8 columns content">
    <h3><?= h($family->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lname') ?></th>
            <td><?= h($family->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($family->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lname Kana') ?></th>
            <td><?= h($family->lname_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname Kana') ?></th>
            <td><?= h($family->fname_kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($family->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relation') ?></th>
            <td><?= h($family->relation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job Name') ?></th>
            <td><?= h($family->job_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job Type') ?></th>
            <td><?= h($family->job_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Smoking') ?></th>
            <td><?= h($family->smoking) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($family->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($family->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created User Id') ?></th>
            <td><?= $this->Number->format($family->created_user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified User Id') ?></th>
            <td><?= $this->Number->format($family->modified_user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($family->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($family->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($family->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete Flg') ?></th>
            <td><?= $family->delete_flg ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($family->note)); ?>
    </div>
</div>
