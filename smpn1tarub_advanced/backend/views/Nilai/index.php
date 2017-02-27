<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NilaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nilai Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nilai Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_mapel',
            'nis',
            'nilai_tugas',
            'nilai_uts',
            'nilai_uas',
            // 'nilai_akhir',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
