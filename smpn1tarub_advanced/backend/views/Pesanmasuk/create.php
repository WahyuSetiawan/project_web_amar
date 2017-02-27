<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PesanmasukModel */

$this->title = 'Create Pesanmasuk Model';
$this->params['breadcrumbs'][] = ['label' => 'Pesanmasuk Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesanmasuk-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
