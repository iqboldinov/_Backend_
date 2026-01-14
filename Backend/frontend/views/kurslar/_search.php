<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\KurslarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kurslar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    {/* Faqat bazadagi real ustun nomlarini qoldiramiz */}
    
    <?= $form->field($model, 'Id:') ?>

    <?= $form->field($model, 'Nomi:') ?>

    <?= $form->field($model, 'Malumoti:') ?>

    <?= $form->field($model, 'Rasmi:') ?>

    <?= $form->field($model, 'Narxi:') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Tozalash', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>