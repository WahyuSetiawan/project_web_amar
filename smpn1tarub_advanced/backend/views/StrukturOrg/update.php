<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StrukturOrgModel */

$this->title = 'Update Struktur Org Model: ' . ' ' . $model->id_strukturor;
$this->params['breadcrumbs'][] = ['label' => 'Struktur Org Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_strukturor, 'url' => ['view', 'id' => $model->id_strukturor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="struktur-org-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
