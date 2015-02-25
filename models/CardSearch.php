<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Card;

/**
 * CardSearch represents the model behind the search form about `app\models\Card`.
 */
class CardSearch extends Card
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'number', 'amount', 'status'], 'integer'],
            [['series', 'issue', 'expiration', 'activity'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Card::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'number' => $this->number,
            'issue' => $this->issue,
            'expiration' => $this->expiration,
            'activity' => $this->activity,
            'amount' => $this->amount,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'series', $this->series]);

        return $dataProvider;
    }
}
