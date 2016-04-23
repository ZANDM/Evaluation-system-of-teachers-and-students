<?php

use yii\db\Schema;
use yii\db\Migration;

class m160227_102133_extend_status_table_for_created_by extends Migration
{
    public function up()
    {
        $this->addColumn('status', 'created_by', Schema::TYPE_INTEGER);
        $this->addForeignKey('fk_status_created_by', 'status', 'created_by', 'user', 'id', 'CASCADE', 'CASCADE');
        
    }

    public function down()
    {
        $this->dropForeignKey('fk_status_created_by', 'status');
        $this->dropColumn('status', 'created_by');
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
