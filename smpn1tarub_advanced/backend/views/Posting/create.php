<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PostingModel */

$this->title = 'Create Posting Model';
$this->params['breadcrumbs'][] = ['label' => 'Posting Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posting-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
