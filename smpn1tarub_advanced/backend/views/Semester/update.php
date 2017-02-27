<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SemesterModel */

$this->title = 'Update Semester Model: ' . ' ' . $model->id_semester;
$this->params['breadcrumbs'][] = ['label' => 'Semester Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_semester, 'url' => ['view', 'id' => $model->id_semester]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="semester-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
