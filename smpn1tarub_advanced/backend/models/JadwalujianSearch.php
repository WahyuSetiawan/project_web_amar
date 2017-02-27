<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JadwalujianModel;

/**
 * JadwalujianSearch represents the model behind the search form about `app\models\JadwalujianModel`.
 */
class JadwalujianSearch extends JadwalujianModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jadwal_ujian', 'No'], 'integer'],
            [['Tanggal', 'Jam', 'Mapel', 'Ruang', 'Kelas', 'tahun_ajaran'], 'safe'],
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
        $query = JadwalujianModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_jadwal_ujian' => $this->id_jadwal_ujian,
            'No' => $this->No,
            'Tanggal' => $this->Tanggal,
        ]);

        $query->andFilterWhere(['like', 'Jam', $this->Jam])
            ->andFilterWhere(['like', 'Mapel', $this->Mapel])
            ->andFilterWhere(['like', 'Ruang', $this->Ruang])
            ->andFilterWhere(['like', 'Kelas', $this->Kelas])
            ->andFilterWhere(['like', 'tahun_ajaran', $this->tahun_ajaran]);

        return $dataProvider;
    }
}
