<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $variant
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Variant'), ['action' => 'edit', $variant->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Variant'), ['action' => 'delete', $variant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $variant->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Variants'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Variant'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
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

<div class="variants view large-9 medium-8 columns content">
    <h3><?= h($variant->name) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($variant->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Product') ?></th>
                <td><?= $variant->has('product') ? $this->Html->link($variant->product->title, ['controller' => 'Products', 'action' => 'view', $variant->product->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= $variant->has('status') ? $this->Html->link($variant->status->name, ['controller' => 'Statuses', 'action' => 'view', $variant->status->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($variant->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Quantity') ?></th>
                <td><?= $this->Number->format($variant->quantity) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Unit Id') ?></th>
                <td><?= $this->Number->format($variant->unit_id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Price') ?></th>
                <td><?= $this->Number->format($variant->price) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($variant->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($variant->modified) ?></td>
            </tr>
        </table>
    </div>
    <div class="related">
        <h4><?= __('Related Variantimages') ?></h4>
        <?php if (!empty($variant->variantimages)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Variant Id') ?></th>
                    <th scope="col"><?= __('Statuse Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($variant->variantimages as $variantimages): ?>
                <tr>
                    <td><?= h($variantimages->id) ?></td>
                    <td><?= h($variantimages->name) ?></td>
                    <td><?= h($variantimages->variant_id) ?></td>
                    <td><?= h($variantimages->statuse_id) ?></td>
                    <td><?= h($variantimages->created) ?></td>
                    <td><?= h($variantimages->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Variantimages', 'action' => 'view', $variantimages->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Variantimages', 'action' => 'edit', $variantimages->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Variantimages', 'action' => 'delete', $variantimages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $variantimages->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
