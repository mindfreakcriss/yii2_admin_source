<?php

namespace app\controllers;

use yii\web\Controller;

class OtherController extends Controller
{
    public function actionPages404()
    {
        $this->layout = false;
        return $this->render('pages-404');
    }
    public function actionPages500()
    {
        $this->layout = false;
        return $this->render('pages-500');
    }
    public function actionPagesConfirmMail()
    {
        $this->layout = false;
        return $this->render('pages-confirm-mail');
    }
    public function actionPagesConfirmMail2()
    {
        $this->layout = false;
        return $this->render('pages-confirm-mail-2');
    }
    public function actionPagesLockScreen()
    {
        $this->layout = false;
        return $this->render('pages-lock-screen');
    }
    public function actionPagesLockScreen2()
    {
        $this->layout = false;
        return $this->render('pages-lock-screen-2');
    }
    public function actionPagesLogin()
    {
        $this->layout = false;
        return $this->render('pages-login');
    }
    public function actionPagesLogin2()
    {
        $this->layout = false;
        return $this->render('pages-login-2');
    }
    public function actionPagesLogout()
    {
        $this->layout = false;
        return $this->render('pages-logout');
    }
    public function actionPagesLogout2()
    {
        $this->layout = false;
        return $this->render('pages-logout-2');
    }
    public function actionPagesMaintenance()
    {
        $this->layout = false;
        return $this->render('pages-maintenance');
    }
    public function actionPagesRecoverpw()
    {
        $this->layout = false;
        return $this->render('pages-recoverpw');
    }
    public function actionPagesRecoverpw2()
    {
        $this->layout = false;
        return $this->render('pages-recoverpw-2');
    }
    public function actionPagesRegister()
    {
        $this->layout = false;
        return $this->render('pages-register');
    }
    public function actionPagesRegister2()
    {
        $this->layout = false;
        return $this->render('pages-register-2');
    }
}
