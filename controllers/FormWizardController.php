<?php

namespace app\controllers;

use yii\web\Controller;

class FormWizardController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
