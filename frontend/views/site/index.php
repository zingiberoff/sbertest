<?php

use yii\helpers\Url;

/* @var $this yii\web\View
 * @var $model array
 */

$this->title = 'My Yii Application';
?>
<div class="container">
    <div class="row"><?
        foreach ($model as $item) {
            ?>
            <a href="<?= Url::toRoute(['site/view', 'id' => $item->primarykey], true) ?>">
                <div class="col-6 col-lg-2">
                    <div class="item">
                        <img src="<?= $item->image ?>" alt="<?= $item->name ?>">
                        <div class="title"><?= $item->name ?></div>
                        <div class="desc"><?= $item->descrpion ?></div>
                    </div>
                </div>
            </a>
        <? }
        ?>
    </div>
</div>

