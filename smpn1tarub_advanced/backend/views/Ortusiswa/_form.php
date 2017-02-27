<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrtusiswaModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ortusiswa-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ortu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ortu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_ortu')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'Pria' => 'Pria', 'Wanita' => 'Wanita', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama')->dropDownList([ 'Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pangkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Intansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_instansi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon')->textInput() ?>

    <?= $form->field($model, 'level_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
