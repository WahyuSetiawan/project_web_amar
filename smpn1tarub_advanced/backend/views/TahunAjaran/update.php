<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TahunAjaranModel */

$this->title = 'Update Tahun Ajaran Model: ' . ' ' . $model->id_ta;
$this->params['breadcrumbs'][] = ['label' => 'Tahun Ajaran Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ta, 'url' => ['view', 'id' => $model->id_ta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tahun-ajaran-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
