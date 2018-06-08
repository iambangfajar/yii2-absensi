<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\RekapAbsen */

$this->title = 'Create Rekap Absen';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Absens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-absen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
