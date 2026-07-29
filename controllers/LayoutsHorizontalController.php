<?php

namespace app\controllers;

use yii\web\Controller;

class LayoutsHorizontalController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
