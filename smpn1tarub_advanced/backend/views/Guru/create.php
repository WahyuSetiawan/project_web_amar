<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GuruModel */

$this->title = 'Create Guru Model';
$this->params['breadcrumbs'][] = ['label' => 'Guru Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
