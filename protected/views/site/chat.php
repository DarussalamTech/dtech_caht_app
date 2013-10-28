<header>
    <h1>Welcome to D-Tech Chat Group</h1>
</header>



<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - GroupChat';
$this->breadcrumbs = array(
    'GroupChat',
);
?>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'chat-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>
    <div id="main_wraper">
        <div id="wraper">
            <div id="chat">
                <h1><a href="#" class="smiley"><img src="css/images/smiley_03.png" /></a> Group Chat
                    <div class="right_images">
                        <div class="upload">
                            <input type="file" name="Upload"/>
                        </div>
                        <a href="#" style="float:left;"><img src="css/images/signout_03.png" alt="Sign Out" title="Sign Out" height="28" width="35" /></a>
                    </div>
                </h1>
                <div class="main_chatting">

                    <div class="chatting">

                        <h2> 
                            <?php echo $form->labelEx($model, 'username'); ?>
                            <?php echo $form->textField($model, 'username'); ?>
                            <?php echo $form->error($model, 'username'); ?></h2>

                             <?php echo $form->labelEx($model, 'create_time') ?>
                             <?php echo $form->textFieldEx($model, 'create_time') ?>
                             <?php echo $form->errorFieldEx($model, 'create_time') ?>
                    </div>

                    <div class="chatting">
                        <h2>
                            <?php echo $form->labelEx($model, 'message'); ?>
                            <?php echo $form->textField($model, 'message'); ?>
                            <?php echo $form->error($model, 'message'); ?></h2>

                        <?php echo $form->labelEx($model, 'create_user_id') ?>
                        <?php echo $form->textFieldEx($model, 'create_user_id') ?>
                        <?php echo $form->errorFieldEx($model, 'create_user_id') ?>


                    </div>


                    <div class="row buttons">
                        <input type="button" value="Login" />
                    </div>

                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>