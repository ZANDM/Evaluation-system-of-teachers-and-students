<?php

namespace app\controllers;

use Yii;
use app\models\StudentBasic;
use app\models\StudentMark1;
use app\models\StudentBasicSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\StudentCourse;

/**
 * StudentBasicController implements the CRUD actions for StudentBasic model.
 */
class StudentBasicController extends Controller
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
            'access' => [
                'class'=>AccessControl::className(),
                'only'=>['index',],
                'rules' => [
                    [
                        'allow'=> true,
                        'actions'=>['index'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all StudentBasic models.
     * @return mixed
     */
    public function actionIndex()
    {  
        $id=Yii::$app->user->getId();
        $student=Studentbasic::findOne($id);
        $searchModel = new StudentBasicSearch();
        $courses=StudentCourse::find()->where(['Sno' => $student->Sno])->all();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'student'=>$student,
            'courses'=>$courses,
        ]);
    }

    /**
     * Displays a single StudentBasic model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new StudentBasic model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $StudentMark1=new StudentMark1();
        $StudentMark2=new \app\models\StudentMark2;
        $StudentMarkt=new \app\models\StudentMarkt;
        $id=Yii::$app->user->getId();
        $student=Studentbasic::findOne($id);
        $StudentMark1->Sno=$StudentMark2->Sno= $studentmarkt->Sno= $StudentMarkt->Sno=$student->Sno;
        $StudentMark1->load(Yii::$app->request->post(), "");
        $StudentMark2->load(Yii::$app->request->post(),"");
        $t=$StudentMarkt->load(Yii::$app->request->post(),"");
        $StudentMark1->save();
        $StudentMark2->save();
        foreach ($t as $key)
            $key->save();
        }
        
//        $model = new StudentBasic();
//        
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            $model->id=Yii::$app->user->getId();
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        }
    

    /**
     * Updates an existing StudentBasic model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing StudentBasic model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StudentBasic model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return StudentBasic the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StudentBasic::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
}
