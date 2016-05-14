<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * NewForm is the model behind the new form.
 */
class NewForm extends Model
{
    public $name;
    public $city;


    public function rules()
    {
        return [
            // name, city are required
            [['name', 'city'], 'required'],


        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Your Name',
            'city' => 'Your City',

        ];
    }



}
