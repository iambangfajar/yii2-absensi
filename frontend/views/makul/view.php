<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Makul */

$this->title = $model->kode_makul;
$this->params['breadcrumbs'][] = ['label' => 'Makul', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makul-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kode_makul], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kode_makul], [
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
