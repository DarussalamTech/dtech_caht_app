<?php

class ChatController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'post', 'log'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * chating index action
     */
    public function actionIndex() {
        $this->render("index");
    }

    /**
     * chatting action
     */
    public function actionPost() {
        $text = $_POST['text'];

        $fp = fopen(Yii::app()->basePath . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "chat_log.html", 'a');
        fwrite($fp, "<div class='msgln'> <b>" . Yii::app()->user->name . "</b> <div class='chat_body'>" . stripslashes(htmlspecialchars($text)) . "</div><span class='date'>(" . date("g:i A") . ")</span><br></div>");
        fclose($fp);

        /**
         * Now writing page title
         */
        $fp = fopen(Yii::app()->basePath . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "_title_log.html", 'w');
        fwrite($fp, "" . Yii::app()->user->name . " : " . stripslashes(htmlspecialchars($text)));
        fclose($fp);
    }

    /*     * *
     * get chat log
     */

    public function actionLog() {
        $file = Yii::app()->basePath . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "chat_log.html";

        if (is_file($file)) {
            $filesize = filesize($file);
            if ($filesize > 0) {
                $fp = fopen($file, 'r');

                $contents = fread($fp, $filesize);
                fclose($fp);
                $page_title = $this->readPageTitle();
                echo CJSON::encode(array("content" => $contents,"page_title"=>$page_title));
            } else {
                echo CJSON::encode(array("content" => "","page_title"=>""));
            }
        } else {
            echo CJSON::encode(array("content" => "","page_title"=>""));
        }
    }

    /**
     * title of page on every ajax call
     */
    public function readPageTitle() {
        $file = Yii::app()->basePath . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "_title_log.html";

        if (is_file($file)) {
            $filesize = filesize($file);
            if ($filesize > 0) {
                $fp = fopen($file, 'r');

                $contents = fread($fp, $filesize);
                fclose($fp);
                return $contents;
               
            }
            else {
                 return "";
            }
           
        } else {
            return "";
        }
    }

}

