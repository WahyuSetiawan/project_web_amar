<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PesanmasukModel */

$this->title = 'Update Pesanmasuk Model: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pesanmasuk Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pesanmasuk-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
