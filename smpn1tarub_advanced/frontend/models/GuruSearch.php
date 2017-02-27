<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GuruModel;

/**
 * GuruSearch represents the model behind the search form about `app\models\GuruModel`.
 */
class GuruSearch extends GuruModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nuptk', 'nama_guru', 'tempat_lahir', 'tgl_lahir', 'jk', 'agama', 'foto', 'pend_akhir', 'alamat', 'email', 'telepon'], 'safe'],
            [['level_user'], 'integer'],
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
        $query = GuruModel::find();

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
            'level_user' => $this->level_user,
        ]);

        $query->andFilterWhere(['like', 'nuptk', $this->nuptk])
            ->andFilterWhere(['like', 'nama_guru', $this->nama_guru])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'pend_akhir', $this->pend_akhir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telepon', $this->telepon]);

        return $dataProvider;
    }
}
