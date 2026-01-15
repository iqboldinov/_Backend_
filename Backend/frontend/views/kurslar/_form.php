<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Kurslar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kurslar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nomi:')->textInput([
        'maxlength' => true, 
        'placeholder' => 'Kurs nomini kiriting...'
    ]) ?>

    <?= $form->field($model, 'Malumoti:')->textarea([
        'rows' => 6, 
        'placeholder' => 'Kurs haqida batafsil ma\'lumot...'
    ]) ?>

    <?= $form->field($model, 'Rasmi:')->textInput([
        'placeholder' => 'Rasm URL manzilini kiriting (masalan: https://...)'
    ]) ?>

    <?= $form->field($model, 'Narxi:')->textInput([
        'type' => 'number', 
        'placeholder' => 'Faqat raqam kiriting'
    ]) ?>

    <div class="form-group" style="margin-top: 20px;">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success w-100']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>