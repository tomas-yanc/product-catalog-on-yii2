<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\AppAsset;

?>

<?= $this->beginPage(); ?>

<head>
    
    <?= $this->head(); ?>
    
</head>

<?= $this->beginBody(); ?>

<body>
    
    <div class="row">
        
        <div class="col-md-4">
        
            <h2 style="padding:30px">Авто в наличии</h2>
            
        </div>
        
    </div>

    <div class="row">

        <?php foreach ($product as $model): ?>

        <div class="col-md-4">

            <img class="product-image" src="/images/<?= $model->image ?>.png" alt="avto"/>

            <h3 class="product-text"><?= Html::a(Html::encode($model->model), ['view', 'id' => $model->id]); ?></h3>

            <p class="product-text"><?= $model->capacity ?>, <?= $model->fuel ?>, <?= $model->kpp ?></p>

            <h3 class="product-text"><?= $model->cost ?> ₽</h3>

            <p class="product-text"><?= $model->color ?></p>

        </div>

        <?php endforeach; ?>

    </div>

<?= $this->endBody() ?>
    
</body>

<?= $this->endPage() ?>
