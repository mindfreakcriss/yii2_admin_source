<?php

namespace app\controllers;

use yii\web\Controller;

class UiPopoversController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
