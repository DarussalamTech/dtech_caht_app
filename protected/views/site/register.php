<!--<div id="main_wraper">
    <div id="wraper">
        <div id="login">
            <h1><img src="images/registration.png" /> Sign up</h1>
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
                    <input type="text" />
                </div>
            </div>
            <div class="pswrd">
                <div class="left">
                    Password: <span>Wrong Password</span>
                </div>
                <div class="right">
                    <input type="password" />
                </div>
            </div>
            <div class="pswrd">
                <div class="left">
                    Confirm Password: <span>Wrong Password</span>
                </div>
                <div class="right">
                    <input type="password" />
                </div>
            </div>
            <input type="button" value="Enter" />
        </div>
    </div>
</div>-->
<?php
/* @var $this SiteController */
/* @var $model RegisterForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - RegisterForm';
$this->breadcrumbs = array(
    'RegisterForm',
);
?>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'register-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>

    <div id="main_wraper">
        <div id="wraper">
            <div id="login">
                <h1><img src="css/images/registration.png" /> Sign up</h1>
                <div class="name">
                    <div class = "right">
                        <div class="row">
                            <?php echo $form->labelEx($model, 'Name'); ?>
                            <?php echo $form->textField($model, 'username'); ?>
                            <?php echo $form->error($model, 'username'); ?>
                        </div>
                    </div>
                    </div>
                    <div class = "right">
                        <div class="row">
                            <?php echo $form->labelEx($model, 'Email'); ?>
                            <?php echo $form->textField($model, 'email'); ?>
                            <?php echo $form->error($model, 'email'); ?>

                        </div></div>
                    <div class = "right">
                        <div class="row">
                            <?php echo $form->labelEx($model, 'Password'); ?>
                            <?php echo $form->passwordField($model, 'password'); ?>
                            <?php echo $form->error($model, 'password'); ?>

                        </div></div>
                    <div class = "right">
                        <div class="row">
                            <?php echo $form->labelEx($model, 'Confirm Password'); ?>
                            <?php echo $form->passwordField($model, 'retype'); ?>
                            <?php echo $form->error($model, 'retype'); ?>

                        </div></div>


                    <div class = "right">

                       <div class="row buttons">
                             <input type="button" value="Enter" />
                        </div>

                    <?php $this->endWidget(); ?>
                </div><!-- form -->
         </div>       </div>
 