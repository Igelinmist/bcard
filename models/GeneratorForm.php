<?php

namespace app\models;

use yii\base\Model;

class GeneratorForm extends Model
{
    /* Input params for CardsGenerator */
    public $serNo;
    public $amount;
    public $termInMounth;

    public function rules()
    {
      return [
        [['serNo','amount','termInMounth'], 'required'],
      ];
    }
}