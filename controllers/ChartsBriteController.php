<?php

namespace app\controllers;

use yii\web\Controller;

class ChartsBriteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
