<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Kruslar $model */

$this->title = 'Create Kruslar';
$this->params['breadcrumbs'][] = ['label' => 'Kruslars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kruslar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
