<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StrukturOrgSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Struktur Org Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="struktur-org-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Struktur Org Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_strukturor',
            'jabatan',
            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
