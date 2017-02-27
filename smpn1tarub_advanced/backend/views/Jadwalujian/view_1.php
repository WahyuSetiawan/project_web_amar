<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalujianModel */

$this->title = $model->id_jadwal_ujian;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalujian Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalujian-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jadwal_ujian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jadwal_ujian], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_jadwal_ujian',
            'No',
            'Tanggal',
            'Jam',
            'Mapel',
            'Ruang',
            'Kelas',
            'tahun_ajaran',
        ],
    ]) ?>

</div>
