<?php

namespace frontend\controllers;

use common\models\Kurslar;
use common\models\KurslarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KurslarController implements the CRUD actions for Kurslar model.
 */
class KurslarController extends Controller
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
     * Lists all Kurslar models.
     */
    public function actionIndex()
    {
        $searchModel = new KurslarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kurslar model.
     * @param int $id ID
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Kurslar model.
     */
    public function actionCreate()
    {
        $model = new Kurslar();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                // Agar modelda ustun nomi 'Id:' bo'lsa, quyidagicha murojaat qilinadi
                return $this->redirect(['view', 'id' => $model->{'Id:'}]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kurslar model.
     * @param int $id ID
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->{'Id:'}]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kurslar model.
     * @param int $id ID
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kurslar model based on its primary key value.
     */
    protected function findModel($id)
    {
        // 'Id:' bazadagi ustun nomi, $id esa funksiyaga kelayotgan qiymat
        if (($model = Kurslar::findOne(['Id:' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}