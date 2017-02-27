<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GaleriFotoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galeri-foto-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_galeri') ?>

    <?= $form->field($model, 'judul_foto') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'id_kategori') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>