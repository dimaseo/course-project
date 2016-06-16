<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;
/* @var $this yii\web\View */
/* @var $model app\models\Course */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descrip')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?//= $form->field($model, 'file')->fileInput(); ?>

    <?= $form->field($model, 'id_category')->dropDownList(ArrayHelper::map(Category::find()->all(),'id', 'title'), ['prompt' => 'Виберіть категорію']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Оновити', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
