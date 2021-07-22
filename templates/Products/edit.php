<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 * @var \App\Model\Entity\Status[]|\Cake\Collection\CollectionInterface $statuses
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 * @var \App\Model\Entity\Variant[]|\Cake\Collection\CollectionInterface $variants
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Variants'), ['controller' => 'Variants', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Variant'), ['controller' => 'Variants', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="products form content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('name');
            ?>
            <img src="<?=  $product->image_full ?>" id="imagefile" />
            <?php
            echo $this->Form->control('image',['hidden'=>'true']);
            echo $this->Form->control('file',['type'=>'file','accept'=>"image/*",'onchange'=>"imageload(event)"]);
            echo $this->Form->control('description',['id'=>'editor']);
            echo $this->Form->control('quantity');
            echo $this->Form->control('price');
            echo $this->Form->control('sequence');
            echo $this->Form->control('statuse_id', ['options' => $statuses]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
