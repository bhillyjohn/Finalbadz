<?php

use yii\db\Migration;

/**
 * Handles the creation of table `event`.
 */
class m180523_052828_create_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('event', [
            'id' => $this->primaryKey(),
            'event_name' => $this->string(191)->notNull(),
            'location_id' => $this->integer()->notNull(),
             'registree_id' => $this->integer()->notNull(),
            'date' => $this->date('DATE'),
            'time_started' => $this->string(255),
            'time_end' => $this->string(255)

       ]);
        $this->createIndex(
            'idx-event-location_id',
            'event','location_id'
        );

        $this->addForeignKey(
            'fk-event-location',
            'event','location_id',
            'location', 'id'
        );
         $this->createIndex(
            'idx-event-registree_id',
            'event','registree_id'
        );

        $this->addForeignKey(
            'fk-event-registree',
            'event','registree_id',
            'registree', 'id'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-event-location', 'event');
        $this->dropForeignKey('fk-event-registree', 'event');
        $this->dropIndex('idx-event-location_id','event');
        $this->dropIndex('idx-event-registree_id','event');
        $this->dropTable('event');
    }
}
