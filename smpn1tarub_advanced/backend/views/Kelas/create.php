<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KelasModel */

$this->title = 'Tambah Data Kelas';
$this->params['breadcrumbs'][] = ['label' => 'Kelas Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
