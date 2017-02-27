<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NilaiModel */

$this->title = 'Update Nilai Model: ' . ' ' . $model->kode_mapel;
$this->params['breadcrumbs'][] = ['label' => 'Nilai Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_mapel, 'url' => ['view', 'id' => $model->kode_mapel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nilai-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
