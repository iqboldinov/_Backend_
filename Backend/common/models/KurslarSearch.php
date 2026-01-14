<?php
namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kurslar;

/**
 * KurslarSearch represents the model behind the search form of `common\models\Kurslar`.
 */
class KurslarSearch extends Kurslar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // Ikki nuqtalar olib tashlandi
            [['Id', 'Narxi'], 'integer'],
            [['Nomi', 'Malumoti', 'Rasmi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params, $formName = null)
    {
        $query = Kurslar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // Grid filtering conditions - Ikki nuqtalar olib tashlandi
        $query->andFilterWhere([
            'Id' => $this->Id,
            'Narxi' => $this->Narxi,
        ]);

        $query->andFilterWhere(['like', 'Nomi', $this->Nomi])
            ->andFilterWhere(['like', 'Malumoti', $this->Malumoti])
            ->andFilterWhere(['like', 'Rasmi', $this->Rasmi]);

        return $dataProvider;
    }
}