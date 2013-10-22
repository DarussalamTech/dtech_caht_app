<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php
if (empty(Yii::app()->user->id)):
    ?>
    <p>Please Proceed Login to to enter in Chat room <?php echo CHtml::link("Login", $this->createUrl("/site/login")) ?></p>
    <?php
else:
?>
    <p>Please Proceed to  Chat room <?php echo CHtml::link("Chat", $this->createUrl("/chat/index")) ?></p>
    <p>For logout Click here <?php echo CHtml::link("Logout", $this->createUrl("/site/Logout")) ?></p>
<?php    
endif;
?>

