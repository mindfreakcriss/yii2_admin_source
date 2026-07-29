<?php

namespace app\controllers;

use yii\web\Controller;

class AppsEmailInboxController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
