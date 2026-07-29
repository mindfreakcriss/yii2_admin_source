<?php

namespace app\controllers;

use yii\web\Controller;

class AppsEcommerceSellersController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
