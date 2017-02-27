<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PengajarModel */

$this->title = 'Tambah Data Pengajar';
$this->params['breadcrumbs'][] = ['label' => 'Pengajar Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajar-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
