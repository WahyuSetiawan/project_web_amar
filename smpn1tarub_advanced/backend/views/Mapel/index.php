<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MapelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Mata Pelajaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapel-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Data Mata Pelajaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_mapel',
            'mapel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
