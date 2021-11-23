<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DopEquipment */

$this->title = 'Create Dop Equipment';
$this->params['breadcrumbs'][] = ['label' => 'Dop Equipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dop-equipment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
