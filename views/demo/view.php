<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\DemoModel $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '数据模型', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="demo-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除此项吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'id',
                'label' => '编号',
            ],
            [
                'attribute' => 'demo_name',
                'label' => '名称',
            ],
            [
                'attribute' => 'created_at',
                'label' => '创建时间',
            ],
            [
                'attribute' => 'updated_at',
                'label' => '更新时间',
            ],
        ],
    ]) ?>

</div>
