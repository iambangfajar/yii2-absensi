<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MakulSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="makul-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_makul') ?>

    <?= $form->field($model, 'kode_prodi') ?>

    <?= $form->field($model, 'id_dosen') ?>

    <?= $form->field($model, 'nama_makul') ?>

    <?= $form->field($model, 'hari') ?>

    <?php // echo $form->field($model, 'jam_masuk') ?>

    <?php // echo $form->field($model, 'jam_keluar') ?>

    <?php // echo $form->field($model, 'kelas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
