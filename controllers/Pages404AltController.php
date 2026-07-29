<?php

namespace app\controllers;

use yii\web\Controller;

class Pages404AltController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
