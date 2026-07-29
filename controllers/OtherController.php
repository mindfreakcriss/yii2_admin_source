<?php

namespace app\controllers;

use yii\web\Controller;

class OtherController extends Controller
{
    public function actionPages404()
    {
        return $this->render('pages-404');
    }
    public function actionPages500()
    {
        return $this->render('pages-500');
    }
    public function actionPagesConfirmMail()
    {
        return $this->render('pages-confirm-mail');
    }
    public function actionPagesConfirmMail2()
    {
        return $this->render('pages-confirm-mail-2');
    }
    public function actionPagesLockScreen()
    {
        return $this->render('pages-lock-screen');
    }
    public function actionPagesLockScreen2()
    {
        return $this->render('pages-lock-screen-2');
    }
    public function actionPagesLogin()
    {
        return $this->render('pages-login');
    }
    public function actionPagesLogin2()
    {
        return $this->render('pages-login-2');
    }
    public function actionPagesLogout()
    {
        return $this->render('pages-logout');
    }
    public function actionPagesLogout2()
    {
        return $this->render('pages-logout-2');
    }
    public function actionPagesMaintenance()
    {
        return $this->render('pages-maintenance');
    }
    public function actionPagesRecoverpw()
    {
        return $this->render('pages-recoverpw');
    }
    public function actionPagesRecoverpw2()
    {
        return $this->render('pages-recoverpw-2');
    }
    public function actionPagesRegister()
    {
        return $this->render('pages-register');
    }
    public function actionPagesRegister2()
    {
        return $this->render('pages-register-2');
    }
}
