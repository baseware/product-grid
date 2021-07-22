<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <div class="offset-md-4 offset-sm-4 offset-lg-4 col-md-4 col-sm-4 col-lg-4 offset-md-4 offset-sm-4 offset-lg-4">
        <div class="usersform">
        <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Login') ?></legend>
                <div class="form-group">
                     <?= $this->Form->control('email',['class'=>'form-control','placeholder'=>"Username/Email",'required']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('password',['class'=>'form-control','placeholder'=>"Password",'required']) ?>
                </div>
                <div class="form-group">
               <?= $this->Form->control('captcha',['class'=>"form-control",'placeholder'=>'Captcha','required']) ?>
                </div>
                <img style="display: block;margin-left:auto;margin-right: auto;" src="/img/captcha/<?= $captcha['filename']?>" alt="alt"/>
            </fieldset>
            <?= $this->Form->button(__('Login'),['class'=>"btn btn-success btn-block"]); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
   
