<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GaleriFotoModel */

$this->title = $model->id_galeri;
$this->params['breadcrumbs'][] = ['label' => 'Galeri Foto Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galeri-foto-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_galeri], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_galeri], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'apakah anda yakin data ini akan dihapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_galeri',
            'judul_foto',
            'foto',
            'deskripsi',
            'id_kategori',
        ],
    ]) ?>

</div>
