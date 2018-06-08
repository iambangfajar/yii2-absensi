<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Makul */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="makul-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_makul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_dosen')->textInput() ?>

    <?= $form->field($model, 'nama_makul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hari')->dropDownList([ 'Senin' => 'Senin', 'Selasa' => 'Selasa', 'Rabu' => 'Rabu', 'Kamis' => 'Kamis', 'Jumat' => 'Jumat', 'Sabtu' => 'Sabtu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jam_masuk')->textInput() ?>

    <?= $form->field($model, 'jam_keluar')->textInput() ?>

    <?= $form->field($model, 'kelas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
