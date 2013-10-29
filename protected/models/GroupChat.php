<?php

/**
 * This is the model class for table "group_chat".
 *
 * The followings are the available columns in table 'group_chat':
 * @property integer $id
 * @property string $username
 * @property string $message
 * @property string $visible_date_time
 * @property string $create_time
 * @property integer $create_user_id
 */
class GroupChat extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return GroupChat the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'group_chat';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, message, create_time, create_user_id', 'required'),
            array('create_user_id', 'numerical', 'integerOnly' => true),
            array('username', 'length', 'max' => 30),
            array('visible_date_time', 'length', 'max' => 20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, message, visible_date_time, create_time, create_user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'message' => 'Message',
            'visible_date_time' => 'Visible Date Time',
            'create_time' => 'Create Time',
            'create_user_id' => 'Create User',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('message', $this->message, true);
        $criteria->compare('visible_date_time', $this->visible_date_time, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('create_user_id', $this->create_user_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * handling datetime issue
     * @return boolean
     */
    protected function beforeValidate() {


        if ($this->isNewRecord) {

            // set the create date, last updated date and the user doing the creating
            $this->create_time = date("Y-m-d H:i:s"); //new CDbExpression('NOW()');
            $this->create_user_id = Yii::app()->user->id;
        }
        /**
          special conidtion
         */
        if (empty(Yii::app()->user->id)) {
            $this->create_user_id = 1;
        }
        parent::beforeValidate();

        return true;
    }

    /**
     * 
     */
    public function getChatHistory() {
        $chatM = $this->findAll();
        $chat = "";
        $colors = ConfColorTables::model()->getAssigneedColors();
        
        foreach ($chatM as $data) {
            $user_color = "#FF0000";
            if(!empty($colors[$data->create_user_id])){
                $user_color = $colors[$data->create_user_id];
            }
            $chat.= '<div class="chatting">'.
                    '<h2 style="color:'.$user_color.'">'.$data->username.'</h2>'.
                    '<p>'.stripslashes(htmlspecialchars($data->message)) .'<span>'.$data->visible_date_time.'</span></p>'.
            '</div>';
            
        }
        
        return $chat;
    }

}