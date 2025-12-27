<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Kurslar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kurslar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'malumot')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rasm')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'narxi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
