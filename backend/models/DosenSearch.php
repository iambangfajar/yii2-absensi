<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dosen;

/**
 * DosenSearch represents the model behind the search form of `backend\models\Dosen`.
 */
class DosenSearch extends Dosen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dosen'], 'integer'],
            [['nama_dosen', 'nisn', 'alamat'], 'safe'],
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
        $query = Dosen::find();

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
            'id_dosen' => $this->id_dosen,
        ]);

        $query->andFilterWhere(['like', 'nama_dosen', $this->nama_dosen])
            ->andFilterWhere(['like', 'nisn', $this->nisn])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
