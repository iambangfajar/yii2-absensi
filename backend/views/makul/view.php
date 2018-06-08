<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Makul */

$this->title = 'Mata Kuliah | '.$model->kode_makul;
$this->params['breadcrumbs'][] = ['label' => 'Mata kuliah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makul-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->kode_makul], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->kode_makul], [
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
            'kode_makul',
            'kode_prodi',
            'id_dosen',
            'nama_makul',
            'hari',
            'jam_masuk',
            'jam_keluar',
            'kelas',
        ],
    ]) ?>

</div>
