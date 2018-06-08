<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Prodi;

/**
 * ProdiSearch represents the model behind the search form of `frontend\models\Prodi`.
 */
class ProdiSearch extends Prodi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_prodi', 'nama_prodi', 'kode_fakultas'], 'safe'],
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
        $query = Prodi::find();

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
        $query->andFilterWhere(['like', 'kode_prodi', $this->kode_prodi])
            ->andFilterWhere(['like', 'nama_prodi', $this->nama_prodi])
            ->andFilterWhere(['like', 'kode_fakultas', $this->kode_fakultas]);

        return $dataProvider;
    }
}
