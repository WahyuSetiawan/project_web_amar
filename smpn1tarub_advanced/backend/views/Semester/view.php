<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SemesterModel */

$this->title = $model->id_semester;
$this->params['breadcrumbs'][] = ['label' => 'Semester Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semester-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_semester], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_semester], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_semester',
            'semester',
        ],
    ]) ?>

</div>
