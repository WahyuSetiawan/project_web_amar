<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SiswaregistrasiModel */

$this->title = 'Create Siswaregistrasi Model';
$this->params['breadcrumbs'][] = ['label' => 'Siswaregistrasi Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswaregistrasi-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
