<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $id
 * @property string $location_name
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location_name'], 'required'],
            [['location_name'], 'string', 'max' => 191],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_name' => 'Location Name',
        ];
    }
}
