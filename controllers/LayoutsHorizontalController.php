<?php

namespace app\controllers;

use yii\web\Controller;

class LayoutsHorizontalController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }
}
