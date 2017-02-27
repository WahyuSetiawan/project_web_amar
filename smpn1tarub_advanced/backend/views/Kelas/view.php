<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KelasModel */

$this->title = $model->id_kelas;
$this->params['breadcrumbs'][] = ['label' => 'Kelas Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kelas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kelas], [
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
            'id_kelas',
            'kelas',
        ],
    ]) ?>

</div>
