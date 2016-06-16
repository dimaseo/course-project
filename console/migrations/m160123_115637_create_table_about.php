<?php

use yii\db\Schema;
use yii\db\Migration;

class m160123_115637_create_table_about extends Migration
{
    public function up()
    {
        $this->createTable('about_table', [
            'id' => 'pk',
            'content' => Schema::TYPE_TEXT,
            ]);
    }

    public function down()
    {
        echo "m160123_115637_create_table_about cannot be reverted.\n";

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
