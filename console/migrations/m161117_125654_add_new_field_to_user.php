<?php

use yii\db\Migration;
use yii\db\Schema;

class m161117_125654_add_new_field_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'name', Schema::TYPE_STRING);
        $this->addColumn('{{%user}}', 'last_name', Schema::TYPE_STRING);
        $this->addColumn('{{%user}}', 'phone', Schema::TYPE_STRING);
        $this->addColumn('{{%user}}', 'country', Schema::TYPE_STRING);
        $this->addColumn('{{%user}}', 'city', Schema::TYPE_STRING);
        $this->addColumn('{{%user}}', 'district', Schema::TYPE_STRING);
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'name');
        $this->dropColumn('{{%user}}', 'last_name');
        $this->dropColumn('{{%user}}', 'phone');
        $this->dropColumn('{{%user}}', 'country');
        $this->dropColumn('{{%user}}', 'city');
        $this->dropColumn('{{%user}}', 'district');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
