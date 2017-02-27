<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NilaiModel;

/**
 * NilaiSearch represents the model behind the search form about `app\models\NilaiModel`.
 */
class NilaiSearch extends NilaiModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_mapel', 'nis'], 'safe'],
            [['nilai_tugas', 'nilai_uts', 'nilai_uas', 'nilai_akhir'], 'number'],
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
        $query = NilaiModel::find();

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
            'nilai_tugas' => $this->nilai_tugas,
            'nilai_uts' => $this->nilai_uts,
            'nilai_uas' => $this->nilai_uas,
            'nilai_akhir' => $this->nilai_akhir,
        ]);

        $query->andFilterWhere(['like', 'kode_mapel', $this->kode_mapel])
            ->andFilterWhere(['like', 'nis', $this->nis]);

        return $dataProvider;
    }
}
