<?php

namespace app\controllers;

use yii\web\Controller;

class UiAlertsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
