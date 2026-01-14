<?php
namespace backend\controllers;

use yii\rest\ActiveController;

class KurslarController extends ActiveController
{
    public $modelClass = 'common\models\Kurslar';

    public function behaviors()
    {
        $behaviors = parent::behaviors();


        $behaviors['corsFilter'] = [
            'class' => \yii\filter\Cors::class,
        ];

        return $behaviors;
    }
}









?>