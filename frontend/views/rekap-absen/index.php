<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RekapAbsenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Absen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-absen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?= Html::a('Create Rekap Absen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
    ]); ?>
</div>
