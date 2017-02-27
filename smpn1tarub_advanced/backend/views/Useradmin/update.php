<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UseradminModel */

$this->title = 'Update Useradmin Model: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Useradmin Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="useradmin-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
