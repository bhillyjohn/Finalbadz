<?php

use yii\db\Migration;

/**
 * Handles the creation of table `location`.
 */
class m180523_052620_create_location_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('location', [
            'id' => $this->primaryKey(),
            'location_name' => $this->string(191)->notNull(),   
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('location');
    }
}
