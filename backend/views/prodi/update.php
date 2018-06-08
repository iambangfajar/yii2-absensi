<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Prodi */

$this->title = 'Ubah Program Studi: ' . $model->kode_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Program Studi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_prodi, 'url' => ['view', 'id' => $model->kode_prodi]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="prodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
