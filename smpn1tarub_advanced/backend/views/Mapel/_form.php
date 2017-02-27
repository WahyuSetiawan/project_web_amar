<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MapelModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mapel-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_mapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mapel')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
