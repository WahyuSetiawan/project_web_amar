<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StrukturOrgModel */

$this->title = $model->id_strukturor;
$this->params['breadcrumbs'][] = ['label' => 'Struktur Org Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="struktur-org-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_strukturor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_strukturor], [
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
            'id_strukturor',
            'jabatan',
            'nama',
        ],
    ]) ?>

</div>
