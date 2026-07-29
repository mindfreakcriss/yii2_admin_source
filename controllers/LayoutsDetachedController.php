<?php

namespace app\controllers;

use yii\web\Controller;

class LayoutsDetachedController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
