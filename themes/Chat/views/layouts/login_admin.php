<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <link rel="stylesheet" type="text/css" href="<?php echo  Yii::app()->theme->baseUrl; ?>Chat/css/style.css" media="screen, projection" />
        <script type="text/javascript" src="<?php  echo Yii::app()->baseUrl ?>/packages/jui/js/jquery.js"></script>
        <title><?php // echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div class="login-container">

             =========================== Header Wrapper Start Here =========================== 
            <div class="login-header-container"><div class="container">
                    <h1><span style="font-weight: bold">Welcome To : <?php // echo Yii::app()->name; ?></span></h1>
                    <h2><img src="images/login.png" />Login</h2>
                </div>
            </div>

            <?php echo $content; ?>

             =========================== Footer Wrapper Start Here ============================ 
            <div class="login-footer container">
                <p>Copyright © <?php // echo date('Y'); ?></p>

            </div>
             =========================== Footer Wrapper Close Here ============================ 

        </div>
    </body>
</html>


<!--<html>
<head>
 <link rel="stylesheet" type="text/css" href="<?php // echo Yii::app()->theme->baseUrl; ?>Chat/css/style.css" />
<title>Login</title>
</head>
<body>
	<header>
    </header>
    <div id="main_wraper">
        <div id="wraper">
            <div id="login">
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
        </div>
  	</div>
    <footer>
    </footer>
</body>
</html>-->