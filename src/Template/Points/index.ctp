<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Point[]|\Cake\Collection\CollectionInterface $points
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Point'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mtb Uses'), ['controller' => 'MtbUses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mtb Use'), ['controller' => 'MtbUses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="points index large-9 medium-8 columns content">
    <h3><?= __('Points') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mtb_use_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($points as $point): ?>
            <tr>
                <td><?= $this->Number->format($point->id) ?></td>
                <td><?= $point->has('user') ? $this->Html->link($point->user->id, ['controller' => 'Users', 'action' => 'view', $point->user->id]) : '' ?></td>
                <td><?= h($point->time) ?></td>
                <td><?= $this->Number->format($point->type_flg) ?></td>
                <td><?= $this->Number->format($point->amount) ?></td>
                <td><?= $point->has('mtb_use') ? $this->Html->link($point->mtb_use->id, ['controller' => 'MtbUses', 'action' => 'view', $point->mtb_use->id]) : '' ?></td>
                <td><?= h($point->created) ?></td>
                <td><?= h($point->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $point->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $point->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $point->id], ['confirm' => __('Are you sure you want to delete # {0}?', $point->id)]) ?>
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
