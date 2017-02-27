<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GuruModel */

$this->title = $model->nuptk;
$this->params['breadcrumbs'][] = ['label' => 'Guru Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nuptk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nuptk], [
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
            'nuptk',
            'nama_guru',
            'tempat_lahir',
            'tgl_lahir',
            'jk',
            'agama',
            'foto',
            'pend_akhir',
            'alamat:ntext',
            'email:email',
            'telepon',
            'level_user',
        ],
    ]) ?>

</div>
