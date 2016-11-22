<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m161121_122841_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'short_description' => $this->string(255)-> notNull(),
            'description' => $this->text()->notNull(),
            'img' => $this->string(255),
            'slug' => $this->string(),
            'dt_add' => $this->integer(11),
            'dt_update' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
