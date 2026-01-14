<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Kurslar $model */

// Git belgilari olib tashlandi va ikki nuqtali ustun nomi to'g'irlandi
$this->title = $model->{'Nomi:'};
$this->params['breadcrumbs'][] = ['label' => 'Kurslar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kurslar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->{'Id:'}], ['class' => 'btn btn-primary']) ?>
        <?= Html::a("O'chirish", ['delete', 'id' => $model->{'Id:'}], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => "Haqiqatan ham ushbu kursni o'chirmoqchimisiz?",
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id:',
            'Nomi:',
            'Malumoti::ntext',
            'Rasmi::ntext',
            'Narxi:',
        ],
    ]) ?>

</div>