<?php

namespace app\controllers;

use yii\web\Controller;

class AppsKanbanController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
