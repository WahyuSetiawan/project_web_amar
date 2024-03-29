<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PostingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posting-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_posting') ?>

    <?= $form->field($model, 'judul_posting') ?>

    <?= $form->field($model, 'gambar') ?>

    <?= $form->field($model, 'isi_posting') ?>

    <?= $form->field($model, 'kategori') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
