<?php

namespace app\controllers;

use yii\web\Controller;

class ExtendedTreeviewController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
