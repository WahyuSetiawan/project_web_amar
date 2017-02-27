<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SiswaModel */

$this->title = 'Create Siswa Model';
$this->params['breadcrumbs'][] = ['label' => 'Siswa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
