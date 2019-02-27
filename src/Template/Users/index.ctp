<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mtb Areas'), ['controller' => 'MtbAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mtb Area'), ['controller' => 'MtbAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mtb User Statuses'), ['controller' => 'MtbUserStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mtb User Status'), ['controller' => 'MtbUserStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Points'), ['controller' => 'Points', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Point'), ['controller' => 'Points', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('member_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mtb_area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mtb_user_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_approval_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('information_approval_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= $this->Number->format($user->gender_flg) ?></td>
                <td><?= h($user->member_code) ?></td>
                <td><?= h($user->postcode) ?></td>
                <td><?= $user->has('mtb_area') ? $this->Html->link($user->mtb_area->id, ['controller' => 'MtbAreas', 'action' => 'view', $user->mtb_area->id]) : '' ?></td>
                <td><?= h($user->birthday) ?></td>
                <td><?= $user->has('mtb_user_status') ? $this->Html->link($user->mtb_user_status->id, ['controller' => 'MtbUserStatuses', 'action' => 'view', $user->mtb_user_status->id]) : '' ?></td>
                <td><?= h($user->token) ?></td>
                <td><?= h($user->email_approval_at) ?></td>
                <td><?= h($user->information_approval_at) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
