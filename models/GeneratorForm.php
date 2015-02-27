<?php

namespace app\models;

use yii\base\Model;

class GeneratorForm extends Model
{
    public $serNo;
    public $amount;

    public function rules()
    {
      return [
        [['serNo','amount'], 'required'],
      ];
    }
}