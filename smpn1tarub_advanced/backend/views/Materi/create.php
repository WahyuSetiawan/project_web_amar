<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MateriModel */

$this->title = 'Create Materi Model';
$this->params['breadcrumbs'][] = ['label' => 'Materi Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
