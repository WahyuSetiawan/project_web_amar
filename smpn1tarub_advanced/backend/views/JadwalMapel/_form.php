<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalMapelModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-mapel-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'No')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pengajar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_ajaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
