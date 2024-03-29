<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TahunAjaranModel */

$this->title = 'Create Tahun Ajaran Model';
$this->params['breadcrumbs'][] = ['label' => 'Tahun Ajaran Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tahun-ajaran-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
