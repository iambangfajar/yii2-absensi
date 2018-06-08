<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FakultasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SISI | Fakultas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakultas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fakultas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_fakultas',
            'nama_fakultas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
