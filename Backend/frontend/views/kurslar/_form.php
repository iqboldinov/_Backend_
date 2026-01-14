<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Kurslar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kurslar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nomi:')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Malumoti:')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Rasmi:')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Narxi:')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
