<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaregistrasiModel */

$this->title = $model->no_registrasi;
$this->params['breadcrumbs'][] = ['label' => 'Siswaregistrasi Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswaregistrasi-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no_registrasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no_registrasi], [
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
            'no_registrasi',
            'nama_siswa',
            'jk',
            'tempat_lahir',
            'tgl_lahir',
            'alamat:ntext',
            'agama',
            'asal_sekolah',
            'kota_ijazah',
            'foto',
            'email:email',
        ],
    ]) ?>

</div>
