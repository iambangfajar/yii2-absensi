<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = 'Ubah Mahasiswa: ' . $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nim, 'url' => ['view', 'id' => $model->nim]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="mahasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
