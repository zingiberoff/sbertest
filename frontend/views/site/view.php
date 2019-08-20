<?php

use yii\helpers\Url;

/* @var $this yii\web\View
 * @var $model \common\models\Items
 */

$this->title = $model->name;
?>

<div class="container">
    <a href="<?= Url::previous() ?>">Назад</a>
    <div class="row item_detail">

        <div class="col-6 col-lg-4">
            <img src="<?= $model->image ?>" alt="<?= $model->name ?>">
        </div>
        <div class="col-6 col-lg-8">
            <div class="title"><?= $model->name ?></div>
            <div class="desc"><?= $model->descrpion ?></div>
        </div>


    </div>
</div>
