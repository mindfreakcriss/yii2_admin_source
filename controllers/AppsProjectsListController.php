<?php

namespace app\controllers;

use yii\web\Controller;

class AppsProjectsListController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
