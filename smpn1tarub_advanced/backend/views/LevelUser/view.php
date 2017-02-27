<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LevelUserModel */

$this->title = $model->level_user;
$this->params['breadcrumbs'][] = ['label' => 'Level User Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="level-user-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->level_user], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->level_user], [
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
            'level_user',
            'Keterangan',
        ],
    ]) ?>

</div>
