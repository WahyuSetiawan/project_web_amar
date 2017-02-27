<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LevelUserModel */

$this->title = 'Create Level User Model';
$this->params['breadcrumbs'][] = ['label' => 'Level User Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="level-user-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
