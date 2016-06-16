<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\BaseStringHelper;
/**
 * This is the model class for table "general".
 *
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property string $description
 */
class General extends \yii\db\ActiveRecord
{
     public $image;
    public $filename;
    public $string;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            // [['img'], 'file'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            //'img' => 'Фото',
            'title' => 'Заголовок',
            'description' => 'Повний опис',
        ];
    }
    // public function beforeSave($insert){
    //     if ($this->isNewRecord) {
    //         //generate & upload
    //         $this->string = substr(uniqid('img'), 0, 12); //imgRandomString
    //         $this->image = UploadedFile::getInstance($this, 'img');
    //         $this->filename = 'static/images/' . $this->string . '.' . $this->image->extension;
    //         $this->image->saveAs($this->filename);

    //         //$this->text_preview = BaseStringHelper::truncate($this->text, 250, '...');

    //         //save
    //         $this->img = '/' . $this->filename;
    //     }else{
    //         $this->image = UploadedFile::getInstance($this, 'img');
    //         if($this->image){
    //             $this->image->saveAs(substr($this->img, 1));
    //         }
    //     }

    //     return parent::beforeSave($insert);
    // }
}
