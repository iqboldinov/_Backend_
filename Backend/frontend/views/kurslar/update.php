<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Kurslar $model */

// Git belgilari olib tashlandi va ikki nuqtali ustunga murojaat to'g'irlandi
$this->title = 'Kursni tahrirlash: ' . $model->{'Id:'};
$this->params['breadcrumbs'][] = ['label' => 'Kurslar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->{'Id:'}, 'url' => ['view', 'id' => $model->{'Id:'}]];
$this->params['breadcrumbs'][] = 'Tahrirlash';
?>
<div class="kurslar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>