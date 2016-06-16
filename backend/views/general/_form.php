<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use himiklab\thumbnail\EasyThumbnailImage;
use vova07\imperavi\Widget;
/* @var $this yii\web\View */
/* @var $model backend\models\General */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="general-form">

     <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?//= $form->field($model, 'img')->fileInput() ?>
    <!-- <img src="/backend/web<?//=$model->img;?> " style="width: 200px; height: auto;"> -->
    

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'description')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
