<?php

use yii\db\Migration;

/**
 * Handles the creation of table `faq`.
 */
class m161122_065850_create_faq_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('faq', [
            'id' => $this->primaryKey(),
            'problem' => $this->string(255)->notNull(),
            'reply' => $this->string(512)->notNull(),
            'dt_add' => $this->integer(11),
            'dt_update' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('faq');
    }
}
