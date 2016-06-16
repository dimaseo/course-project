<?php

use yii\db\Migration;

class m160317_091042_general_table extends Migration
{
    public function up()
    {
         $this->createTable('general', [
            'id' => 'pk',
            'img' => 'string',//Schema::TYPE_INTEGER,
            'title' => 'string',
            'description' => 'text',
            //Schema::TYPE_INTEGER,
        ]);

    }

    public function down()
    {
        echo "m160317_091042_general_table cannot be reverted.\n";

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
