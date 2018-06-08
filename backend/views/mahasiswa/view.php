<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Mahasiswa */

$this->title = 'Mahasiswa | '.$model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->nim], [
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
            'nim',
            'nama_mhs',
            'jenis_kelamin',
            'alamat',
        ],
    ]) ?>

</div>
