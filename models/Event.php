<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $event_name
 * @property int $location_id
 * @property int $registree_id
 * @property string $date
 * @property string $time_started
 * @property string $time_end
 *
 * @property Location $location
 * @property Registree $registree
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_name', 'location_id', 'registree_id'], 'required'],
            [['location_id', 'registree_id'], 'integer'],
            [['date'], 'safe'],
            [['event_name'], 'string', 'max' => 191],
            [['time_started', 'time_end'], 'string', 'max' => 255],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
            [['registree_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registree::className(), 'targetAttribute' => ['registree_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_name' => 'Event Name',
            'location_id' => 'Location ID',
            'registree_id' => 'Registree ID',
            'date' => 'Date',
            'time_started' => 'Time Started',
            'time_end' => 'Time End',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegistree()
    {
        return $this->hasOne(Registree::className(), ['id' => 'registree_id']);
    }
}
