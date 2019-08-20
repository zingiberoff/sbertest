<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Items */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-form">

    <?php $form = ActiveForm::begin(
        [
            'options' => [
                'enctype' => 'multipart/form-data'
            ],
        ]);
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descrpion')->textarea(['maxlength' => true]) ?>
    <div id="image">
        <? if ($model->image) { ?>

            <img src="<?= $model->image ?>" alt="<? $model->name ?>" height="200">
            <div onclick="deleteImage()" class="btn btn-danger">Удалить</div>
        <? } else { ?>
            <?= $form->field($model, 'image')->fileInput() ?>
        <? } ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <script>
        function deleteImage() {
            document.getElementById('image').innerHTML = `<?= $form->field($model, 'image')->fileInput() ?>`;
        }
    </script>

</div>
