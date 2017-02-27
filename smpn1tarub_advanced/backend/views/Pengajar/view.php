<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PengajarModel */

$this->title = $model->id_pengajar;
$this->params['breadcrumbs'][] = ['label' => 'Pengajar Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajar-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pengajar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pengajar], [
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
            'id_pengajar',
            'nip',
            'kode_mapel',
        ],
    ]) ?>

</div>
