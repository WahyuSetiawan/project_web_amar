<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilai-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_mapel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_tugas')->textInput() ?>

    <?= $form->field($model, 'nilai_uts')->textInput() ?>

    <?= $form->field($model, 'nilai_uas')->textInput() ?>

    <?= $form->field($model, 'nilai_akhir')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
