<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaKelasModel */

$this->title = 'Update Data Siswa Kelas: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Siswa Kelas Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswa-kelas-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>