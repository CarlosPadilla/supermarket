<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventary;

/**
 * InventarySearch represents the model behind the search form about `app\models\Inventary`.
 */
class InventarySearch extends Inventary
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'unit_number'], 'integer'],
            [['acquire_date', 'expire_date'], 'safe'],
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
        $query = Inventary::find();

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
            'unit_number' => $this->unit_number,
            'acquire_date' => $this->acquire_date,
            'expire_date' => $this->expire_date,
        ]);

        return $dataProvider;
    }
}
