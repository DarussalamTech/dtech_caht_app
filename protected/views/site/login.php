<!--<div class="login-container">
    <div id="main_wraper">
        <div id="wraper">
            <div id="login">
                <h1><img src="css/images/login.png" /> Login</h1>
                <div class="name">
                    <div class="left">
                        Username: <span>Incorrect Username</span>
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
                <input type="button" value="Login" />
            </div>
        </div>
    </div>-->

    <?php
    /* @var $this SiteController */
    /* @var $model LoginForm */
    /* @var $form CActiveForm  */

    $this->pageTitle = Yii::app()->name . ' - Login';
    $this->breadcrumbs = array(
        'Login',
    );
    ?>
    <div class="form">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
                ));
        ?>
        <div class="login-container">
            <div id="main_wraper">
                <div id="wraper">
                    <div id="login">
                        <h1><img src="css/images/login.png" /> Login</h1>
                        <div class="name">
                            <div class="right">
                         
                                    <?php echo $form->labelEx($model, 'username'); ?>
                                    <?php echo $form->textField($model, 'username'); ?>
                                    <?php echo $form->error($model, 'username'); ?>
                          
                            </div>
                        </div>
                        <div class="pswrd">
                            <div class="right">
                      
                                    <?php echo $form->labelEx($model, 'password'); ?>
                                    <?php echo $form->passwordField($model, 'password'); ?>
                                    <?php echo $form->error($model, 'password'); ?>
                            </div>

                        <div class="row buttons">
                             <input type="submit" value="Login" />
                        </div>

                        <?php $this->endWidget(); ?>
                    </div>
                </div>
            </div>
        </div>