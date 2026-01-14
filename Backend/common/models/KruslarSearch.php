<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kruslar;

class KruslarSearch extends Kruslar
{
    public function rules()
    {
        return [
            // Bu yerda 'ID' hammasi katta bo'lishi mumkinligini tekshiring
            [['ID', 'Narxi'], 'integer'], 
            [['Nomi', 'Rasmi'], 'safe'], 
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params, $formName = null)
    {
        $query = Kruslar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID, 
            'Narxi' => $this->Narxi,
        ]);

        $query->andFilterWhere(['like', 'Nomi', $this->Nomi])
            ->andFilterWhere(['like', 'Rasmi', $this->Rasmi]);

        return $dataProvider;
    }
}