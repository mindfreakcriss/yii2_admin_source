<?php

namespace app\controllers;

use yii\web\Controller;

class AppsEcommerceCustomersController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
