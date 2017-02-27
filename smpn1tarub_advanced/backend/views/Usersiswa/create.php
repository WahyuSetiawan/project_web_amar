<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UsersiswaModel */

$this->title = 'Create Usersiswa Model';
$this->params['breadcrumbs'][] = ['label' => 'Usersiswa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usersiswa-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
