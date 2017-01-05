<?php

namespace app\controllers;

use app\models\User;
use Yii;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new User();
        if ($model->load(Yii::$app->request->post())
            && $model->login()) {
            return $this->redirect('/admin/index');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
}
