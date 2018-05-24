<?php

namespace app\controllers;
use yii;

use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Event;
use app\models\AccessRule;

class EventController extends \yii\web\Controller
{
     public function behaviors()        
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => [100]
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],


        ];
    }
   public function actionCreate()
    {
        $model = new Event();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        Event::findOne($id)->delete();
        return $this->redirect(['/event/index']);
    }

    public function actionIndex()
    {
        $model = Event::find()->orderBy('id')->all();;

        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = Event::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Event::findOne($id);
        return $this->render('view', compact('model'));
    }

}