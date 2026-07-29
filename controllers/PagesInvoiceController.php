<?php

namespace app\controllers;

use yii\web\Controller;

class PagesInvoiceController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
