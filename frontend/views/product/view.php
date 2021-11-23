<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->model;

?>

<div class="row">

    <div class="col-md-4">
        
        <h4 style="padding:30px">Авто в наличии - <?= Html::encode($this->title) ?></h4>
        
    </div>
    
</div>

<div class="row">
    
    <div class="col-md-6">
        
        <img src="/images/<?= $model->image ?>.png" width="600px" height="auto" alt="avto"/>
        
    </div>

    <div class="col-md-6">
        
        <h2 style="font-size:48px; padding-bottom:15px; font-weight:500;"><?= $model->cost ?>  ₽</h2>
        
        <p><?= $model->salon?>: <?= $model->street ?>, <?= $model->hause ?></p>
        
    </div>
    
</div>

<div class="row">
    
    <div class="col-md-6">
        
        <h4 style="padding-bottom:30px">Стандартное оснащение</h4>

        <?php foreach ($standardEquipment as $model2): ?>

        <p><?= $model2->item ?></p>

        <?php endforeach; ?>
        
    </div>
    
</div>

<div class="row">
    
    <div class="col-md-6">
        
        <h4 style="padding-bottom:30px; padding-top:50px">Дополнительное оснащение</h4>

            <?php foreach ($dopEquipment as $model3): ?>

                <p><?= $model3->item ?></p>

            <?php endforeach; ?>
        
    </div>
    
</div>

<div class="row">
    
    <div class="col-md-4">

        <p style="padding-top:50px">Год выпуска: <?= $model->year ?></p>
        
        <p>Цвет: <?= $model->color ?></p>
        
        <p>Комплектация: <?= $model->capacity ?>, <?= $model->fuel ?>, <?= $model->kpp ?></p>
        
        <p>Стоимость: <?= $model->cost ?> ₽</p>

    </div>
    
</div>
