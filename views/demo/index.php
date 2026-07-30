<?php

use app\models\DemoModel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\search\SearchDemoModel $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '数据模型';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('新建数据', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DemoModel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
