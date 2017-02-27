<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GaleriFotoModel */

$this->title = 'Update Galeri Foto Model: ' . ' ' . $model->id_galeri;
$this->params['breadcrumbs'][] = ['label' => 'Galeri Foto Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_galeri, 'url' => ['view', 'id' => $model->id_galeri]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="galeri-foto-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
