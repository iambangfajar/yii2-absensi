<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAbsen */

$this->title = 'Rekap Absen | '.$model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Absen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-absen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->id_rekapabsen], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id_rekapabsen], [
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
            'kode_makul',
            'kls1',
            'kls2',
            'kls3',
            'kls4',
            'kls5',
            'kls6',
            'kls7',
            'kls8',
            'kls9',
            'kls10',
            'kls11',
            'kls12',
            'kls13',
            'kls14',
        ],
    ]) ?>

</div>
