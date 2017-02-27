<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PostingModel;

/**
 * PostingSearch represents the model behind the search form about `app\models\PostingModel`.
 */
class PostingSearch extends PostingModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_posting', 'id_kategori'], 'integer'],
            [['judul_posting', 'gambar', 'isi_posting'], 'safe'],
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
        $query = PostingModel::find();

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
            'id_posting' => $this->id_posting,
            'id_kategori' => $this->id_kategori,
        ]);

        $query->andFilterWhere(['like', 'judul_posting', $this->judul_posting])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'isi_posting', $this->isi_posting]);

        return $dataProvider;
    }
}
