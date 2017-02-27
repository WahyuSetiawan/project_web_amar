<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KategoriModel */

$this->title = 'Create Kategori Model';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
