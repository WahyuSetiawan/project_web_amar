<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalMapelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-mapel-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_jadwal_mapel') ?>

    <?= $form->field($model, 'No') ?>

    <?= $form->field($model, 'Hari') ?>

    <?= $form->field($model, 'Jam') ?>

    <?= $form->field($model, 'Ruang') ?>

    <?php // echo $form->field($model, 'Kelas') ?>

    <?php // echo $form->field($model, 'Mapel') ?>

    <?php // echo $form->field($model, 'Pengajar') ?>

    <?php // echo $form->field($model, 'tahun_ajaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
