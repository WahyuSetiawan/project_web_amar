<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswa Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Siswa Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nis',
            'nama_siswa',
            'jk',
            'tempat_lahir',
            'tgl_lahir',
            // 'alamat:ntext',
            // 'agama',
            // 'thn_masuk',
            // 'status',
            // 'asal_sekolah',
            // 'kota_ijazah',
            // 'foto',
            // 'email:email',
            // 'telepon',
            // 'level_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
