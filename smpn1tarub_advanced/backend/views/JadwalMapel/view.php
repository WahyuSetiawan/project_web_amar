<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalMapelModel */

$this->title = $model->id_jadwal_mapel;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Mapel Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-mapel-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jadwal_mapel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jadwal_mapel], [
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
            'id_jadwal_mapel',
            'No',
            'Hari',
            'Jam',
            'Ruang',
            'Kelas',
            'Mapel',
            'Pengajar',
            'tahun_ajaran',
        ],
    ]) ?>

</div>
