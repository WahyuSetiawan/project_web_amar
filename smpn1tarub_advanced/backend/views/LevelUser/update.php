<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LevelUserModel */

$this->title = 'Update Level User Model: ' . ' ' . $model->level_user;
$this->params['breadcrumbs'][] = ['label' => 'Level User Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->level_user, 'url' => ['view', 'id' => $model->level_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="level-user-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
