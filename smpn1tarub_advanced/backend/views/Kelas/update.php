<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KelasModel */

$this->title = 'Update Kelas Model: ' . ' ' . $model->id_kelas;
$this->params['breadcrumbs'][] = ['label' => 'Kelas Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kelas, 'url' => ['view', 'id' => $model->id_kelas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelas-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
