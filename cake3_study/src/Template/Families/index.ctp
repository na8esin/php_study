<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Family[]|\Cake\Collection\CollectionInterface $families
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="families index large-9 medium-8 columns content">
    <h3><?= __('Families') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lname_kana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fname_kana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('smoking') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete_flg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($families as $family): ?>
            <tr>
                <td><?= $this->Number->format($family->id) ?></td>
                <td><?= $this->Number->format($family->customer_id) ?></td>
                <td><?= h($family->lname) ?></td>
                <td><?= h($family->fname) ?></td>
                <td><?= h($family->lname_kana) ?></td>
                <td><?= h($family->fname_kana) ?></td>
                <td><?= h($family->gender) ?></td>
                <td><?= h($family->birthday) ?></td>
                <td><?= h($family->relation) ?></td>
                <td><?= h($family->job_name) ?></td>
                <td><?= h($family->job_type) ?></td>
                <td><?= h($family->smoking) ?></td>
                <td><?= h($family->created) ?></td>
                <td><?= $this->Number->format($family->created_user_id) ?></td>
                <td><?= h($family->modified) ?></td>
                <td><?= $this->Number->format($family->modified_user_id) ?></td>
                <td><?= h($family->delete_flg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $family->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $family->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $family->id], ['confirm' => __('Are you sure you want to delete # {0}?', $family->id)]) ?>
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
