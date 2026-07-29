<?php

namespace app\controllers;

use yii\web\Controller;

class TablesDatatableController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
