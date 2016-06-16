<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 *
 * @property CategoryToCourse[] $categoryToCourses
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Коротка назва',
            'content' => 'Опис',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryToCourses()
    {
        return $this->hasMany(CategoryToCourse::className(), ['id_category' => 'id']);
    }
}
