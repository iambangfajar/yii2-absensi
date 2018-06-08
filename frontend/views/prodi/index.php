<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProdiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'SISI | Prodi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_prodi',
            'nama_prodi',
            'kode_fakultas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
