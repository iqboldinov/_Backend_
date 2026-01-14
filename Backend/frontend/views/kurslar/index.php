<?php

use common\models\Kurslar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\KurslarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kurslar ro\'yxati';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kurslar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangi kurs qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id:',
            'Nomi:',
            'Malumoti::ntext', // Ikki nuqtali formatlash: ntext
            'Rasmi::ntext',
            'Narxi:',
            
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kurslar $model, $key, $index, $column) {
                    // Ikki nuqtali ustunga xavfsiz murojaat qilish:
                    return Url::toRoute([$action, 'id' => $model->{'Id:'}]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>