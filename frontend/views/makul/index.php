<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MakulSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SISI | Makul';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makul-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Makul', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_makul',
            'kode_prodi',
            'id_dosen',
            'nama_makul',
            'hari',
            //'jam_masuk',
            //'jam_keluar',
            //'kelas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
