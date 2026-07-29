<?php

namespace app\controllers;

use yii\web\Controller;

class UiButtonsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
