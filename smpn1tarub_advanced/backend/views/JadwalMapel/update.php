<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalMapelModel */

$this->title = 'Update Jadwal Pelajaran: ' . ' ' . $model->id_jadwal_mapel;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Mapel Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jadwal_mapel, 'url' => ['view', 'id' => $model->id_jadwal_mapel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-mapel-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
