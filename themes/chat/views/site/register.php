<div id="login"  class="register">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'register-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
    <h1><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/registration.png" /> Signup</h1>
    <div class="name">
        <div class="left">
            Username:
        </div>
        <div class="right">
            <input type="text" />
        </div>
    </div>
    <div class="pswrd">
        <div class="left">
            Email: <span>Incorrect Email ID</span>
        </div>
        <div class="right">
            <?php echo $form->textField($model, 'username'); ?>
        </div>
    </div>
    <div class="pswrd">
        <div class="left">
            Email: <span>Incorrect Email ID</span>
        </div>
        <div class="right">
            <?php echo $form->textField($model, 'email'); ?>
        </div>
    </div>
    <div class="pswrd">
        <div class="left">
            Password: <span>Wrong Password</span>
        </div>
        <div class="right">
            <?php echo $form->passwordField($model, 'password'); ?>
        </div>
    </div>
    <div class="pswrd">
        <div class="left">
            Confirm Password: <span>Wrong Password</span>
        </div>
        <div class="right">
            <?php echo $form->passwordField($model, 'retype'); ?>
        </div>
    </div>
    <input type="submit" value="Enter" />
    <?php $this->endWidget(); ?>
</div>