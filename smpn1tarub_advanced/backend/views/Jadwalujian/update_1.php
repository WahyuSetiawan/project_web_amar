<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalujianModel */

$this->title = 'Update Jadwalujian Model: ' . ' ' . $model->id_jadwal_ujian;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalujian Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jadwal_ujian, 'url' => ['view', 'id' => $model->id_jadwal_ujian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwalujian-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
