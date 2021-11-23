<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title="Catalog";

?>
    
<div class="row">

    <div class="col-md-4">

        <h2 style="padding:30px">Авто в наличии</h2>

    </div>

</div>

<div class="row">

    <?php foreach ($category as $model): ?>

        <div class="col-md-4">

            <img src="/images/<?= $model->image ?>.png" width="400px" height="auto" alt="avto"/>

            <h4 style="text-align:center">
                <?= Html::a(Html::encode($model->name), ["product/index", "category_id" => $model->id]); ?>
            </h4>

        </div>

    <?php endforeach; ?>

</div>


