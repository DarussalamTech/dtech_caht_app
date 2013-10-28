<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo  Yii::app()->theme->baseUrl; ?>Chat/css/style.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo  Yii::app()->theme->baseUrl; ?>Chat/css/reg_style.css" media="screen, projection" />
<!--<link href="css/style.css" type="text/css" rel="stylesheet" />-->
 <script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/packages/jui/js/jquery.js"></script>
<title>Log</title>
</head>
<body>
	<header>
    </header>
    <div id="main_wraper">
        <div id="wraper">
            <div id="login">
                <h1><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/login.png" /> Login</h1>
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
             <?php echo $content; ?>
        </div>
  	</div>
    <footer>
    </footer>
</body>
</html>