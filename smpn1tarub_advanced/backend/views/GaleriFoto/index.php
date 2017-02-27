<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GaleriFotoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galeri Foto';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galeri-foto-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Galeri Foto Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_galeri',
            'judul_foto',
            'foto',
            'deskripsi',
            'id_kategori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
