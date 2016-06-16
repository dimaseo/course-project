<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\Url;
use yii\web\JsExpression;
use kartik\widgets;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use skeeks\widget\simpleajaxuploader\Widget;


/* @var $this yii\web\View */
/* @var $model backend\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin([
        'options'=>[
            'enctype'=>'multipart/form-data',
            'method' => 'post',
        ],
    ]); ?>

    <?= $form->field($model, 'img')->fileInput() ?>


    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
