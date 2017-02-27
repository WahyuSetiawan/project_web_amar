<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GalerifotoModel;

/**
 * GaleriFotoSearch represents the model behind the search form about `app\models\GaleriFotoModel`.
 */
class GalerifotoSearch extends GalerifotoModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_galeri', 'id_kategori'], 'integer'],
            [['judul_foto', 'foto', 'deskripsi'], 'safe'],
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
        $query = GaleriFotoModel::find();

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
            'id_galeri' => $this->id_galeri,
            'id_kategori' => $this->id_kategori,
        ]);

        $query->andFilterWhere(['like', 'judul_foto', $this->judul_foto])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
