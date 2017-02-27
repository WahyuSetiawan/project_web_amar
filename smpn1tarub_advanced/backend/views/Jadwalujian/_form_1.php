<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalujianModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwalujian-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'No')->textInput() ?>

    <?= $form->field($model, 'Tanggal')->textInput() ?>

    <?= $form->field($model, 'Jam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_ajaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
