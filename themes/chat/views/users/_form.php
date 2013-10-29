<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div id="login"  class="register">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'users-form',
        'enableAjaxValidation' => false,
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
            <?php echo $form->textField($model, 'email'); ?>
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
    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email'); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'confirm_password'); ?>
        <?php echo $form->passwordField($model, 'confirm_password'); ?>
        <?php echo $form->error($model, 'confirm_password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name'); ?>
        <?php echo $form->error($model, 'first_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'last_name'); ?>
        <?php echo $form->textField($model, 'last_name'); ?>
        <?php echo $form->error($model, 'last_name'); ?>
    </div>




    <div class="row buttons">
        <?php echo CHtml::submitButton('Register'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->