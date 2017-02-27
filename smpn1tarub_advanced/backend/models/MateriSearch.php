<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MateriModel;

/**
 * MateriSearch represents the model behind the search form about `app\models\MateriModel`.
 */
class MateriSearch extends MateriModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_materi'], 'integer'],
            [['nama_file', 'tgl_unggah', 'deskripsi', 'tipe_file', 'file', 'nip'], 'safe'],
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
        $query = MateriModel::find();

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
            'id_materi' => $this->id_materi,
            'tgl_unggah' => $this->tgl_unggah,
        ]);

        $query->andFilterWhere(['like', 'nama_file', $this->nama_file])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'tipe_file', $this->tipe_file])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
