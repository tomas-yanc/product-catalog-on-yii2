<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DopEquipment */

$this->title = 'Update Dop Equipment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dop Equipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dop-equipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
