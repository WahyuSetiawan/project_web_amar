<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalujianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwalujian-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_jadwal_ujian') ?>

    <?= $form->field($model, 'No') ?>

    <?= $form->field($model, 'Tanggal') ?>

    <?= $form->field($model, 'Jam') ?>

    <?= $form->field($model, 'Mapel') ?>

    <?php // echo $form->field($model, 'Ruang') ?>

    <?php // echo $form->field($model, 'Kelas') ?>

    <?php // echo $form->field($model, 'tahun_ajaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
