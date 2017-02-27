<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrtusiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ortusiswa-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ortu') ?>

    <?= $form->field($model, 'nama_ortu') ?>

    <?= $form->field($model, 'alamat_ortu') ?>

    <?= $form->field($model, 'jk') ?>

    <?= $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'Pangkat') ?>

    <?php // echo $form->field($model, 'Intansi') ?>

    <?php // echo $form->field($model, 'alamat_instansi') ?>

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
