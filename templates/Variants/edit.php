<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $variant
 * @var \App\Model\Entity\Unit[]|\Cake\Collection\CollectionInterface $units
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 * @var \App\Model\Entity\Status[]|\Cake\Collection\CollectionInterface $statuses
 * @var \App\Model\Entity\Variantimage[]|\Cake\Collection\CollectionInterface $variantimages
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $variant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $variant->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Variants'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
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

<div class="variants form content">
    <?= $this->Form->create($variant) ?>
    <fieldset>
        <legend><?= __('Edit Variant') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('quantity');
            echo $this->Form->control('unit_id');
            echo $this->Form->control('price');
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('statuse_id', ['options' => $statuses]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
