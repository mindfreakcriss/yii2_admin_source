<?php

namespace app\controllers;

use yii\web\Controller;

class CrmProjectsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
