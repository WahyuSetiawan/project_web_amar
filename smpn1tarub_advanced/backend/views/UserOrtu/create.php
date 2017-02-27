<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserortuModel */

$this->title = 'Create Userortu Model';
$this->params['breadcrumbs'][] = ['label' => 'Userortu Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userortu-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
