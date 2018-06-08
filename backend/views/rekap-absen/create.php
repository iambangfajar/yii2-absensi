<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RekapAbsen */

$this->title = 'Tambah Rekap Absen';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Absen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-absen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
