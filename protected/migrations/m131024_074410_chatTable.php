<?php

class m131024_074410_chatTable extends CDbMigration {

    public function up() {
        $table = "group_chat";
        $this->createTable($table, array(
            'id' => 'pk',
            'username' => 'varchar(30) NOT NULL',
            'message' => 'text NOT NULL',
            'visible_date_time' => 'varchar(20) DEFAULT NULL',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) NOT NULL',
        ));
    }

    public function down() {
        $table = "group_chat";
        $this->dropTable($table);
    }

}