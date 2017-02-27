<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaregistrasiModel */

$this->title = 'Update Siswaregistrasi Model: ' . ' ' . $model->no_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Siswaregistrasi Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_registrasi, 'url' => ['view', 'id' => $model->no_registrasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswaregistrasi-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
