<?php

namespace app\controllers;

use yii\web\Controller;

class CrmManagementController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
