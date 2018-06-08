<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Makul;

/**
 * MakulSearch represents the model behind the search form of `backend\models\Makul`.
 */
class MakulSearch extends Makul
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_makul', 'kode_prodi', 'nama_makul', 'hari', 'jam_masuk', 'jam_keluar', 'kelas'], 'safe'],
            [['id_dosen'], 'integer'],
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
        $query = Makul::find();

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
            'jam_masuk' => $this->jam_masuk,
            'jam_keluar' => $this->jam_keluar,
        ]);

        $query->andFilterWhere(['like', 'kode_makul', $this->kode_makul])
            ->andFilterWhere(['like', 'kode_prodi', $this->kode_prodi])
            ->andFilterWhere(['like', 'nama_makul', $this->nama_makul])
            ->andFilterWhere(['like', 'hari', $this->hari])
            ->andFilterWhere(['like', 'kelas', $this->kelas]);

        return $dataProvider;
    }
}
