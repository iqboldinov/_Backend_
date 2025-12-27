<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Kurslar $model */

$this->title = 'Update Kurslar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kurslars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kurslar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
