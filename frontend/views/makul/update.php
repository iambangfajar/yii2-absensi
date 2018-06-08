<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Makul */

$this->title = 'Update Makul: ' . $model->kode_makul;
$this->params['breadcrumbs'][] = ['label' => 'Makuls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_makul, 'url' => ['view', 'id' => $model->kode_makul]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="makul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
