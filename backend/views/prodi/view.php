<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Prodi */

$this->title = 'Program Studi | '.$model->kode_prodi;
$this->params['breadcrumbs'][] = ['label' => 'Program Studi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->kode_prodi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->kode_prodi], [
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
            'kode_prodi',
            'nama_prodi',
            'kode_fakultas',
        ],
    ]) ?>

</div>
