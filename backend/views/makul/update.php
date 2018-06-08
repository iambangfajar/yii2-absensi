<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Makul */

$this->title = 'Ubah Mata Kuliah: ' . $model->kode_makul;
$this->params['breadcrumbs'][] = ['label' => 'Mata Kuliah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_makul, 'url' => ['view', 'id' => $model->kode_makul]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="makul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
