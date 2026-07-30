<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = '关于';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        这是关于页面。您可以修改以下文件来自定义其内容：
    </p>

    <code><?= __FILE__ ?></code>
</div>
