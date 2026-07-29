<?php

namespace app\controllers;

use yii\web\Controller;

class PagesPreloaderController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
