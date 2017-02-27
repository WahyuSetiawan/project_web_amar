<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JadwalmapelModel;

/**
 * JadwalMapelSearch represents the model behind the search form about `app\models\JadwalMapelModel`.
 */
class JadwalmapelSearch extends JadwalmapelModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jadwal_mapel'], 'integer'],
            [['No', 'Hari', 'Jam', 'Ruang', 'Kelas', 'Mapel', 'Pengajar', 'tahun_ajaran'], 'safe'],
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
        $query = JadwalMapelModel::find();

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
            'id_jadwal_mapel' => $this->id_jadwal_mapel,
        ]);

        $query->andFilterWhere(['like', 'No', $this->No])
            ->andFilterWhere(['like', 'Hari', $this->Hari])
            ->andFilterWhere(['like', 'Jam', $this->Jam])
            ->andFilterWhere(['like', 'Ruang', $this->Ruang])
            ->andFilterWhere(['like', 'Kelas', $this->Kelas])
            ->andFilterWhere(['like', 'Mapel', $this->Mapel])
            ->andFilterWhere(['like', 'Pengajar', $this->Pengajar])
            ->andFilterWhere(['like', 'tahun_ajaran', $this->tahun_ajaran]);

        return $dataProvider;
    }
}
