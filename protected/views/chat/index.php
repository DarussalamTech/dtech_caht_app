<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
<div id="wrapper">  

    <div id="menu">  
        <p class="welcome">Welcome, <b><?php echo Yii::app()->user->name; ?></b></p> 
        <p class="logout"><a id="exit" href="javascript:void(0)">Exit Chat</a></p>  
        <div style="clear:both"></div>  
    </div>  

    <div id="chatbox"><?php
        $file = Yii::app()->basePath . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "chat_log.html";
        if (file_exists($file) && filesize($file) > 0) {
            $handle = fopen($file, "r");
            $contents = fread($handle, filesize($file));
            fclose($handle);

            echo $contents;
        }
        ?>
    </div>
    <span id="user_typing">User is typing...</span>
    <div class="clear">
    </div> 
    <div class="chatform">
        <form name="message" action="">  
            <input name="usermsg" type="text" id="usermsg" size="63" />  
            <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />  
        </form> 
    </div>

</div>  

<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript">
    // jQuery Document  
    $(document).ready(function() {
        /**
         * logout button js
         */
        $("#chatbox").animate({scrollTop: $('#chatbox')[0].scrollHeight}, 'normal');
        $("#exit").click(function() {
            var exit = confirm("Are you sure you want to end the session?");
            if (exit == true) {
                window.location = '<?php echo $this->createUrl("/site/logout") ?>';
            }
        });

        /**
         * chat button
         */
        $("#submitmsg").click(function() {
            var clientmsg = $("#usermsg").val();
            $.post("<?php echo $this->createUrl("/chat/post") ?>", {text: clientmsg});
            $("#usermsg").attr("value", "");

            return false;
        });
        setInterval(loadLog, 2500);
    });

    function loadLog() {
        //var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request  
        var oldscrollHeight = $('#chatbox')[0].scrollHeight //Scroll height before the request

        $.ajax({
            url: "<?php echo $this->createUrl("/chat/log") ?>",
            cache: false,
            dataType: 'json',
            success: function(data) {
                //Insert chat log into the #chatbox div     

                //Auto-scroll             
                //var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request  
                var newscrollHeight = $('#chatbox')[0].scrollHeight; //Scroll height after the request  
                if (newscrollHeight > oldscrollHeight) {
                    if (data['page_title'] != "") {
                        document.title = data['page_title'] + ' | <?php echo CHtml::encode($this->pageTitle) ?>';
                    }
                    else {
                        document.title = '<?php echo CHtml::encode($this->pageTitle) ?>';
                    }

                    $("#chatbox").html(data['content']);
                    $("#chatbox").animate({scrollTop: newscrollHeight}, 'normal'); //Autoscroll to bottom of div  


                }
            },
        });
    }
</script>  