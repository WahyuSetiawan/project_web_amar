<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posting Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posting-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posting Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_posting',
            'judul_posting',
            'gambar',
            'isi_posting:ntext',
            'kategori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
