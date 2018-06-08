<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Makul */

$this->title = 'Tambah Mata Kuliah';
$this->params['breadcrumbs'][] = ['label' => 'Mata kuliah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="makul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
