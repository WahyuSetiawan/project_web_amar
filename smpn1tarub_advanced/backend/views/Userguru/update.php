<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserguruModel */

$this->title = 'Update Userguru Model: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Userguru Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userguru-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
