<?php

namespace app\controllers;

use yii\web\Controller;

class AppsEcommerceShoppingCartController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
