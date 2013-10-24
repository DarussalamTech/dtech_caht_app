<?php

class m131024_060236_inserUsertable extends CDbMigration {

    /**
     * o Business name
      o Business address
      o Position title
      o Contact name
      § First
      § Last
      o Contact number
      o Email
      o Password
      -­‐ Register Button

     */
    public function up() {
        $table = "users";
        $this->createTable($table, array(
            'id' => 'pk',
            'business_name' => 'varchar(250) NOT NULL',
            'business_address' => 'text DEFAULT NULL',
            'position_title' => 'varchar(250) DEFAULT NULL',
            'first_name' => 'varchar(250) NOT NULL',
            'last_name' => 'varchar(250) NOT NULL',
            'contact_no' => 'varchar(250) DEFAULT NULL',
            'gender' => "varchar(250) DEFAULT NULL",
            'email' => 'varchar(250) NOT NULL',
            'username' => 'varchar(250) NOT NULL',
            'password' => 'varchar(250) NOT NULL',
        ));
    }

    public function down() {
        $this->dropTable("users");
    }

}