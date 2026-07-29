<?php

namespace app\controllers;

use yii\web\Controller;

class UiGridController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
