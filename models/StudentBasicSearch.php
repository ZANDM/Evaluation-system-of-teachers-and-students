<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentBasic;

/**
 * StudentBasicSearch represents the model behind the search form about `app\models\StudentBasic`.
 */
class StudentBasicSearch extends StudentBasic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Sno', 'Sname', 'Ssex', 'Sdept', 'Sclass'], 'safe'],
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
        $query = StudentBasic::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'Sno', $this->Sno])
            ->andFilterWhere(['like', 'Sname', $this->Sname])
            ->andFilterWhere(['like', 'Ssex', $this->Ssex])
            ->andFilterWhere(['like', 'Sdept', $this->Sdept])
            ->andFilterWhere(['like', 'Sclass', $this->Sclass]);

        return $dataProvider;
    }
}
