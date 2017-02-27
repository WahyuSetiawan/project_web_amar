<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PostingModel */

$this->title = 'Update Posting Model: ' . ' ' . $model->id_posting;
$this->params['breadcrumbs'][] = ['label' => 'Posting Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_posting, 'url' => ['view', 'id' => $model->id_posting]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posting-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
