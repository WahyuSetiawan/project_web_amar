<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PostingModel */

$this->title = $model->id_posting;
$this->params['breadcrumbs'][] = ['label' => 'Posting Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posting-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_posting], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_posting], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_posting',
            'judul_posting',
            'gambar',
            'isi_posting:ntext',
            'kategori',
        ],
    ]) ?>

</div>
