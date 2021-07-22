<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<?php  if($verify) {   ?>
<div class="row">
    <div class="offset-md-4 offset-sm-4 offset-lg-4 col-md-4 col-sm-4 col-lg-4 offset-md-4 offset-sm-4 offset-lg-4">
        <div class="usersform">
        <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Register') ?></legend>
                <div class="form-group">
                     <?= $this->Form->control('email',['class'=>'form-control','placeholder'=>"Email",'required','disabled']) ?>
                </div>
                <div class="form-group">
                     <?= $this->Form->control('mobile',['class'=>'form-control','placeholder'=>"Mobile",'required','type'=>'number','maxlength'=>'10','max'=>'9999999999','disabled']) ?>
                </div>
                <div class="form-group">
                     <?= $this->Form->control('email_code',['class'=>'form-control','placeholder'=>"Email Code",'required','type'=>'number','maxlength'=>'6']) ?>
                </div>
                <div class="form-group">
                     <?= $this->Form->control('mobile_code',['class'=>'form-control','placeholder'=>"Mobile Code",'required','type'=>'number','maxlength'=>'6']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('password',['class'=>'form-control','placeholder'=>"Password",'required']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('confirm_password',['type'=>'password','class'=>'form-control','placeholder'=>"Confirm Password",'required']) ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Register'),['class'=>"btn btn-success btn-block"]); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<?php  }  else { ?>
<div class="row">
    <div class="offset-md-4 offset-sm-4 offset-lg-4 col-md-4 col-sm-4 col-lg-4 offset-md-4 offset-sm-4 offset-lg-4">
        <div class="usersform">
        <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Register') ?></legend>
                <div class="form-group">
                     <?= $this->Form->control('email',['class'=>'form-control','placeholder'=>"Email",'required']) ?>
                </div>
                <div class="form-group">
                     <?= $this->Form->control('mobile',['class'=>'form-control','placeholder'=>"Mobile",'required','type'=>'number','maxlength'=>'10','max'=>'9999999999']) ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Send Verification Code'),['class'=>"btn btn-success btn-block"]); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<?php } ?>


