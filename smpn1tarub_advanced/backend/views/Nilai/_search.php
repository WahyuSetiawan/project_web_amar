<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilai-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_mapel') ?>

    <?= $form->field($model, 'nis') ?>

    <?= $form->field($model, 'nilai_tugas') ?>

    <?= $form->field($model, 'nilai_uts') ?>

    <?= $form->field($model, 'nilai_uas') ?>

    <?php // echo $form->field($model, 'nilai_akhir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
