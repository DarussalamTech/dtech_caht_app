<?php

class m131024_125142_addconf_chattable extends CDbMigration {

    public function up() {
        $table = "conf_chat_type";
        $this->createTable($table, array(
            'id' => 'pk',
            'page_title' => 'varchar(100) DEFAULT NULL',
            'current_user' => 'varchar(30) DEFAULT NULL',
            'chat_type' => 'varchar(30) DEFAULT NULL',

        ));
       
        $this->insert($table, array("page_title"=>"","current_user"=>"","chat_type"=>""));
    }

    public function down() {
        $table = "conf_chat_type";
        $this->dropTable($table);
    }

}