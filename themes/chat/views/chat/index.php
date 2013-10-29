<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/reg_style.css" />
<div id="wrapper">  

    <div id="chat">
        <h1><a href="javascript:void(0)" class="smiley"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/smiley_03.png" /></a> Group Chat
            <div class="right_images">
                <a href="#" class="send_file"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/send_file_03.png" alt="Share a File" title="Share a File" /></a>
                <a href="javascript:void(0)" id="exit"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/signout_03.png" alt="Sign Out" title="Sign Out" /></a>
            </div>
        </h1>
        <div class="main_chatting">
            <?php
            $file = Yii::app()->basePath . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "chat_log.html";
            if (file_exists($file) && filesize($file) > 0) {
                $handle = fopen($file, "r");
                $contents = fread($handle, filesize($file));
                $contents = GroupChat::model()->getChatHistory();
                fclose($handle);

                echo $contents;
            }
            ?>
        </div>
        <div class="chatting_type">
           

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'chat-form',
            ));
            ?>
            <input type="hidden" name="ajax" id="ajax" value="1" />
            <?php echo $form->textField($model, 'message', array('class'=>'typing_text')); ?>

            <?php echo CHtml::submitButton('Send', array('name' => 'submitmsg', 'id' => 'submitmsg')); ?>

            <?php $this->endWidget(); ?>
        </div>
    </div>

</div>  

<script type="text/javascript">
    // jQuery Document  
    $(document).ready(function() {
        /**
         * logout button js
         */
        $(".main_chatting").animate({scrollTop: $('.main_chatting')[0].scrollHeight}, 'normal');
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

            $.post("<?php echo $this->createUrl("/chat/index") ?>",
                    $("#chat-form").serialize(), function() {
                $("#GroupChat_message").val("");
            }
            );


            return false;
        });
        setInterval(loadLog, 2500);
    });

    function loadLog() {
        //var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request  
        var oldscrollHeight = $('.main_chatting')[0].scrollHeight //Scroll height before the request

        $.ajax({
            url: "<?php echo $this->createUrl("/chat/log") ?>",
            cache: false,
            dataType: 'json',
            success: function(data) {
                //Insert chat log into the #chatbox div     

                $(".main_chatting").html(data['content']);

                //Auto-scroll             
                //var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request  
                var newscrollHeight = $('.main_chatting')[0].scrollHeight; //Scroll height after the request  
                if (newscrollHeight > oldscrollHeight) {
                    if (data['page_title'] != "") {
                        document.title = data['page_title'] + ' | <?php echo CHtml::encode($this->pageTitle) ?>';
                    }
                    else {
                        document.title = '<?php echo CHtml::encode($this->pageTitle) ?>';
                    }
                    $(".main_chatting").animate({scrollTop: newscrollHeight}, 'normal'); //Autoscroll to bottom of div  
                }
            },
        });
    }
</script>  