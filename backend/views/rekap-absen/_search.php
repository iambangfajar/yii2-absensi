<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAbsenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-absen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rekapabsen') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'kode_makul') ?>

    <?= $form->field($model, 'kls1') ?>

    <?= $form->field($model, 'kls2') ?>

    <?php // echo $form->field($model, 'kls3') ?>

    <?php // echo $form->field($model, 'kls4') ?>

    <?php // echo $form->field($model, 'kls5') ?>

    <?php // echo $form->field($model, 'kls6') ?>

    <?php // echo $form->field($model, 'kls7') ?>

    <?php // echo $form->field($model, 'kls8') ?>

    <?php // echo $form->field($model, 'kls9') ?>

    <?php // echo $form->field($model, 'kls10') ?>

    <?php // echo $form->field($model, 'kls11') ?>

    <?php // echo $form->field($model, 'kls12') ?>

    <?php // echo $form->field($model, 'kls13') ?>

    <?php // echo $form->field($model, 'kls14') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
