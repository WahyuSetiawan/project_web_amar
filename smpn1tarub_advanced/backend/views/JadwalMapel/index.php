<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JadwalMapelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Jadwal Pelajaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-mapel-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Data Jadwal Pelajaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jadwal_mapel',
            'No',
            'Hari',
            'Jam',
            'Ruang',
            // 'Kelas',
            // 'Mapel',
            // 'Pengajar',
            // 'tahun_ajaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
