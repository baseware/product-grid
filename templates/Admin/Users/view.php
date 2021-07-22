<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<div class="row h-100">
    <aside class="col-12 col-md-2 p-0 bg-light h-100">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"><?= __('Actions') ?></a>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'list-group-item list-group-item-action']) ?>
        </div>
    </aside>
    <main class="col-8">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table class="table table-striped table-bordered">
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Encrypt') ?></th>
                    <td><?= h($user->encrypt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($user->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Verify') ?></th>
                    <td><?= h($user->verify) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $user->has('status') ? $this->Html->link($user->status->name, ['controller' => 'Statuses', 'action' => 'view', $user->status->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activation') ?></th>
                    <td><?= h($user->activation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role Id') ?></th>
                    <td><?= $this->Number->format($user->role_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($user->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Id') ?></th>
                    <td><?= $this->Number->format($user->event_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="row">
                <h4><?= __('Related Roles') ?></h4>
                <?php if (!empty($user->roles)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->roles as $roles) : ?>
                        <tr>
                            <td><?= h($roles->id) ?></td>
                            <td><?= h($roles->name) ?></td>
                            <td><?= h($roles->created) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $roles->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $roles->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $roles->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $roles->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($user->events)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Image Id') ?></th>
                            <th><?= __('Start') ?></th>
                            <th><?= __('End') ?></th>
                            <th><?= __('Addresse Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->events as $events) : ?>
                        <tr>
                            <td><?= h($events->id) ?></td>
                            <td><?= h($events->name) ?></td>
                            <td><?= h($events->description) ?></td>
                            <td><?= h($events->image_id) ?></td>
                            <td><?= h($events->start) ?></td>
                            <td><?= h($events->end) ?></td>
                            <td><?= h($events->addresse_id) ?></td>
                            <td><?= h($events->event_id) ?></td>
                            <td><?= h($events->user_id) ?></td>
                            <td><?= h($events->statuse_id) ?></td>
                            <td><?= h($events->created) ?></td>
                            <td><?= h($events->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Chats') ?></h4>
                <?php if (!empty($user->chats)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->chats as $chats) : ?>
                        <tr>
                            <td><?= h($chats->id) ?></td>
                            <td><?= h($chats->user_id) ?></td>
                            <td><?= h($chats->statuse_id) ?></td>
                            <td><?= h($chats->created) ?></td>
                            <td><?= h($chats->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Chats', 'action' => 'view', $chats->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Chats', 'action' => 'edit', $chats->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chats', 'action' => 'delete', $chats->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $chats->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Questions') ?></h4>
                <?php if (!empty($user->questions)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Question') ?></th>
                            <th><?= __('Image Id') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Seconds') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->questions as $questions) : ?>
                        <tr>
                            <td><?= h($questions->id) ?></td>
                            <td><?= h($questions->question) ?></td>
                            <td><?= h($questions->image_id) ?></td>
                            <td><?= h($questions->type) ?></td>
                            <td><?= h($questions->event_id) ?></td>
                            <td><?= h($questions->seconds) ?></td>
                            <td><?= h($questions->statuse_id) ?></td>
                            <td><?= h($questions->user_id) ?></td>
                            <td><?= h($questions->created) ?></td>
                            <td><?= h($questions->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $questions->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $questions->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Sessions') ?></h4>
                <?php if (!empty($user->sessions)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Start') ?></th>
                            <th><?= __('End') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Hall Id') ?></th>
                            <th><?= __('Session Id') ?></th>
                            <th><?= __('Sequence') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->sessions as $sessions) : ?>
                        <tr>
                            <td><?= h($sessions->id) ?></td>
                            <td><?= h($sessions->name) ?></td>
                            <td><?= h($sessions->description) ?></td>
                            <td><?= h($sessions->start) ?></td>
                            <td><?= h($sessions->end) ?></td>
                            <td><?= h($sessions->event_id) ?></td>
                            <td><?= h($sessions->hall_id) ?></td>
                            <td><?= h($sessions->session_id) ?></td>
                            <td><?= h($sessions->sequence) ?></td>
                            <td><?= h($sessions->statuse_id) ?></td>
                            <td><?= h($sessions->created) ?></td>
                            <td><?= h($sessions->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sessions', 'action' => 'view', $sessions->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sessions', 'action' => 'edit', $sessions->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sessions', 'action' => 'delete', $sessions->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $sessions->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Topics') ?></h4>
                <?php if (!empty($user->topics)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Session Id') ?></th>
                            <th><?= __('Start') ?></th>
                            <th><?= __('End') ?></th>
                            <th><?= __('Sequence') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->topics as $topics) : ?>
                        <tr>
                            <td><?= h($topics->id) ?></td>
                            <td><?= h($topics->name) ?></td>
                            <td><?= h($topics->description) ?></td>
                            <td><?= h($topics->session_id) ?></td>
                            <td><?= h($topics->start) ?></td>
                            <td><?= h($topics->end) ?></td>
                            <td><?= h($topics->sequence) ?></td>
                            <td><?= h($topics->statuse_id) ?></td>
                            <td><?= h($topics->created) ?></td>
                            <td><?= h($topics->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Topics', 'action' => 'view', $topics->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Topics', 'action' => 'edit', $topics->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Topics', 'action' => 'delete', $topics->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $topics->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Devices') ?></h4>
                <?php if (!empty($user->devices)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Deviceid') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Latitude') ?></th>
                            <th><?= __('Longitude') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->devices as $devices) : ?>
                        <tr>
                            <td><?= h($devices->id) ?></td>
                            <td><?= h($devices->deviceid) ?></td>
                            <td><?= h($devices->token) ?></td>
                            <td><?= h($devices->latitude) ?></td>
                            <td><?= h($devices->longitude) ?></td>
                            <td><?= h($devices->type) ?></td>
                            <td><?= h($devices->statuse_id) ?></td>
                            <td><?= h($devices->created) ?></td>
                            <td><?= h($devices->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Devices', 'action' => 'view', $devices->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Devices', 'action' => 'edit', $devices->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Devices', 'action' => 'delete', $devices->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $devices->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Programmes') ?></h4>
                <?php if (!empty($user->programmes)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Menu Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Session Id') ?></th>
                            <th><?= __('Day') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->programmes as $programmes) : ?>
                        <tr>
                            <td><?= h($programmes->id) ?></td>
                            <td><?= h($programmes->menu_id) ?></td>
                            <td><?= h($programmes->event_id) ?></td>
                            <td><?= h($programmes->session_id) ?></td>
                            <td><?= h($programmes->day) ?></td>
                            <td><?= h($programmes->statuse_id) ?></td>
                            <td><?= h($programmes->created) ?></td>
                            <td><?= h($programmes->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Programmes', 'action' => 'view', $programmes->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Programmes', 'action' => 'edit', $programmes->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programmes', 'action' => 'delete', $programmes->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $programmes->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Socials') ?></h4>
                <?php if (!empty($user->socials)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->socials as $socials) : ?>
                        <tr>
                            <td><?= h($socials->id) ?></td>
                            <td><?= h($socials->name) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Socials', 'action' => 'view', $socials->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Socials', 'action' => 'edit', $socials->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Socials', 'action' => 'delete', $socials->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $socials->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($user->users)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Encrypt') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Verify') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Activation') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->encrypt) ?></td>
                            <td><?= h($users->role_id) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->mobile) ?></td>
                            <td><?= h($users->verify) ?></td>
                            <td><?= h($users->statuse_id) ?></td>
                            <td><?= h($users->activation) ?></td>
                            <td><?= h($users->user_id) ?></td>
                            <td><?= h($users->event_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Accommodations') ?></h4>
                <?php if (!empty($user->accommodations)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Addresse Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->accommodations as $accommodations) : ?>
                        <tr>
                            <td><?= h($accommodations->id) ?></td>
                            <td><?= h($accommodations->name) ?></td>
                            <td><?= h($accommodations->description) ?></td>
                            <td><?= h($accommodations->addresse_id) ?></td>
                            <td><?= h($accommodations->statuse_id) ?></td>
                            <td><?= h($accommodations->user_id) ?></td>
                            <td><?= h($accommodations->created) ?></td>
                            <td><?= h($accommodations->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Accommodations', 'action' => 'view', $accommodations->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Accommodations', 'action' => 'edit', $accommodations->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Accommodations', 'action' => 'delete', $accommodations->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $accommodations->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Addresses') ?></h4>
                <?php if (!empty($user->addresses)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Landmark') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Latitude') ?></th>
                            <th><?= __('Longitude') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->addresses as $addresses) : ?>
                        <tr>
                            <td><?= h($addresses->id) ?></td>
                            <td><?= h($addresses->name) ?></td>
                            <td><?= h($addresses->address) ?></td>
                            <td><?= h($addresses->landmark) ?></td>
                            <td><?= h($addresses->mobile) ?></td>
                            <td><?= h($addresses->phone) ?></td>
                            <td><?= h($addresses->location_id) ?></td>
                            <td><?= h($addresses->latitude) ?></td>
                            <td><?= h($addresses->longitude) ?></td>
                            <td><?= h($addresses->statuse_id) ?></td>
                            <td><?= h($addresses->user_id) ?></td>
                            <td><?= h($addresses->created) ?></td>
                            <td><?= h($addresses->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Addresses', 'action' => 'view', $addresses->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Addresses', 'action' => 'edit', $addresses->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $addresses->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Badges') ?></h4>
                <?php if (!empty($user->badges)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->badges as $badges) : ?>
                        <tr>
                            <td><?= h($badges->id) ?></td>
                            <td><?= h($badges->name) ?></td>
                            <td><?= h($badges->statuse_id) ?></td>
                            <td><?= h($badges->event_id) ?></td>
                            <td><?= h($badges->user_id) ?></td>
                            <td><?= h($badges->created) ?></td>
                            <td><?= h($badges->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Badges', 'action' => 'view', $badges->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Badges', 'action' => 'edit', $badges->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Badges', 'action' => 'delete', $badges->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $badges->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Categories') ?></h4>
                <?php if (!empty($user->categories)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->categories as $categories) : ?>
                        <tr>
                            <td><?= h($categories->id) ?></td>
                            <td><?= h($categories->name) ?></td>
                            <td><?= h($categories->statuse_id) ?></td>
                            <td><?= h($categories->user_id) ?></td>
                            <td><?= h($categories->created) ?></td>
                            <td><?= h($categories->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Comments') ?></h4>
                <?php if (!empty($user->comments)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Comment Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->comments as $comments) : ?>
                        <tr>
                            <td><?= h($comments->id) ?></td>
                            <td><?= h($comments->comment) ?></td>
                            <td><?= h($comments->user_id) ?></td>
                            <td><?= h($comments->comment_id) ?></td>
                            <td><?= h($comments->statuse_id) ?></td>
                            <td><?= h($comments->created) ?></td>
                            <td><?= h($comments->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Companies') ?></h4>
                <?php if (!empty($user->companies)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Image Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->companies as $companies) : ?>
                        <tr>
                            <td><?= h($companies->id) ?></td>
                            <td><?= h($companies->name) ?></td>
                            <td><?= h($companies->image_id) ?></td>
                            <td><?= h($companies->statuse_id) ?></td>
                            <td><?= h($companies->user_id) ?></td>
                            <td><?= h($companies->created) ?></td>
                            <td><?= h($companies->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Companies Events') ?></h4>
                <?php if (!empty($user->companies_events)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Companie Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->companies_events as $companiesEvents) : ?>
                        <tr>
                            <td><?= h($companiesEvents->companie_id) ?></td>
                            <td><?= h($companiesEvents->event_id) ?></td>
                            <td><?= h($companiesEvents->user_id) ?></td>
                            <td><?= h($companiesEvents->statuse_id) ?></td>
                            <td><?= h($companiesEvents->created) ?></td>
                            <td><?= h($companiesEvents->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'CompaniesEvents', 'action' => 'view', $companiesEvents->companie_id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CompaniesEvents', 'action' => 'edit', $companiesEvents->companie_id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CompaniesEvents', 'action' => 'delete', $companiesEvents->companie_id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $companiesEvents->companie_id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Competitions') ?></h4>
                <?php if (!empty($user->competitions)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Session Id') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->competitions as $competitions) : ?>
                        <tr>
                            <td><?= h($competitions->id) ?></td>
                            <td><?= h($competitions->name) ?></td>
                            <td><?= h($competitions->session_id) ?></td>
                            <td><?= h($competitions->type) ?></td>
                            <td><?= h($competitions->statuse_id) ?></td>
                            <td><?= h($competitions->user_id) ?></td>
                            <td><?= h($competitions->created) ?></td>
                            <td><?= h($competitions->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Competitions', 'action' => 'view', $competitions->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Competitions', 'action' => 'edit', $competitions->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Competitions', 'action' => 'delete', $competitions->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $competitions->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Contacts') ?></h4>
                <?php if (!empty($user->contacts)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Contact') ?></th>
                            <th><?= __('Contacttype Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->contacts as $contacts) : ?>
                        <tr>
                            <td><?= h($contacts->id) ?></td>
                            <td><?= h($contacts->contact) ?></td>
                            <td><?= h($contacts->contacttype_id) ?></td>
                            <td><?= h($contacts->statuse_id) ?></td>
                            <td><?= h($contacts->user_id) ?></td>
                            <td><?= h($contacts->created) ?></td>
                            <td><?= h($contacts->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Designations') ?></h4>
                <?php if (!empty($user->designations)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->designations as $designations) : ?>
                        <tr>
                            <td><?= h($designations->id) ?></td>
                            <td><?= h($designations->name) ?></td>
                            <td><?= h($designations->active) ?></td>
                            <td><?= h($designations->user_id) ?></td>
                            <td><?= h($designations->created) ?></td>
                            <td><?= h($designations->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Designations', 'action' => 'view', $designations->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Designations', 'action' => 'edit', $designations->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Designations', 'action' => 'delete', $designations->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $designations->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Entries') ?></h4>
                <?php if (!empty($user->entries)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Member Id') ?></th>
                            <th><?= __('Programme Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->entries as $entries) : ?>
                        <tr>
                            <td><?= h($entries->member_id) ?></td>
                            <td><?= h($entries->programme_id) ?></td>
                            <td><?= h($entries->user_id) ?></td>
                            <td><?= h($entries->created) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Entries', 'action' => 'view', $entries->member_id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Entries', 'action' => 'edit', $entries->member_id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entries', 'action' => 'delete', $entries->member_id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $entries->member_id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Feedbacks') ?></h4>
                <?php if (!empty($user->feedbacks)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Remark') ?></th>
                            <th><?= __('Answer Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->feedbacks as $feedbacks) : ?>
                        <tr>
                            <td><?= h($feedbacks->id) ?></td>
                            <td><?= h($feedbacks->remark) ?></td>
                            <td><?= h($feedbacks->answer_id) ?></td>
                            <td><?= h($feedbacks->user_id) ?></td>
                            <td><?= h($feedbacks->statuse_id) ?></td>
                            <td><?= h($feedbacks->created) ?></td>
                            <td><?= h($feedbacks->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Feedbacks', 'action' => 'view', $feedbacks->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Feedbacks', 'action' => 'edit', $feedbacks->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Feedbacks', 'action' => 'delete', $feedbacks->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $feedbacks->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Files') ?></h4>
                <?php if (!empty($user->files)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->files as $files) : ?>
                        <tr>
                            <td><?= h($files->id) ?></td>
                            <td><?= h($files->name) ?></td>
                            <td><?= h($files->description) ?></td>
                            <td><?= h($files->statuse_id) ?></td>
                            <td><?= h($files->event_id) ?></td>
                            <td><?= h($files->user_id) ?></td>
                            <td><?= h($files->created) ?></td>
                            <td><?= h($files->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Files', 'action' => 'view', $files->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Files', 'action' => 'edit', $files->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Files', 'action' => 'delete', $files->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $files->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Halls') ?></h4>
                <?php if (!empty($user->halls)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Addresse Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->halls as $halls) : ?>
                        <tr>
                            <td><?= h($halls->id) ?></td>
                            <td><?= h($halls->name) ?></td>
                            <td><?= h($halls->addresse_id) ?></td>
                            <td><?= h($halls->statuse_id) ?></td>
                            <td><?= h($halls->user_id) ?></td>
                            <td><?= h($halls->created) ?></td>
                            <td><?= h($halls->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Halls', 'action' => 'view', $halls->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Halls', 'action' => 'edit', $halls->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Halls', 'action' => 'delete', $halls->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $halls->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Images') ?></h4>
                <?php if (!empty($user->images)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->images as $images) : ?>
                        <tr>
                            <td><?= h($images->id) ?></td>
                            <td><?= h($images->name) ?></td>
                            <td><?= h($images->user_id) ?></td>
                            <td><?= h($images->statuse_id) ?></td>
                            <td><?= h($images->created) ?></td>
                            <td><?= h($images->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Members') ?></h4>
                <?php if (!empty($user->members)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Registration') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Badge Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->members as $members) : ?>
                        <tr>
                            <td><?= h($members->id) ?></td>
                            <td><?= h($members->name) ?></td>
                            <td><?= h($members->user_id) ?></td>
                            <td><?= h($members->registration) ?></td>
                            <td><?= h($members->email) ?></td>
                            <td><?= h($members->mobile) ?></td>
                            <td><?= h($members->event_id) ?></td>
                            <td><?= h($members->badge_id) ?></td>
                            <td><?= h($members->statuse_id) ?></td>
                            <td><?= h($members->created) ?></td>
                            <td><?= h($members->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Members', 'action' => 'view', $members->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Members', 'action' => 'edit', $members->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Members', 'action' => 'delete', $members->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $members->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Menus') ?></h4>
                <?php if (!empty($user->menus)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->menus as $menus) : ?>
                        <tr>
                            <td><?= h($menus->id) ?></td>
                            <td><?= h($menus->name) ?></td>
                            <td><?= h($menus->statuse_id) ?></td>
                            <td><?= h($menus->user_id) ?></td>
                            <td><?= h($menus->created) ?></td>
                            <td><?= h($menus->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Menus', 'action' => 'view', $menus->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Menus', 'action' => 'edit', $menus->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Menus', 'action' => 'delete', $menus->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $menus->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Messages') ?></h4>
                <?php if (!empty($user->messages)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('Chat Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->messages as $messages) : ?>
                        <tr>
                            <td><?= h($messages->id) ?></td>
                            <td><?= h($messages->message) ?></td>
                            <td><?= h($messages->chat_id) ?></td>
                            <td><?= h($messages->user_id) ?></td>
                            <td><?= h($messages->statuse_id) ?></td>
                            <td><?= h($messages->created) ?></td>
                            <td><?= h($messages->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Messages', 'action' => 'view', $messages->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Messages', 'action' => 'edit', $messages->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Messages', 'action' => 'delete', $messages->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $messages->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Mobiles') ?></h4>
                <?php if (!empty($user->mobiles)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Pin') ?></th>
                            <th><?= __('Verify') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->mobiles as $mobiles) : ?>
                        <tr>
                            <td><?= h($mobiles->id) ?></td>
                            <td><?= h($mobiles->mobile) ?></td>
                            <td><?= h($mobiles->pin) ?></td>
                            <td><?= h($mobiles->verify) ?></td>
                            <td><?= h($mobiles->user_id) ?></td>
                            <td><?= h($mobiles->created) ?></td>
                            <td><?= h($mobiles->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Mobiles', 'action' => 'view', $mobiles->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Mobiles', 'action' => 'edit', $mobiles->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mobiles', 'action' => 'delete', $mobiles->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $mobiles->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Notifications') ?></h4>
                <?php if (!empty($user->notifications)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Image Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Count') ?></th>
                            <th><?= __('Schedule') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->notifications as $notifications) : ?>
                        <tr>
                            <td><?= h($notifications->id) ?></td>
                            <td><?= h($notifications->title) ?></td>
                            <td><?= h($notifications->message) ?></td>
                            <td><?= h($notifications->event_id) ?></td>
                            <td><?= h($notifications->user_id) ?></td>
                            <td><?= h($notifications->image_id) ?></td>
                            <td><?= h($notifications->statuse_id) ?></td>
                            <td><?= h($notifications->count) ?></td>
                            <td><?= h($notifications->schedule) ?></td>
                            <td><?= h($notifications->created) ?></td>
                            <td><?= h($notifications->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notifications', 'action' => 'view', $notifications->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notifications', 'action' => 'edit', $notifications->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notifications', 'action' => 'delete', $notifications->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $notifications->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Organizations') ?></h4>
                <?php if (!empty($user->organizations)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Image Id') ?></th>
                            <th><?= __('Short') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->organizations as $organizations) : ?>
                        <tr>
                            <td><?= h($organizations->id) ?></td>
                            <td><?= h($organizations->name) ?></td>
                            <td><?= h($organizations->image_id) ?></td>
                            <td><?= h($organizations->short) ?></td>
                            <td><?= h($organizations->description) ?></td>
                            <td><?= h($organizations->user_id) ?></td>
                            <td><?= h($organizations->statuse_id) ?></td>
                            <td><?= h($organizations->created) ?></td>
                            <td><?= h($organizations->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Organizations', 'action' => 'view', $organizations->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Organizations', 'action' => 'edit', $organizations->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Organizations', 'action' => 'delete', $organizations->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $organizations->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <h4><?= __('Related Profiles') ?></h4>
                <?php if (!empty($user->profiles)) : ?>
                <div class="table-responsive">
                    <table class="table-striped table-bordered table-hover">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Image Id') ?></th>
                            <th><?= __('About') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Statuse Id') ?></th>
                            <th><?= __('Sequence') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->profiles as $profiles) : ?>
                        <tr>
                            <td><?= h($profiles->id) ?></td>
                            <td><?= h($profiles->name) ?></td>
                            <td><?= h($profiles->image_id) ?></td>
                            <td><?= h($profiles->about) ?></td>
                            <td><?= h($profiles->gender) ?></td>
                            <td><?= h($profiles->statuse_id) ?></td>
                            <td><?= h($profiles->sequence) ?></td>
                            <td><?= h($profiles->user_id) ?></td>
                            <td><?= h($profiles->created) ?></td>
                            <td><?= h($profiles->modified) ?></td>
                            <td class="actions">
                                <div class="btn-group" role="group" aria-label="action">
                                <?= $this->Html->link(__('View'), ['controller' => 'Profiles', 'action' => 'view', $profiles->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Profiles', 'action' => 'edit', $profiles->id],['class'=>"btn btn-sm btn-secondary"]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profiles', 'action' => 'delete', $profiles->id], ['class'=>"btn btn-sm btn-secondary",'confirm' => __('Are you sure you want to delete # {0}?', $profiles->id)]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>