<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DemoModel $model */

$this->title = '创建数据模型';
$this->params['breadcrumbs'][] = ['label' => '数据模型', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
