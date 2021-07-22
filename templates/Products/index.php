<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Variants'), ['controller' => 'Variants', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Variant'), ['controller' => 'Variants', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('image') ?></th>
        <th scope="col"><?= $this->Paginator->sort('description') ?></th>
        <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
        <th scope="col"><?= $this->Paginator->sort('price') ?></th>
        <th scope="col"><?= $this->Paginator->sort('sequence') ?></th>
        <th scope="col"><?= $this->Paginator->sort('statuse_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?= $this->Number->format($product->id) ?></td>
            <td><?= h($product->name) ?></td>
            <td><img src="<?= h($product->image_thumbnail) ?>" class="list-img" alt=""/></td>
            <td><?= $this->Text->autoParagraph($product->description) ?></td> 
            <td><?= $this->Number->format($product->quantity) ?></td>
            <td><?= $this->Number->format($product->price) ?></td>
            <td><?= $this->Number->format($product->sequence) ?></td>
            <td><?= $product->has('status') ? $this->Html->link($product->status->name, ['controller' => 'Statuses', 'action' => 'view', $product->status->id]) : '' ?></td>
            <td><?= $product->has('user') ? $this->Html->link($product->user->id, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
            <td><?= h($product->created) ?></td>
            <td><?= h($product->modified) ?></td>
            <td class="actions">
            <div class="btn-group" role="group" aria-label="action">
                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-primary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-secondary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-danger']) ?>
            </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('First')) ?>
        <?= $this->Paginator->prev('< ' . __('Previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('Next') . ' >') ?>
        <?= $this->Paginator->last(__('Last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</div>
