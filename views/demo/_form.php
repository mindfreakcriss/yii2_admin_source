<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DemoModel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="demo-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'demo_name')->textInput(['maxlength' => true])->label('名称') ?>

    <?= $form->field($model, 'created_at')->textInput()->label('创建时间') ?>

    <?= $form->field($model, 'updated_at')->textInput()->label('更新时间') ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
