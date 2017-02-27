<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StrukturorgModel;

/**
 * StrukturOrgSearch represents the model behind the search form about `app\models\StrukturOrgModel`.
 */
class StrukturorgSearch extends StrukturorgModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_strukturor', 'nama'], 'integer'],
            [['jabatan'], 'safe'],
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
        $query = StrukturOrgModel::find();

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
            'id_strukturor' => $this->id_strukturor,
            'nama' => $this->nama,
        ]);

        $query->andFilterWhere(['like', 'jabatan', $this->jabatan]);

        return $dataProvider;
    }
}
