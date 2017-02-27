<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrtusiswaModel;

/**
 * OrtusiswaSearch represents the model behind the search form about `app\models\OrtusiswaModel`.
 */
class OrtusiswaSearch extends OrtusiswaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ortu', 'nama_ortu', 'alamat_ortu', 'jk', 'agama', 'pekerjaan', 'Pangkat', 'Intansi', 'alamat_instansi', 'foto', 'email'], 'safe'],
            [['telepon', 'level_user'], 'integer'],
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
        $query = OrtusiswaModel::find();

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
            'telepon' => $this->telepon,
            'level_user' => $this->level_user,
        ]);

        $query->andFilterWhere(['like', 'id_ortu', $this->id_ortu])
            ->andFilterWhere(['like', 'nama_ortu', $this->nama_ortu])
            ->andFilterWhere(['like', 'alamat_ortu', $this->alamat_ortu])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'Pangkat', $this->Pangkat])
            ->andFilterWhere(['like', 'Intansi', $this->Intansi])
            ->andFilterWhere(['like', 'alamat_instansi', $this->alamat_instansi])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
