<?php

namespace backend\controllers;

use Yii;
use app\models\Promocaogaleria;
use app\models\PromocaogaleriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * PromocaogaleriaController implements the CRUD actions for Promocaogaleria model.
 */
class PromocaogaleriaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Promocaogaleria models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PromocaogaleriaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $query = Promocaogaleria::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Promocaogaleria model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Promocaogaleria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Promocaogaleria();

       if ($model->load(Yii::$app->request->post())) {
            //$model->save();
            $images= UploadedFile::getInstance($model, 'imagem');
            $ImgName = $images->baseName. '.' .$images->extension;
            $images->saveAs(Yii::getAlias('@ImgPath'). '/' .$ImgName);
            $model->imagem = $ImgName;
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Promocaogaleria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

       if ($model->load(Yii::$app->request->post())) {
            //$model->save();
            $images= UploadedFile::getInstance($model, 'imagem');
            if($images && $model->validate()){
                $ImgName = $images->baseName. '.' .$images->extension;
                $images->saveAs(Yii::getAlias('@ImgPath'). '/' .$ImgName);
                $model->imagem = $ImgName;
                $model->save();
                
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Promocaogaleria model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Promocaogaleria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Promocaogaleria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Promocaogaleria::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
