<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fakultas */

$this->title = 'Ubah Fakultas: ' . $model->kode_fakultas;
$this->params['breadcrumbs'][] = ['label' => 'Fakultas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_fakultas, 'url' => ['view', 'id' => $model->kode_fakultas]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="fakultas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
