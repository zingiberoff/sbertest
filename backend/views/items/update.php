<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Items */

$this->title = 'Update Items: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->primaryKey]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
