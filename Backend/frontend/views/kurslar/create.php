<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Kurslar $model */

$this->title = 'Create Kurslar';
$this->params['breadcrumbs'][] = ['label' => 'Kurslars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kurslar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
