<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "general_table".
 *
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property string $description
 */
class GeneralTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['img', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
