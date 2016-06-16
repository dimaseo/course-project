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
    public $file;
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
            [['descrip'], 'string'],
            [['price'], 'number'],
            [['id_category'], 'integer'],
            //[['file'], 'file'],
            [['name', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           // 'id' => 'ID',
            'name' => 'Назва курсу',
            'descrip' => 'Повний опис',
            'price' => 'Ціна за курс',
           // 'photo' => 'Фото',
            'id_category' => 'Назва батьківської категорії',
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
