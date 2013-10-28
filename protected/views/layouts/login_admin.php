<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/style_1.css" />
<!--        <link rel="stylesheet" type="text/css" href="<?php // echo Yii::app()->baseUrl;  ?>/css/reg_style.css" />-->
<!--        <script type="text/javascript" src="<?php // echo Yii::app()->baseUrl  ?>/packages/jui/js/jquery.js"></script>-->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <header>
        </header>

      
       

             <?php  echo $content; ?>

            <!--   <div id="login">
                            <h1><img src="images/login.png" /> Login</h1>
                            <div class="name">
                                <div class="left">
                                    Username: <span>Incorrect Username</span>
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
                            <input type="button" value="Login" />
                        </div>
            </div>-->
            <?php //echo $content; ?>
            <footer>

             
      
        </footer>
    </body>
</html>


