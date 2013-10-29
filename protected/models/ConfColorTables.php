<?php

/**
 * This is the model class for table "conf_color_tables".
 *
 * The followings are the available columns in table 'conf_color_tables':
 * @property integer $id
 * @property string $color
 * @property integer $user_id
 */
class ConfColorTables extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return ConfColorTables the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'conf_color_tables';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id', 'numerical', 'integerOnly' => true),
            array('color', 'length', 'max' => 20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, color, user_id', 'safe', 'on' => 'search'),
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
            'color' => 'Color',
            'user_id' => 'User',
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
        $criteria->compare('color', $this->color, true);
        $criteria->compare('user_id', $this->user_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * to fill the color 
     * @return boolean
     */
    protected function beforeValidate() {


        /**
          special conidtion
         */
        if (!empty(Yii::app()->user->id)) {
            $this->user_id = Yii::app()->user->id;
        }
        parent::beforeValidate();

        return true;
    }

    /**
     * find available color that not in use
     */
    public function findAvailableColor() {
        $color = $this->find("user_id = '' OR user_id IS NULL");
        return $color;
    }

    /**
     * assigned color with respect to user key
     */
    public function getAssigneedColors() {
        $colors = $this->findAll('t.user_id IS NOT NULL');
        return CHtml::listData($colors,"user_id","color");
    }

}