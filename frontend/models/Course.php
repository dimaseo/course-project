<?php

namespace  backend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property string $name
 * @property string $descrip
 * @property double $price
 * @property string $photo
 * @property integer $id_category
 *
 * @property CategoryToCourse[] $categoryToCourses
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descrip', 'photo'], 'string'],
            [['price'], 'number'],
            [['id_category'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'descrip' => 'Descrip',
            'price' => 'Price',
            'photo' => 'Photo',
            'id_category' => 'Id Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
   public function getCategoryToCourses()
    {
        return $this->hasMany(CategoryToCourse::className(), ['id_course' => 'id']);
    }
}
