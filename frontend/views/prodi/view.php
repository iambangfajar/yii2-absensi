<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Prodi */

$this->title = $model->kode_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Prodi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_prodi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_prodi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_prodi',
            'nama_prodi',
            'kode_fakultas',
        ],
    ]) ?>

</div>
