<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%card}}".
 *
 * @property string $id
 * @property string $series
 * @property string $number
 * @property string $issue
 * @property string $expiration
 * @property string $activity
 * @property string $amount
 * @property integer $status
 *
 * @property Transaction[] $transactions
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%card}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['series', 'number', 'issue'], 'required'],
            [['number', 'amount', 'status'], 'integer'],
            [['issue', 'expiration', 'activity'], 'safe'],
            [['series'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'series' => 'Серия',
            'number' => 'Номер',
            'issue' => 'Выпуск',
            'expiration' => 'Активна до...',
            'activity' => 'Использовалась',
            'amount' => 'Сумма',
            'status' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['card_id' => 'id']);
    }

    // Decorate Amount
    public function getAmount()
    {
        return $this->amount / 100;
    }

    //Decorate Status
    public function getStatus()
    {
        switch ($this->status) {
            case 0:
                return 'Не активирована';

            case 1:
                return 'Активна';

            case 2:
                return 'Просрочена';

            default:
                return 'Неопределенный';
        }
    }

    //Generator in test mode

    public static function generateCards($ser, $cnt, $term)
    {
        for ($new_id = 0; $new_id < $cnt; $new_id++)
        {
            //action save new cards 
            $date = date("Y-m-d H:i:s");
            $card = new Card([
                'series' => $ser, 
                'number' => $new_id,
                'issue' => $date,
                ]);
            $card->save();
        }
    }
}
