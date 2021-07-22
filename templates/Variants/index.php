<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $variants
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Variant'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Units'), ['controller' => 'Units', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Unit'), ['controller' => 'Units', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Variantimages'), ['controller' => 'Variantimages', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Variantimage'), ['controller' => 'Variantimages', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
        <th scope="col"><?= $this->Paginator->sort('unit_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('price') ?></th>
        <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('statuse_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($variants as $variant) : ?>
        <tr>
            <td><?= $this->Number->format($variant->id) ?></td>
            <td><?= h($variant->name) ?></td>
            <td><?= $this->Number->format($variant->quantity) ?></td>
            <td><?= $this->Number->format($variant->unit_id) ?></td>
            <td><?= $this->Number->format($variant->price) ?></td>
            <td><?= $variant->has('product') ? $this->Html->link($variant->product->title, ['controller' => 'Products', 'action' => 'view', $variant->product->id]) : '' ?></td>
            <td><?= $variant->has('status') ? $this->Html->link($variant->status->name, ['controller' => 'Statuses', 'action' => 'view', $variant->status->id]) : '' ?></td>
            <td><?= h($variant->created) ?></td>
            <td><?= h($variant->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $variant->id], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $variant->id], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $variant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $variant->id), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
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
