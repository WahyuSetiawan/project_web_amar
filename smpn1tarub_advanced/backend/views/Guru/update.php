<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GuruModel */

$this->title = 'Update Guru Model: ' . ' ' . $model->nuptk;
$this->params['breadcrumbs'][] = ['label' => 'Guru Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nuptk, 'url' => ['view', 'id' => $model->nuptk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guru-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
