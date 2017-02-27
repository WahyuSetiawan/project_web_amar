<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrtusiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ortusiswa Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ortusiswa-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ortusiswa Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ortu',
            'nama_ortu',
            'alamat_ortu:ntext',
            'jk',
            'agama',
            // 'pekerjaan',
            // 'Pangkat',
            // 'Intansi',
            // 'alamat_instansi:ntext',
            // 'foto',
            // 'email:email',
            // 'telepon',
            // 'level_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
