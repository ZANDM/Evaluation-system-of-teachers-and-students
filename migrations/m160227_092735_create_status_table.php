<?php

use yii\db\Schema;
use yii\db\Migration;

class m160227_092735_create_status_table extends Migration
{
    public function up()
    {
        $this->createTable('status', [
           'id'=> Schema::TYPE_PK,
            'identity' => Schema::TYPE_STRING,
        ]);
    }

    public function down()
    {
        $this->dropTable('status');
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
