<?php

use yii\db\Schema;
use yii\db\Migration;

class m160314_121707_create_teacher_table extends Migration
{
    public function up()
    {
         $tableOptions = null;
          if ($this->db->driverName === 'mysql') {
              $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
          }

          $this->createTable('{{%teacher}}', [
              'id' => Schema::TYPE_PK,
              'job_number' => Schema::TYPE_INTEGER ,
              'name' => Schema::TYPE_STRING ,
              'level'=>Schema::TYPE_STRING,
              'created_at' => Schema::TYPE_INTEGER ,
              'updated_at' => Schema::TYPE_INTEGER ,
          ], $tableOptions);
           //$this->addForeignKey( '','{{%teacher}}','name','{{%$user}}','username','CASCADE','CASCADE');
    }

    public function down()
    {
      
        $this->dropTable('{{%teacher}}');

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
