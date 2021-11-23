<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StandardEquipment */

$this->title = 'Update Standard Equipment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Standard Equipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="standard-equipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
