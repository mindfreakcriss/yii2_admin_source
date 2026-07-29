<?php

namespace app\controllers;

use yii\web\Controller;

class ChartsApexPieController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
