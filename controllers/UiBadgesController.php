<?php

namespace app\controllers;

use yii\web\Controller;

class UiBadgesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
