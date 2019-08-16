<?php

namespace common\models;

use \yii\db\ActiveRecord;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string $name
 * @property string $descrpion
 * @property string $image
 * @property int $view_count
 * @property string $timestamp
 */
class Items extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'descrpion'], 'required'],
            [['view_count'], 'integer'],
            [['timestamp'], 'safe'],
            [['name', 'image'], 'string', 'max' => 255],
            [['descrpion'], 'string', 'max' => 1024],
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
            'descrpion' => 'Descrpion',
            'image' => 'Image',
            'view_count' => 'View Count',
            'timestamp' => 'Timestamp',
        ];
    }
}
