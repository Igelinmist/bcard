<?php

namespace app\models;

use yii\base\Model;

class GeneratorForm extends Model
{
    /* Input params for CardsGenerator */
    public $serNo;
    public $amount;
    public $termInMounth = 1;

    public function rules()
    {
      return array(
        array(['serNo','amount','termInMounth'],'required'),
        );
    }
}