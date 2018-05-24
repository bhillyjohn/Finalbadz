<?php

use yii\db\Migration;

/**
 * Handles the creation of table `registree`.
 */
class m180523_051913_create_registree_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $this->createTable('registree', [
            'id' => $this->primaryKey(),
            'name' => $this->string(191)->notNull(),
            'address' => $this->string(255),
            'gender' => $this->string(9)->notNull(),
            'phone' => $this->string(12)->notNull(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('registree');
    }
}
