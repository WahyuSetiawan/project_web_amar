<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JadwalujianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Data Jadwal Ujian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalujian-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Data Jadwal Ujian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jadwal_ujian',
            'No',
            'Tanggal',
            'Jam',
            'Mapel',
            // 'Ruang',
            // 'Kelas',
            // 'tahun_ajaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
