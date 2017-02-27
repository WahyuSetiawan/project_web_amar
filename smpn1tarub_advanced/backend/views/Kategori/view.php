<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriModel */

$this->title = $model->id_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kategori], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kategori], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin data ini akan dihapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kategori',
            'kategori',
        ],
    ]) ?>

</div>
