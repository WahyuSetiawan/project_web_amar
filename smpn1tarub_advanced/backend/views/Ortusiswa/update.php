<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrtusiswaModel */

$this->title = 'Update Ortusiswa Model: ' . ' ' . $model->id_ortu;
$this->params['breadcrumbs'][] = ['label' => 'Ortusiswa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ortu, 'url' => ['view', 'id' => $model->id_ortu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ortusiswa-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
