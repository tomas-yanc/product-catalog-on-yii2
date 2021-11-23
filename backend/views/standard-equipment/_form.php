<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StandardEquipment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="standard-equipment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
