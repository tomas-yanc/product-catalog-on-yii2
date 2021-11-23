<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StandardEquipment */

$this->title = 'Create Standard Equipment';
$this->params['breadcrumbs'][] = ['label' => 'Standard Equipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="standard-equipment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
