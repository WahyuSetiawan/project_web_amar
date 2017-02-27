<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaModel */

$this->title = 'Update Siswa Model: ' . ' ' . $model->nis;
$this->params['breadcrumbs'][] = ['label' => 'Siswa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nis, 'url' => ['view', 'id' => $model->nis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswa-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
