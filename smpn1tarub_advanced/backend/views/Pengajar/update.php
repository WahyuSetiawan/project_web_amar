<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PengajarModel */

$this->title = 'Update Pengajar: ' . ' ' . $model->id_pengajar;
$this->params['breadcrumbs'][] = ['label' => 'Pengajar Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengajar, 'url' => ['view', 'id' => $model->id_pengajar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengajar-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
