<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        以上错误发生在 Web 服务器处理您的请求时。
    </p>
    <p>
        如果您认为这是服务器错误，请联系我们。谢谢。
    </p>

</div>
