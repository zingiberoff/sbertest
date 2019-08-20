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
            [['name', 'descrpion'], 'required', 'message' => 'Поле {attribute} не заполнено'],
            ['image', 'required', 'message' => 'Файл не загружен или имеет неверный формат'],
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
            'primaryKey' => "ID",
            'name' => 'Name',
            'descrpion' => 'Descrpion',
            'image' => 'Image', /* TODO: Файлы стоит вынести в отдельную таблицу,
                                         но в рамках данной задачи это не нужно*/
        ];
    }
}
