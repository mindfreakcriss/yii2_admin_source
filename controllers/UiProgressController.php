<?php

namespace app\controllers;

use yii\web\Controller;

class UiProgressController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
