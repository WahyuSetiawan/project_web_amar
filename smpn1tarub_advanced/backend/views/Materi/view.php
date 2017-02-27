<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MateriModel */

$this->title = $model->id_materi;
$this->params['breadcrumbs'][] = ['label' => 'Materi Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_materi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_materi], [
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
            'id_materi',
            'nama_file',
            'tgl_unggah',
            'deskripsi:ntext',
            'tipe_file',
            'file',
            'nip',
        ],
    ]) ?>

</div>
