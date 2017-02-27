<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Materi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_materi',
            'nama_file',
            'tgl_unggah',
            'deskripsi:ntext',
            'tipe_file',
            // 'file',
            // 'nip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
