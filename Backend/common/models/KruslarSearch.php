<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kruslar;

/**
 * KruslarSearch represents the model behind the search form of `common\models\Kruslar`.
 */
class KruslarSearch extends Kruslar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Narxi'], 'integer'], // `:`ni olib tashlang
            [['Nomi', 'Rasmi'], 'safe'], // `:`ni olib tashlang
        ];
    }

    /**
     * {@inheritdoc}
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Kruslar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id' => $this->Id, // `:`ni olib tashlang
            'Narxi' => $this->Narxi, // `:`ni olib tashlang
        ]);

        $query->andFilterWhere(['like', 'Nomi', $this->Nomi]) // `:`ni olib tashlang
            ->andFilterWhere(['like', 'Rasmi', $this->Rasmi]); // `:`ni olib tashlang

        return $dataProvider;
    }
}
