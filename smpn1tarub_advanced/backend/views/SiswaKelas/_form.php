<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaKelasModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-kelas-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_ajaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>