<?php

namespace app\controllers;

use yii\web\Controller;

class UiBreadcrumbController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
