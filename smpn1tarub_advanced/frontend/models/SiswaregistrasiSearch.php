<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SiswaregistrasiModel;

/**
 * SiswaregistrasiSearch represents the model behind the search form about `app\models\SiswaregistrasiModel`.
 */
class SiswaregistrasiSearch extends SiswaregistrasiModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_registrasi', 'nama_siswa', 'jk', 'tempat_lahir', 'tgl_lahir', 'alamat', 'agama', 'asal_sekolah', 'kota_ijazah', 'foto', 'email'], 'safe'],
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
        $query = SiswaregistrasiModel::find();

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
            'tgl_lahir' => $this->tgl_lahir,
        ]);

        $query->andFilterWhere(['like', 'no_registrasi', $this->no_registrasi])
            ->andFilterWhere(['like', 'nama_siswa', $this->nama_siswa])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'asal_sekolah', $this->asal_sekolah])
            ->andFilterWhere(['like', 'kota_ijazah', $this->kota_ijazah])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
