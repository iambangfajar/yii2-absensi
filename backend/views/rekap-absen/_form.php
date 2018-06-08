<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAbsen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-absen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_makul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kls1')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls2')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls3')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls4')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls5')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls6')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls7')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls8')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls9')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls10')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls11')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls12')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls13')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kls14')->dropDownList([ 'M' => 'M', 'I' => 'I', 'A' => 'A', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
