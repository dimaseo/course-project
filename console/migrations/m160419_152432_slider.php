<?php

use yii\db\Migration;

class m160419_152432_slider extends Migration
{
    public function up()
    {
    	$this->createTable('slider', [
            'id' => 'pk',
            //Schema::TYPE_INTEGER,
            'img' => 'string',
            'title' => 'text'
            //Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        echo "m160419_152432_slider cannot be reverted.\n";

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
