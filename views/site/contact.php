<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = '联系我们';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            感谢您联系我们。我们会尽快回复您。
        </div>

        <p>
            请注意，如果您开启了 Yii 调试器，您可以在调试器的邮件面板中查看邮件消息。
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                由于应用处于开发模式，邮件不会被发送，而是保存为文件在 <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>。
                请将 <code>mail</code> 应用组件的 <code>useFileTransport</code> 属性设置为 false 以启用邮件发送。
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            如果您有业务咨询或其他问题，请填写以下表单联系我们。谢谢。
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('提交', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
