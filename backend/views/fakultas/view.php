<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Fakultas */

$this->title = 'Fakultas | '.$model->kode_fakultas;
$this->params['breadcrumbs'][] = ['label' => 'Fakultas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakultas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->kode_fakultas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->kode_fakultas], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Yakin Untuk Menghapus?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_fakultas',
            'nama_fakultas',
        ],
    ]) ?>

</div>
