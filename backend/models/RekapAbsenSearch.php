<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RekapAbsen;

/**
 * RekapAbsenSearch represents the model behind the search form of `backend\models\RekapAbsen`.
 */
class RekapAbsenSearch extends RekapAbsen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rekapabsen'], 'integer'],
            [['nim', 'kode_makul', 'kls1', 'kls2', 'kls3', 'kls4', 'kls5', 'kls6', 'kls7', 'kls8', 'kls9', 'kls10', 'kls11', 'kls12', 'kls13', 'kls14'], 'safe'],
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
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RekapAbsen::find();

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
            'id_rekapabsen' => $this->id_rekapabsen,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'kode_makul', $this->kode_makul])
            ->andFilterWhere(['like', 'kls1', $this->kls1])
            ->andFilterWhere(['like', 'kls2', $this->kls2])
            ->andFilterWhere(['like', 'kls3', $this->kls3])
            ->andFilterWhere(['like', 'kls4', $this->kls4])
            ->andFilterWhere(['like', 'kls5', $this->kls5])
            ->andFilterWhere(['like', 'kls6', $this->kls6])
            ->andFilterWhere(['like', 'kls7', $this->kls7])
            ->andFilterWhere(['like', 'kls8', $this->kls8])
            ->andFilterWhere(['like', 'kls9', $this->kls9])
            ->andFilterWhere(['like', 'kls10', $this->kls10])
            ->andFilterWhere(['like', 'kls11', $this->kls11])
            ->andFilterWhere(['like', 'kls12', $this->kls12])
            ->andFilterWhere(['like', 'kls13', $this->kls13])
            ->andFilterWhere(['like', 'kls14', $this->kls14]);

        return $dataProvider;
    }
}
