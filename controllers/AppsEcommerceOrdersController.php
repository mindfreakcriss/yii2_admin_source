<?php

namespace app\controllers;

use yii\web\Controller;

class AppsEcommerceOrdersController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
