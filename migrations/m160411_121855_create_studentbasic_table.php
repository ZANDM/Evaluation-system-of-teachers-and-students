<?php
use yii\db\Schema;
use yii\db\Migration;

class m160411_121855_create_studentbasic_table extends Migration
{
    public function up()
    {
          $tableOptions = null;
          if ($this->db->driverName === 'mysql') {
              $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
          }

          $this->createTable('{{%studentbasic_table}}', [
           'id' => Schema::TYPE_PK,
           'N0' =>Schema::TYPE_INTEGER,
            'name'=> Schema::TYPE_STRING ,
            'password'=>Schema::TYPE_STRING,
          ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('studentbasic_table');
    }
}
