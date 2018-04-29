<?php

use yii\db\Migration;

/**
 * Handles the creation of table `item`.
 */
class m180429_100821_create_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('item', [
            'item_id' => $this->primaryKey(),
            'name'    => $this->string(255)->notNull(),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('item');
    }
}
