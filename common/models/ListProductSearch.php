<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ListProduct;

/**
 * ListProductSearch represents the model behind the search form about `app\models\ListProduct`.
 */
class ListProductSearch extends ListProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_product', 'id_transaction'], 'integer'],
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
        $query = ListProduct::find();

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
            'id_product' => $this->id_product,
            'id_transaction' => $this->id_transaction,
        ]);

        return $dataProvider;
    }
}
