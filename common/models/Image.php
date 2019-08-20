<?php

namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

class Image extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $filepath;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload(Model $model, $inputName = 'image')
    {
        $this->imageFile = UploadedFile::getInstance($model, $inputName);

        if ($this->validate()) {
            $this->filepath = 'uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($this->filepath);
            return $this->filepath;
        } else {
            return '';
        }
    }
}