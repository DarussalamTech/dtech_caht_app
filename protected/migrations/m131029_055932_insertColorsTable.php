<?php

class m131029_055932_insertColorsTable extends CDbMigration {

    public function up() {
        $table = "conf_color_tables";
        $this->createTable($table, array(
            'id' => 'pk',
            'color' => 'varchar(20) DEFAULT NULL',
            'user_id' => 'int(11) DEFAULT NULL',
        ));

        $colors = array("#FF0000", "#00F;", "#900;",
            "#660;", "#090;", "#F90;",
            "#C6F;", "#90F;", "#60F;", "#00F;");

        foreach ($colors as $color) {
            $this->insert($table, array("color" => $color));
        }
    }

    public function down() {
        $table = "conf_color_tables";
        $this->dropTable($table);
    }

}