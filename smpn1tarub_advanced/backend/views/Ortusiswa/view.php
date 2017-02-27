<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrtusiswaModel */

$this->title = $model->id_ortu;
$this->params['breadcrumbs'][] = ['label' => 'Ortusiswa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ortusiswa-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ortu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ortu], [
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
            'id_ortu',
            'nama_ortu',
            'alamat_ortu:ntext',
            'jk',
            'agama',
            'pekerjaan',
            'Pangkat',
            'Intansi',
            'alamat_instansi:ntext',
            'foto',
            'email:email',
            'telepon',
            'level_user',
        ],
    ]) ?>

</div>
