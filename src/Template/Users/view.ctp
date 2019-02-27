<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Areas'), ['controller' => 'MtbAreas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Area'), ['controller' => 'MtbAreas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mtb User Statuses'), ['controller' => 'MtbUserStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb User Status'), ['controller' => 'MtbUserStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Points'), ['controller' => 'Points', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Point'), ['controller' => 'Points', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Member Code') ?></th>
            <td><?= h($user->member_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postcode') ?></th>
            <td><?= h($user->postcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mtb Area') ?></th>
            <td><?= $user->has('mtb_area') ? $this->Html->link($user->mtb_area->id, ['controller' => 'MtbAreas', 'action' => 'view', $user->mtb_area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mtb User Status') ?></th>
            <td><?= $user->has('mtb_user_status') ? $this->Html->link($user->mtb_user_status->id, ['controller' => 'MtbUserStatuses', 'action' => 'view', $user->mtb_user_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($user->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender Flg') ?></th>
            <td><?= $this->Number->format($user->gender_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($user->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Approval At') ?></th>
            <td><?= h($user->email_approval_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Information Approval At') ?></th>
            <td><?= h($user->information_approval_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Password') ?></h4>
        <?= $this->Text->autoParagraph(h($user->password)); ?>
    </div>
    <div class="row">
        <h4><?= __('Lastname') ?></h4>
        <?= $this->Text->autoParagraph(h($user->lastname)); ?>
    </div>
    <div class="row">
        <h4><?= __('Firstname') ?></h4>
        <?= $this->Text->autoParagraph(h($user->firstname)); ?>
    </div>
    <div class="row">
        <h4><?= __('Lastname Reading') ?></h4>
        <?= $this->Text->autoParagraph(h($user->lastname_reading)); ?>
    </div>
    <div class="row">
        <h4><?= __('Firstname Reading') ?></h4>
        <?= $this->Text->autoParagraph(h($user->firstname_reading)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address1') ?></h4>
        <?= $this->Text->autoParagraph(h($user->address1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address2') ?></h4>
        <?= $this->Text->autoParagraph(h($user->address2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Telephone Number') ?></h4>
        <?= $this->Text->autoParagraph(h($user->telephone_number)); ?>
    </div>
    <div class="row">
        <h4><?= __('Id Card Surface Pic') ?></h4>
        <?= $this->Text->autoParagraph(h($user->id_card_surface_pic)); ?>
    </div>
    <div class="row">
        <h4><?= __('Id Card Back Pic') ?></h4>
        <?= $this->Text->autoParagraph(h($user->id_card_back_pic)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Points') ?></h4>
        <?php if (!empty($user->points)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Type Flg') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Mtb Use Id') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->points as $points): ?>
            <tr>
                <td><?= h($points->id) ?></td>
                <td><?= h($points->user_id) ?></td>
                <td><?= h($points->time) ?></td>
                <td><?= h($points->type_flg) ?></td>
                <td><?= h($points->amount) ?></td>
                <td><?= h($points->mtb_use_id) ?></td>
                <td><?= h($points->note) ?></td>
                <td><?= h($points->created) ?></td>
                <td><?= h($points->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Points', 'action' => 'view', $points->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Points', 'action' => 'edit', $points->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Points', 'action' => 'delete', $points->id], ['confirm' => __('Are you sure you want to delete # {0}?', $points->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
