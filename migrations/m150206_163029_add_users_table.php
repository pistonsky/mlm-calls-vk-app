<?php

use yii\db\Schema;
use yii\db\Migration;

class m150206_163029_add_users_table extends Migration
{
    public function up()
    {
    	$this->createTable('users', [
            'user_id' => Schema::TYPE_STRING . ' NOT NULL',
            'first_name' => Schema::TYPE_STRING . ' NULL',
            'last_name' => Schema::TYPE_STRING . ' NULL',
            'date_create' => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->addPrimaryKey('user_id','counters','user_id');
    }

    public function down()
    {
        $this->dropTable('users');
    }
}