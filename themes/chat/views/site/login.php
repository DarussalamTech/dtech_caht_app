<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
?>
<div id="login">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
    <h1><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/login.png" /> Login</h1>
    <div class="name">
        <div class="left">
            <?php echo $form->labelEx($model, 'username'); ?> : <span> <?php echo $form->error($model, 'username'); ?></span>
        </div>
        <div class="right">
            <?php echo $form->textField($model, 'username'); ?>
        </div>
    </div>
    <div class="pswrd">
        <div class="left">
            <?php echo $form->labelEx($model, 'password'); ?>: <span> <?php echo $form->error($model, 'password'); ?></span>
        </div>
        <div class="right">
            <?php echo $form->passwordField($model, 'password'); ?>
        </div>
    </div>
     <input type="submit" value="Login" />
    <?php $this->endWidget(); ?>
</div>