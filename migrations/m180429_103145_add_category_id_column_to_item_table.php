<?php

use yii\db\Migration;

/**
 * Handles adding category_id to table `item`.
 */
class m180429_103145_add_category_id_column_to_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('item', 'category_id', $this->integer());
        $this->addForeignKey(
            'fk-item-category_id',
            'item',
            'category_id',
            'category',
            'category_id',
            'SET NULL',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-item-category_id',
            'item'
        );
        $this->dropColumn('item', 'category_id');
    }
}
