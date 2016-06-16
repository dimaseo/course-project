<?php

use yii\db\Schema;
use yii\db\Migration;

class m160119_184910_create_table extends Migration
{
    public function up()
    {
        $this->createTable('category_to_course', [
            'id' => 'pk',
            'id_category' => 'integer',//Schema::TYPE_INTEGER,
            'id_course' => 'integer',//Schema::TYPE_INTEGER,
        ]);
        
        $this->createTable('course', [
            'id' => 'pk',
            'name' => 'string',//Schema::TYPE_STRING . ' NOT NULL',
            'descrip' => 'text',//Schema::TYPE_TEXT,
            'price' => 'float',//Schema::TYPE_FLOAT,
            'photo' => 'text',//Schema::TYPE_TEXT,
            'id_category' => 'integer',
        ]);
        $this->createTable('category', [
            'id' => 'pk',
            'title' => 'string',//Schema::TYPE_STRING . ' NOT NULL',
            'content' => 'text',//Schema::TYPE_TEXT,
            ]);
        $this->addForeignKey('category_key', 'category_to_course', 'id_category', 'category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('course_key', 'category_to_course', 'id_course', 'course', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        echo "m160119_184910_create_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
