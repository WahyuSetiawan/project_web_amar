<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MateriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materi-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_materi') ?>

    <?= $form->field($model, 'nama_file') ?>

    <?= $form->field($model, 'tgl_unggah') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'tipe_file') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
