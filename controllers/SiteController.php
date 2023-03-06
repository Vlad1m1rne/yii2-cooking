<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Recipe;

class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }

 
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    
    public function actionIndex()
       {
        $model = new Recipe();
        $this->view->title = 'Главная';
        return $this->render('index',compact('model'));
    }

    public function actionFirst(){
        $this->view->title = 'Первые блюда';
        return $this->render('first');
    }
    
    public function actionSecond(){
        $this->view->title = 'Вторые блюда';
        return $this->render('second');
    }

    public function actionSalat(){
        $this->view->title = 'Салаты';
        return $this->render('salat');
    }

    public function actionCake(){
        $this->view->title = 'Выпечка';
        return $this->render('cake');  
      }
    
      public function actionOther(){
        $this->view->title = 'Другое';
        return $this->render('other');
      }

  
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

   
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

  
    public function actionAbout()
    {
        return $this->render('about');
    }
}
