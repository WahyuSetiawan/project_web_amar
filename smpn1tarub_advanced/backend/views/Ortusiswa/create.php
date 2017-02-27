<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrtusiswaModel */

$this->title = 'Create Ortusiswa Model';
$this->params['breadcrumbs'][] = ['label' => 'Ortusiswa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ortusiswa-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
