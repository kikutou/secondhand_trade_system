<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Point $point
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $point->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $point->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Points'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mtb Uses'), ['controller' => 'MtbUses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mtb Use'), ['controller' => 'MtbUses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="points form large-9 medium-8 columns content">
    <?= $this->Form->create($point) ?>
    <fieldset>
        <legend><?= __('Edit Point') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('time');
            echo $this->Form->control('type_flg');
            echo $this->Form->control('amount');
            echo $this->Form->control('mtb_use_id', ['options' => $mtbUses]);
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
