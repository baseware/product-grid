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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'list-group-item list-group-item-action']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action']) ?>
        </div>
    </aside>
    <main class="col-10 offset-1 col-md-6">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                                    echo $this->Form->control('email',['class'=>"form-control",'placeholder'=>'Email']);
                                    echo $this->Form->control('password',['class'=>"form-control",'placeholder'=>'Password']);
                                    echo $this->Form->control('encrypt',['class'=>"form-control",'placeholder'=>'Encrypt']);
                                    echo $this->Form->control('role_id',['class'=>"form-control",'placeholder'=>'Role_Id']);
                                    echo $this->Form->control('name',['class'=>"form-control",'placeholder'=>'Name']);
                                    echo $this->Form->control('mobile',['class'=>"form-control",'placeholder'=>'Mobile']);
                                    echo $this->Form->control('verify', ['options' =>['Y'=>'Yes','N'=>'No'],'class'=>"form-control",'placeholder'=>'Verify']);
                    echo $this->Form->control('statuse_id', ['options' => $statuses, 'empty' => true,'class'=>"form-control",'placeholder'=>'Statuse_Id']);
                                    echo $this->Form->control('activation',['class'=>"form-control",'placeholder'=>'Activation']);
                                    echo $this->Form->control('user_id',['class'=>"form-control",'placeholder'=>'User_Id']);
                                    echo $this->Form->control('event_id',['class'=>"form-control",'placeholder'=>'Event_Id']);
                    echo $this->Form->control('roles._ids', ['options' => $roles,'class'=>"form-control"]);
                    echo $this->Form->control('events._ids', ['options' => $events,'class'=>"form-control"]);
                    echo $this->Form->control('chats._ids', ['options' => $chats,'class'=>"form-control"]);
                    echo $this->Form->control('questions._ids', ['options' => $questions,'class'=>"form-control"]);
                    echo $this->Form->control('sessions._ids', ['options' => $sessions,'class'=>"form-control"]);
                    echo $this->Form->control('topics._ids', ['options' => $topics,'class'=>"form-control"]);
                    echo $this->Form->control('devices._ids', ['options' => $devices,'class'=>"form-control"]);
                    echo $this->Form->control('programmes._ids', ['options' => $programmes,'class'=>"form-control"]);
                    echo $this->Form->control('socials._ids', ['options' => $socials,'class'=>"form-control"]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>"btn btn-primary"]) ?>
            <?= $this->Form->end() ?>
        </div>
    </main>
</div>