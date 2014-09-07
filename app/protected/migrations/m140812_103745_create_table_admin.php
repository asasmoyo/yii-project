<?php

class m140812_103745_create_table_admin extends CDbMigration
{
    public function up()
    {
        $this->createTable('admin', array(
            'id' => 'pk',
            'username' => 'varchar(30) not null unique',
            'hashed_password' => 'varchar(64) not null',
            'salt' => 'varchar(32) not null',
        ));

        $username = 'admin';
        $salt = Hash::createSalt(24);
        $hashed_password = Hash::createHash($username, $salt);
        $this->insert('admin', array(
            'username' => $username,
            'hashed_password' => $hashed_password,
            'salt' => $salt,
        ));
        return true;
    }

    public function down()
    {
        $this->dropTable('admin');
        return true;
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