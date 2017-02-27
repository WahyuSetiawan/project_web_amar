<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SemesterModel */

$this->title = 'Create Semester Model';
$this->params['breadcrumbs'][] = ['label' => 'Semester Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semester-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
