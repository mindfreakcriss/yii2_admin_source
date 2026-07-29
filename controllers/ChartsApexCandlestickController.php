<?php

namespace app\controllers;

use yii\web\Controller;

class ChartsApexCandlestickController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
