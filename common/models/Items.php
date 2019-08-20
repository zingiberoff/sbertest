<?php

namespace common\models;

use yii\elasticsearch\ActiveRecord;

class Items extends ActiveRecord
{

    /**
     * @return array Сопоставление для этой модели
     */
    public function attributes()
    {
        return ['_id', 'name', 'descrpion', 'image'];
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