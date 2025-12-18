<?php

use common\models\Kruslar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\KruslarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kruslars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kruslar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kruslar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id:',
            'Nomi:',
            'Rasmi::ntext',
            'Narxi:',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kruslar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id:' => $model->Id:]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
