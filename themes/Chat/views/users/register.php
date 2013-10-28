<?php
/* @var $this UsersController */
/* @var $model Users */




?>
<div id="statusMsg">
    <?php if (Yii::app()->user->hasFlash('success')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('success'); ?>
        </div>
    <?php endif; ?>

    <?php if (Yii::app()->user->hasFlash('error')): ?>
        <div class="flash-error">
            <?php echo Yii::app()->user->getFlash('error'); ?>
        </div>
    <?php endif; ?>
</div>
<div class="clear"></div>
<h1>Register User</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>