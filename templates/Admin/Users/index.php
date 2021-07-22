<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row h-100">
    <aside class="col-12 col-md-2 p-0 bg-light h-100">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Actions') ?></a>
                <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
        </div>
    </aside>
<main class="col-12 col-md-9">
<div class="users index content">

    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('encrypt') ?></th>
                    <th><?= $this->Paginator->sort('role_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('verify') ?></th>
                    <th><?= $this->Paginator->sort('statuse_id') ?></th>
                    <th><?= $this->Paginator->sort('activation') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('event_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->password) ?></td>
                    <td><?= h($user->encrypt) ?></td>
                    <td><?= $this->Number->format($user->role_id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->mobile) ?></td>
                    <td><?= h($user->verify) ?></td>
                    <td><?= $user->has('status') ? $this->Html->link($user->status->name, ['controller' => 'Statuses', 'action' => 'view', $user->status->id]) : '' ?></td>
                    <td><?= h($user->activation) ?></td>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                    <td><?= $this->Number->format($user->event_id) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <div class="btn-group" role="group" aria-label="action">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <nav id="cake-pagination" aria-label="Page navigation">
        <ul class="pagination">
            <?= $this->Paginator->first(__('First')) ?>
            <?= $this->Paginator->prev(__('Previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Next')) ?>
            <?= $this->Paginator->last(__('Last')) ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </nav>
</div>
</main>
</div>