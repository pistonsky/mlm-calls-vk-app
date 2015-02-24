<?php

use yii\db\Schema;
use yii\db\Migration;

class m150224_024422_add_calls_table extends Migration
{
    public function up()
    {
    	$this->createTable('calls', [
            'id' => 'bigpk',
            'count' => 'integer',
            'user_id' => Schema::TYPE_STRING . ' NULL',
            'phone' => Schema::TYPE_STRING . ' NULL',
            'skype' => Schema::TYPE_STRING . ' NULL',
            'first_name' => Schema::TYPE_STRING . ' NULL',
            'last_name' => Schema::TYPE_STRING . ' NULL',
            'rating' => Schema::TYPE_INTEGER . ' NULL',
            'importance' => Schema::TYPE_INTEGER . ' NULL',
            'picked_up' => Schema::TYPE_BOOLEAN . ' NULL',

            'time' => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP'
        ]);
    }

    public function down()
    {
        $this->dropTable('calls');
    }
}
