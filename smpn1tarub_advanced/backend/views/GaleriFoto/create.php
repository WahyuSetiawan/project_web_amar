<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GaleriFotoModel */

$this->title = 'Create Galeri Foto Model';
$this->params['breadcrumbs'][] = ['label' => 'Galeri Foto Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galeri-foto-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
