<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StrukturOrgModel */

$this->title = 'Create Struktur Org Model';
$this->params['breadcrumbs'][] = ['label' => 'Struktur Org Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="struktur-org-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
