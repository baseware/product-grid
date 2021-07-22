<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Variants'), ['controller' => 'Variants', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Variant'), ['controller' => 'Variants', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->title) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($product->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Image') ?></th>
                <td><img src="<?= h($product->image_full) ?>" id="imagefile" /></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= $product->has('status') ? $this->Html->link($product->status->name, ['controller' => 'Statuses', 'action' => 'view', $product->status->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('User') ?></th>
                <td><?= $product->has('user') ? $this->Html->link($product->user->id, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($product->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Quantity') ?></th>
                <td><?= $this->Number->format($product->quantity) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Price') ?></th>
                <td><?= $this->Number->format($product->price) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Sequence') ?></th>
                <td><?= $this->Number->format($product->sequence) ?></td>
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
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <div class="col"><?= $this->Text->autoParagraph($product->description); ?></div>
    </div>
    <div class="related">
        <h4><?= __('Related Variants') ?></h4>
        <?php if (!empty($product->variants)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Quantity') ?></th>
                    <th scope="col"><?= __('Uint Id') ?></th>
                    <th scope="col"><?= __('Price') ?></th>
                    <th scope="col"><?= __('Product Id') ?></th>
                    <th scope="col"><?= __('Statuse Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->variants as $variants): ?>
                <tr>
                    <td><?= h($variants->id) ?></td>
                    <td><?= h($variants->name) ?></td>
                    <td><?= h($variants->quantity) ?></td>
                    <td><?= h($variants->uint_id) ?></td>
                    <td><?= h($variants->price) ?></td>
                    <td><?= h($variants->product_id) ?></td>
                    <td><?= h($variants->statuse_id) ?></td>
                    <td><?= h($variants->created) ?></td>
                    <td><?= h($variants->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Variants', 'action' => 'view', $variants->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Variants', 'action' => 'edit', $variants->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Variants', 'action' => 'delete', $variants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $variants->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
