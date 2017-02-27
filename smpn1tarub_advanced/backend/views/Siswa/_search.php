<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nis') ?>

    <?= $form->field($model, 'nama_siswa') ?>

    <?= $form->field($model, 'jk') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'thn_masuk') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'asal_sekolah') ?>

    <?php // echo $form->field($model, 'kota_ijazah') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telepon') ?>

    <?php // echo $form->field($model, 'level_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
