<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorityRole $authorityRole
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Authority Role'), ['action' => 'edit', $authorityRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Authority Role'), ['action' => 'delete', $authorityRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorityRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Authority Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authority Role'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="authorityRoles view large-9 medium-8 columns content">
    <h3><?= h($authorityRole->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Menu Code') ?></th>
            <td><?= h($authorityRole->menu_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Func Code') ?></th>
            <td><?= h($authorityRole->func_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action Code') ?></th>
            <td><?= h($authorityRole->action_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Authority Code') ?></th>
            <td><?= h($authorityRole->authority_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($authorityRole->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role Type') ?></th>
            <td><?= $this->Number->format($authorityRole->role_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created User Id') ?></th>
            <td><?= $this->Number->format($authorityRole->created_user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified User Id') ?></th>
            <td><?= $this->Number->format($authorityRole->modified_user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($authorityRole->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($authorityRole->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enabled') ?></th>
            <td><?= $authorityRole->enabled ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete Flg') ?></th>
            <td><?= $authorityRole->delete_flg ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
