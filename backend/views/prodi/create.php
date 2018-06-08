<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Prodi */

$this->title = 'Tambah Program Studi';
$this->params['breadcrumbs'][] = ['label' => 'Program Study', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
