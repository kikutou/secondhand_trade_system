<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mtb Sale Statuses'), ['controller' => 'MtbSaleStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mtb Sale Status'), ['controller' => 'MtbSaleStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('from_user_id');
            echo $this->Form->control('to_users_id', ['options' => $users]);
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('mtb_sale_status_id', ['options' => $mtbSaleStatuses]);
            echo $this->Form->control('name');
            echo $this->Form->control('product_code');
            echo $this->Form->control('ship_code');
            echo $this->Form->control('detail');
            echo $this->Form->control('price');
            echo $this->Form->control('image1');
            echo $this->Form->control('image2');
            echo $this->Form->control('image3');
            echo $this->Form->control('image4');
            echo $this->Form->control('from_user_assessment');
            echo $this->Form->control('from_user_comment');
            echo $this->Form->control('to_user_assessment');
            echo $this->Form->control('to_user_comment');
            echo $this->Form->control('published_at', ['empty' => true]);
            echo $this->Form->control('ordered_at', ['empty' => true]);
            echo $this->Form->control('shipped_at', ['empty' => true]);
            echo $this->Form->control('from_user_assessed_at', ['empty' => true]);
            echo $this->Form->control('to_user_assessed_at', ['empty' => true]);
            echo $this->Form->control('return_reason');
            echo $this->Form->control('return_requested_at', ['empty' => true]);
            echo $this->Form->control('return_finished_at', ['empty' => true]);
            echo $this->Form->control('admin_confirmed_at', ['empty' => true]);
            echo $this->Form->control('prohibition_reason');
            echo $this->Form->control('prohibited_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
