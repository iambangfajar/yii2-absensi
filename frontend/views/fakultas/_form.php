<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fakultas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fakultas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_fakultas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_fakultas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
