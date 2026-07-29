<?php

namespace app\controllers;

use yii\web\Controller;

class UiNotificationsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
