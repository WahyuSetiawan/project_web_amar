<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaregistrasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswaregistrasi Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswaregistrasi-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Siswaregistrasi Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_registrasi',
            'nama_siswa',
            'jk',
            'tempat_lahir',
            'tgl_lahir',
            // 'alamat:ntext',
            // 'agama',
            // 'asal_sekolah',
            // 'kota_ijazah',
            // 'foto',
            // 'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
