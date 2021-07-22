<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $category
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('List Category'), ['controller' => 'Categories', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($category->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Category') ?></th>
                <td><?= $category->has('category') ? $this->Html->link($category->category->name, ['controller' => 'Categories', 'action' => 'view', $category->category->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= $category->has('status') ? $this->Html->link($category->status->name, ['controller' => 'Statuses', 'action' => 'view', $category->status->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($category->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Level') ?></th>
                <td><?= $this->Number->format($category->level) ?></td>
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
    </div>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($category->categories)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Category Id') ?></th>
                    <th scope="col"><?= __('Level') ?></th>
                    <th scope="col"><?= __('Statuse Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($category->categories as $categories): ?>
                <tr>
                    <td><?= h($categories->id) ?></td>
                    <td><?= h($categories->name) ?></td>
                    <td><?= h($categories->category_id) ?></td>
                    <td><?= h($categories->level) ?></td>
                    <td><?= h($categories->statuse_id) ?></td>
                    <td><?= h($categories->created) ?></td>
                    <td><?= h($categories->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
