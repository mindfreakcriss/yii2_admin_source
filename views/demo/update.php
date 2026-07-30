<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DemoModel $model */

$this->title = '更新数据模型: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '数据模型', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="demo-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
