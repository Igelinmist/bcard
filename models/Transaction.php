<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%transaction}}".
 *
 * @property string $id
 * @property string $sum
 * @property string $card_id
 *
 * @property Card $card
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sum', 'card_id'], 'required'],
            [['sum', 'card_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sum' => 'Sum',
            'card_id' => 'Card ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCard()
    {
        return $this->hasOne(Card::className(), ['id' => 'card_id']);
    }
}
