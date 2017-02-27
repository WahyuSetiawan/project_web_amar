<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JadwalMapelModel */

$this->title = 'Tambah Data Jadwal Pelajaran';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Mapel Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-mapel-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
