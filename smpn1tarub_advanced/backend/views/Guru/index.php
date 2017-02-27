<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guru Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Guru Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nuptk',
            'nama_guru',
            'tempat_lahir',
            'tgl_lahir',
            'jk',
            // 'agama',
            // 'foto',
            // 'pend_akhir',
            // 'alamat:ntext',
            // 'email:email',
            // 'telepon',
            // 'level_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
