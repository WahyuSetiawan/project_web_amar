<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PengajarModel;

/**
 * PengajarSearch represents the model behind the search form about `app\models\PengajarModel`.
 */
class PengajarSearch extends PengajarModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pengajar', 'nip', 'kode_mapel'], 'safe'],
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
        $query = PengajarModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'id_pengajar', $this->id_pengajar])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'kode_mapel', $this->kode_mapel]);

        return $dataProvider;
    }
}
