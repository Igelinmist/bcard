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
            'series' => 'Series',
            'number' => 'Number',
            'issue' => 'Issue',
            'expiration' => 'Expiration',
            'activity' => 'Activity',
            'amount' => 'Amount',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransactions()
    {
        return $this->hasMany(Transaction::className(), ['card_id' => 'id']);
    }
}
