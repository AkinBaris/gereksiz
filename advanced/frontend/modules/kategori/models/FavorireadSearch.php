<?php

namespace frontend\modules\kategori\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\kategori\models\Favoriread;

/**
 * FavorireadSearch represents the model behind the search form about `frontend\modules\kategori\models\Favoriread`.
 */
class FavorireadSearch extends Favoriread
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'READID'], 'integer'],
            [['USERNAME'], 'safe'],
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
        $query = Favoriread::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'READID' => $this->READID,
        ]);

        $query->andFilterWhere(['like', 'USERNAME', $this->USERNAME]);

        return $dataProvider;
    }
}
