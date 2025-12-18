<?php

namespace frontend\controllers;

use common\models\Kruslar;
use common\models\KruslarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KruslarController implements the CRUD actions for Kruslar model.
 */
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
     * Lists all Kruslar models.
     *
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
     * Displays a single Kruslar model.
     * @param int $Id: Id:
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id:)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id:),
        ]);
    }

    /**
     * Creates a new Kruslar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kruslar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id:' => $model->Id:]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kruslar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id: Id:
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id:)
    {
        $model = $this->findModel($Id:);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id:' => $model->Id:]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kruslar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id: Id:
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id:)
    {
        $this->findModel($Id:)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kruslar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id: Id:
     * @return Kruslar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id:)
    {
        if (($model = Kruslar::findOne(['Id:' => $Id:])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
