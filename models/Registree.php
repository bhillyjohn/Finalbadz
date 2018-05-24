<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registree".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $gender
 * @property string $phone
 * @property string $event_id
 */
class Registree extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registree';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'gender', 'phone'], 'required'],
            [['name'], 'string', 'max' => 191],
            [['address'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 9],
            [['phone'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'gender' => 'Gender',
            'phone' => 'Phone',
        ];
    }
}
