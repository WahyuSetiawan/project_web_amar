<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaKelasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Siswa Kelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-kelas-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Data Siswa Kelas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_kelas',
            'nis',
            'tahun_ajaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>