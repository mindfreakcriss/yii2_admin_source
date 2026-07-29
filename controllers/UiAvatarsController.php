<?php

namespace app\controllers;

use yii\web\Controller;

class UiAvatarsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
