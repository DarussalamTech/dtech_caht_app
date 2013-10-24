<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $business_name
 * @property string $business_address
 * @property string $position_title
 * @property string $first_name
 * @property string $last_name
 * @property string $contact_no
 * @property string $gender
 * @property string $email
 * @property string $username
 * @property string $password
 */
class Users extends CActiveRecord {

    public $confirm_password, $contact_name;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('business_name, first_name, last_name, email, username, password,confirm_password', 'required'),
            array('username,email', 'unique'),
            array('email', 'email'),
            array('confirm_password', 'compare', 'compareAttribute' => 'password'),
            array('business_name, position_title, first_name, last_name, contact_no, gender, email, username, password', 'length', 'max' => 250),
            array('confirm_password,business_address', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, business_name, business_address, position_title, first_name, last_name, contact_no, gender, email, username, password', 'safe', 'on' => 'search'),
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
            'business_name' => 'Business Name',
            'business_address' => 'Business Address',
            'position_title' => 'Position Title',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'contact_no' => 'Contact No',
            'gender' => 'Gender',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
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
        $criteria->compare('business_name', $this->business_name, true);
        $criteria->compare('business_address', $this->business_address, true);
        $criteria->compare('position_title', $this->position_title, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('contact_no', $this->contact_no, true);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * 
     * @return type
     */
    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->password = md5($this->password);
        }
        return parent::beforeSave();
    }

    /**
     * 
     */
    public function afterFind() {
        $this->contact_name = $this->first_name . " " . $this->last_name;
        parent::afterFind();
        return true;
    }

    public function validatePassword($password, $old_password) {

        return md5($password) === $old_password;
        //return $password;
    }

}