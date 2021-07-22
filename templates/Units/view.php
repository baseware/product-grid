<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $unit
 */
?>
<?php $this->extend('/layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Unit'), ['action' => 'edit', $unit->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink(__('Delete Unit'), ['action' => 'delete', $unit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unit->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Units'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Unit'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="units view large-9 medium-8 columns content">
    <h3><?= h($unit->name) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($unit->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Short') ?></th>
                <td><?= h($unit->short) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($unit->id) ?></td>
            </tr>
        </table>
    </div>
</div>
