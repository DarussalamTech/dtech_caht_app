<html>
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/reg_style.css" type="text/css" rel="stylesheet" />
<title>Registration Form</title>
</head>
<body>
	<header>
    </header>
    <div id="main_wraper">
        <div id="wraper">
            <div id="login">
                <h1><img src="<?php echo Yii::app()->theme->baseUrl; ?>images/registration.png" /> Signup</h1>
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
  	</div>
    <footer>
    </footer>
</body>
</html>