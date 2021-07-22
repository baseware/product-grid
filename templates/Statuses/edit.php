<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $status
 * @var \App\Model\Entity\Status[]|\Cake\Collection\CollectionInterface $status
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Statuses'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Status'), ['controller' => 'Statuses', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="statuses form content">
    <?= $this->Form->create($status) ?>
    <fieldset>
        <legend><?= __('Edit Status') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('statuse_id', ['options' => $statuses, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
