<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dosen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_dosen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nisn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
