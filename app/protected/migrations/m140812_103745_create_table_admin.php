<?php

class m140812_103745_create_table_admin extends CDbMigration
{
    public function up()
    {
        $this->createTable('admins', array(
            'id' => 'pk',
            'username' => 'varchar(30) not null unique',
            'password' => 'varchar(32) not null',
        ));
        return true;
    }

    public function down()
    {
        $this->dropTable('admins');
        return false;
    }

    /*
    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}