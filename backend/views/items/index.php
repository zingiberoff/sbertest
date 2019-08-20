<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $dataProvider \yii\elasticsearch\ActiveDataProvider */
/* @var $pages yii\data\Pagination */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="items-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'primarykey',
            'name',
            'descrpion',
            'image',
            ['class' => 'yii\grid\ActionColumn'],
        ],
        'pager' => [
            'pagination' => $dataProvider->pagination,
        ]

    ]); ?>


</div>
