<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RekapAbsen */

$this->title = 'Update Rekap Absen: ' . $model->id_rekapabsen;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Absens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rekapabsen, 'url' => ['view', 'id' => $model->id_rekapabsen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-absen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
