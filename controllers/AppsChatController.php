<?php

namespace app\controllers;

use yii\web\Controller;

class AppsChatController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
