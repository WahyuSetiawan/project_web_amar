<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MapelModel */

$this->title = 'Update Data Mapel Model: ' . ' ' . $model->kode_mapel;
$this->params['breadcrumbs'][] = ['label' => 'Mapel Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_mapel, 'url' => ['view', 'id' => $model->kode_mapel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mapel-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
