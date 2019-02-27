<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Mtb Areas'), ['controller' => 'MtbAreas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mtb Area'), ['controller' => 'MtbAreas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mtb User Statuses'), ['controller' => 'MtbUserStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mtb User Status'), ['controller' => 'MtbUserStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Points'), ['controller' => 'Points', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Point'), ['controller' => 'Points', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('lastname');
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname_reading');
            echo $this->Form->control('firstname_reading');
            echo $this->Form->control('gender_flg');
            echo $this->Form->control('member_code');
            echo $this->Form->control('postcode');
            echo $this->Form->control('mtb_area_id', ['options' => $mtbAreas]);
            echo $this->Form->control('address1');
            echo $this->Form->control('address2');
            echo $this->Form->control('birthday');
            echo $this->Form->control('telephone_number');
            echo $this->Form->control('id_card_surface_pic');
            echo $this->Form->control('id_card_back_pic');
            echo $this->Form->control('mtb_user_status_id', ['options' => $mtbUserStatuses]);
            echo $this->Form->control('token');
            echo $this->Form->control('email_approval_at');
            echo $this->Form->control('information_approval_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
