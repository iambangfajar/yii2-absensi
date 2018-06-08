<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dosen */

$this->title = 'Ubah Dosen: ' . $model->id_dosen;
$this->params['breadcrumbs'][] = ['label' => 'Dosen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dosen, 'url' => ['view', 'id' => $model->id_dosen]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="dosen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
