<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Sale Statuses'), ['controller' => 'MtbSaleStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Sale Status'), ['controller' => 'MtbSaleStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Messages'), ['controller' => 'Messages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Message'), ['controller' => 'Messages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $product->has('user') ? $this->Html->link($product->user->id, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $product->has('category') ? $this->Html->link($product->category->id, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mtb Sale Status') ?></th>
            <td><?= $product->has('mtb_sale_status') ? $this->Html->link($product->mtb_sale_status->id, ['controller' => 'MtbSaleStatuses', 'action' => 'view', $product->mtb_sale_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Code') ?></th>
            <td><?= h($product->product_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ship Code') ?></th>
            <td><?= h($product->ship_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('From User Id') ?></th>
            <td><?= $this->Number->format($product->from_user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('From User Assessment') ?></th>
            <td><?= $this->Number->format($product->from_user_assessment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To User Assessment') ?></th>
            <td><?= $this->Number->format($product->to_user_assessment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Published At') ?></th>
            <td><?= h($product->published_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordered At') ?></th>
            <td><?= h($product->ordered_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipped At') ?></th>
            <td><?= h($product->shipped_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('From User Assessed At') ?></th>
            <td><?= h($product->from_user_assessed_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To User Assessed At') ?></th>
            <td><?= h($product->to_user_assessed_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Return Requested At') ?></th>
            <td><?= h($product->return_requested_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Return Finished At') ?></th>
            <td><?= h($product->return_finished_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admin Confirmed At') ?></th>
            <td><?= h($product->admin_confirmed_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prohibited At') ?></th>
            <td><?= h($product->prohibited_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($product->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Detail') ?></h4>
        <?= $this->Text->autoParagraph(h($product->detail)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image1') ?></h4>
        <?= $this->Text->autoParagraph(h($product->image1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image2') ?></h4>
        <?= $this->Text->autoParagraph(h($product->image2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image3') ?></h4>
        <?= $this->Text->autoParagraph(h($product->image3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image4') ?></h4>
        <?= $this->Text->autoParagraph(h($product->image4)); ?>
    </div>
    <div class="row">
        <h4><?= __('From User Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($product->from_user_comment)); ?>
    </div>
    <div class="row">
        <h4><?= __('To User Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($product->to_user_comment)); ?>
    </div>
    <div class="row">
        <h4><?= __('Return Reason') ?></h4>
        <?= $this->Text->autoParagraph(h($product->return_reason)); ?>
    </div>
    <div class="row">
        <h4><?= __('Prohibition Reason') ?></h4>
        <?= $this->Text->autoParagraph(h($product->prohibition_reason)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Messages') ?></h4>
        <?php if (!empty($product->messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('From User Id') ?></th>
                <th scope="col"><?= __('To Users Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Readed By From User At') ?></th>
                <th scope="col"><?= __('Readed By To User At') ?></th>
                <th scope="col"><?= __('Readed By Admin') ?></th>
                <th scope="col"><?= __('Canceled At') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->messages as $messages): ?>
            <tr>
                <td><?= h($messages->id) ?></td>
                <td><?= h($messages->from_user_id) ?></td>
                <td><?= h($messages->to_users_id) ?></td>
                <td><?= h($messages->product_id) ?></td>
                <td><?= h($messages->content) ?></td>
                <td><?= h($messages->readed_by_from_user_at) ?></td>
                <td><?= h($messages->readed_by_to_user_at) ?></td>
                <td><?= h($messages->readed_by_admin) ?></td>
                <td><?= h($messages->canceled_at) ?></td>
                <td><?= h($messages->created) ?></td>
                <td><?= h($messages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
