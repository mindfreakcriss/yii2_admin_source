<?php

namespace app\controllers;

use yii\web\Controller;

class UiListGroupController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
