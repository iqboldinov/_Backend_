<?php

namespace frontend\controllers;

use common\models\Kruslar;
use common\models\KruslarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class KruslarController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KruslarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @param int 
     * @return string
     * @throws NotFoundHttpException 
     */
    public function actionView($Id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Kruslar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id' => $model->Id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @param int 
     */
    public function actionUpdate($Id)
    {
        $model = $this->findModel($Id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id' => $model->Id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     
     * @param int 
     */
    public function actionDelete($Id)
    {
        $this->findModel($Id)->delete();

        return $this->redirect(['index']);
    }

   
    protected function findModel($Id)
    {
       
        if (($model = Kruslar::findOne(['Id' => $Id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}