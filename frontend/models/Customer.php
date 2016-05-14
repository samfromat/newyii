<?php

namespace frontend\models;


use Yii;
use yii\db\ActiveRecord;

class Customer extends ActiveRecord
{

	public static function tableName()
    {
        return 'customer';
    }

}