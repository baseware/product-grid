<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $unit
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Units'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="units form content">
    <?= $this->Form->create($unit) ?>
    <fieldset>
        <legend><?= __('Edit Unit') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('short');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
