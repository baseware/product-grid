<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $status
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Status'), ['action' => 'edit', $status->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Status'), ['action' => 'delete', $status->id], ['confirm' => __('Are you sure you want to delete # {0}?', $status->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Statuses'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Status'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('List Status'), ['controller' => 'Statuses', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="statuses view large-9 medium-8 columns content">
    <h3><?= h($status->name) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($status->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Status') ?></th>
                <td><?= $status->has('status') ? $this->Html->link($status->status->name, ['controller' => 'Statuses', 'action' => 'view', $status->status->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($status->id) ?></td>
            </tr>
        </table>
    </div>
</div>
