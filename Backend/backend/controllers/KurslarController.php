<?php 

namespace backend\controllers;

use yii\rest\ActiveController;
use yii\filters\Cors;

class KurslarController extends ActiveController
{
    /**
     * @var string bog'langan model klassi
     */
    public $modelClass = 'common\models\Kurslar';

    /**
     * React (Frontend) bilan bog'lanish uchun CORS ruxsatini yoqish
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // CORS filterini qo'shish
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
        ];

        return $behaviors;
    }
}