<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Child Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Parent Category') ?></th>
            <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->id, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Category') ?></h4>
        <?= $this->Text->autoParagraph(h($category->category)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($category->content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Picture') ?></h4>
        <?= $this->Text->autoParagraph(h($category->picture)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($category->child_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Picture') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->child_categories as $childCategories): ?>
            <tr>
                <td><?= h($childCategories->id) ?></td>
                <td><?= h($childCategories->category) ?></td>
                <td><?= h($childCategories->parent_id) ?></td>
                <td><?= h($childCategories->content) ?></td>
                <td><?= h($childCategories->picture) ?></td>
                <td><?= h($childCategories->created) ?></td>
                <td><?= h($childCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $childCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $childCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $childCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($category->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('From User Id') ?></th>
                <th scope="col"><?= __('To Users Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Mtb Sale Status Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Product Code') ?></th>
                <th scope="col"><?= __('Ship Code') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Image1') ?></th>
                <th scope="col"><?= __('Image2') ?></th>
                <th scope="col"><?= __('Image3') ?></th>
                <th scope="col"><?= __('Image4') ?></th>
                <th scope="col"><?= __('From User Assessment') ?></th>
                <th scope="col"><?= __('From User Comment') ?></th>
                <th scope="col"><?= __('To User Assessment') ?></th>
                <th scope="col"><?= __('To User Comment') ?></th>
                <th scope="col"><?= __('Published At') ?></th>
                <th scope="col"><?= __('Ordered At') ?></th>
                <th scope="col"><?= __('Shipped At') ?></th>
                <th scope="col"><?= __('From User Assessed At') ?></th>
                <th scope="col"><?= __('To User Assessed At') ?></th>
                <th scope="col"><?= __('Return Reason') ?></th>
                <th scope="col"><?= __('Return Requested At') ?></th>
                <th scope="col"><?= __('Return Finished At') ?></th>
                <th scope="col"><?= __('Admin Confirmed At') ?></th>
                <th scope="col"><?= __('Prohibition Reason') ?></th>
                <th scope="col"><?= __('Prohibited At') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->from_user_id) ?></td>
                <td><?= h($products->to_users_id) ?></td>
                <td><?= h($products->category_id) ?></td>
                <td><?= h($products->mtb_sale_status_id) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->product_code) ?></td>
                <td><?= h($products->ship_code) ?></td>
                <td><?= h($products->detail) ?></td>
                <td><?= h($products->price) ?></td>
                <td><?= h($products->image1) ?></td>
                <td><?= h($products->image2) ?></td>
                <td><?= h($products->image3) ?></td>
                <td><?= h($products->image4) ?></td>
                <td><?= h($products->from_user_assessment) ?></td>
                <td><?= h($products->from_user_comment) ?></td>
                <td><?= h($products->to_user_assessment) ?></td>
                <td><?= h($products->to_user_comment) ?></td>
                <td><?= h($products->published_at) ?></td>
                <td><?= h($products->ordered_at) ?></td>
                <td><?= h($products->shipped_at) ?></td>
                <td><?= h($products->from_user_assessed_at) ?></td>
                <td><?= h($products->to_user_assessed_at) ?></td>
                <td><?= h($products->return_reason) ?></td>
                <td><?= h($products->return_requested_at) ?></td>
                <td><?= h($products->return_finished_at) ?></td>
                <td><?= h($products->admin_confirmed_at) ?></td>
                <td><?= h($products->prohibition_reason) ?></td>
                <td><?= h($products->prohibited_at) ?></td>
                <td><?= h($products->created) ?></td>
                <td><?= h($products->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
