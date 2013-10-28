<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form wide">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'users-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'business_name'); ?>
        <?php echo $form->textField($model, 'business_name'); ?>
        <?php echo $form->error($model, 'business_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'business_address'); ?>
        <?php echo $form->textArea($model, 'business_address'); ?>
        <?php echo $form->error($model, 'business_address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'position_title'); ?>
        <?php echo $form->textField($model, 'position_title'); ?>
        <?php echo $form->error($model, 'position_title'); ?>
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

    <div class="row">
        <?php echo $form->labelEx($model, 'contact_no'); ?>
        <?php echo $form->textField($model, 'contact_no'); ?>
        <?php echo $form->error($model, 'contact_no'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->dropDownList($model, 'gender',array("Male"=>"Male","Female"=>"Female")); ?>
        <?php echo $form->error($model, 'gender'); ?>
    </div>



    <div class="row buttons">
        <?php echo CHtml::submitButton('Register'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->