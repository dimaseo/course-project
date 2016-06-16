<?php

namespace frontend\controllers;
use Yii;
use yii\helpers\ArrayHelper;
use backend\models\Category;
use backend\models\Course;
use yii\web\Controller;


class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
         $category = Category::find()->all();
         return $this->render('index', ['category' => $category]);
    }
    public function actionView($id){
    	$category = Category::findOne($id);
    	$course = Course::findAll(['id_category' => $id]);
        return $this->render('view', ['category' => $category, 'course' => $course]);
    }

}
