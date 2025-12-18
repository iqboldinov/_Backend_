<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Kruslar $model */

$this->title = 'Update Kruslar: ' . $model->Id:;
$this->params['breadcrumbs'][] = ['label' => 'Kruslars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id:, 'url' => ['view', 'Id:' => $model->Id:]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kruslar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
