<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAbsen */

$this->title = 'Ubah Rekap Absen: ' . $model->id_rekapabsen;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Absen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rekapabsen, 'url' => ['view', 'id' => $model->id_rekapabsen]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="rekap-absen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
