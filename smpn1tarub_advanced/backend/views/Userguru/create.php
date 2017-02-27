<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserguruModel */

$this->title = 'Create Userguru Model';
$this->params['breadcrumbs'][] = ['label' => 'Userguru Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userguru-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
