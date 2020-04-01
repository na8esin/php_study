<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AuthorityRole[]|\Cake\Collection\CollectionInterface $authorityRoles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Authority Role'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authorityRoles index large-9 medium-8 columns content">
    <h3><?= __('Authority Roles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menu_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('func_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('authority_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete_flg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authorityRoles as $authorityRole): ?>
            <tr>
                <td><?= $this->Number->format($authorityRole->id) ?></td>
                <td><?= $this->Number->format($authorityRole->role_type) ?></td>
                <td><?= h($authorityRole->menu_code) ?></td>
                <td><?= h($authorityRole->func_code) ?></td>
                <td><?= h($authorityRole->action_code) ?></td>
                <td><?= h($authorityRole->authority_code) ?></td>
                <td><?= h($authorityRole->enabled) ?></td>
                <td><?= h($authorityRole->created) ?></td>
                <td><?= $this->Number->format($authorityRole->created_user_id) ?></td>
                <td><?= h($authorityRole->modified) ?></td>
                <td><?= $this->Number->format($authorityRole->modified_user_id) ?></td>
                <td><?= h($authorityRole->delete_flg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $authorityRole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authorityRole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authorityRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorityRole->id)]) ?>
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
