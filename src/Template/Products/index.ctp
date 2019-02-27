<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
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
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mtb_sale_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ship_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_user_assessment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_user_assessment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('published_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordered_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipped_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_user_assessed_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_user_assessed_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('return_requested_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('return_finished_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admin_confirmed_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prohibited_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= $this->Number->format($product->from_user_id) ?></td>
                <td><?= $product->has('user') ? $this->Html->link($product->user->id, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
                <td><?= $product->has('category') ? $this->Html->link($product->category->id, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                <td><?= $product->has('mtb_sale_status') ? $this->Html->link($product->mtb_sale_status->id, ['controller' => 'MtbSaleStatuses', 'action' => 'view', $product->mtb_sale_status->id]) : '' ?></td>
                <td><?= h($product->product_code) ?></td>
                <td><?= h($product->ship_code) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= $this->Number->format($product->from_user_assessment) ?></td>
                <td><?= $this->Number->format($product->to_user_assessment) ?></td>
                <td><?= h($product->published_at) ?></td>
                <td><?= h($product->ordered_at) ?></td>
                <td><?= h($product->shipped_at) ?></td>
                <td><?= h($product->from_user_assessed_at) ?></td>
                <td><?= h($product->to_user_assessed_at) ?></td>
                <td><?= h($product->return_requested_at) ?></td>
                <td><?= h($product->return_finished_at) ?></td>
                <td><?= h($product->admin_confirmed_at) ?></td>
                <td><?= h($product->prohibited_at) ?></td>
                <td><?= h($product->created) ?></td>
                <td><?= h($product->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
