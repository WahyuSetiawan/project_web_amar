<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JadwalujianModel */

$this->title = 'Tambah Data Jadwal Ujian';
$this->params['breadcrumbs'][] = ['label' => 'Jadwalujian Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalujian-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
