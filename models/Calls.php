<?php

namespace app\models;

use Yii;

class Calls extends \yii\db\ActiveRecord
{
	public static function tableName()
    {
        return 'calls';
    }
}