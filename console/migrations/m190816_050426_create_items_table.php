<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%items}}`.
 */
class m190816_050426_create_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%items}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'descrpion' => $this->string(1024)->notNull(),
            'image' => $this->string(255),
            'view_count' => $this->integer(),
            'timestamp' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%items}}');
    }
}
