<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentMark2;

/**
 * StudentMark2Search represents the model behind the search form about `app\models\StudentMark2`.
 */
class StudentMark2Search extends StudentMark2
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sno', 'jxhjw', 'jxhjr', 'zshjw', 'zshjr', 'yshjw', 'yshjr'], 'safe'],
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
        $query = StudentMark2::find();

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
        $query->andFilterWhere(['like', 'Sno', $this->Sno])
            ->andFilterWhere(['like', 'jxhjw', $this->jxhjw])
            ->andFilterWhere(['like', 'jxhjr', $this->jxhjr])
            ->andFilterWhere(['like', 'zshjw', $this->zshjw])
            ->andFilterWhere(['like', 'zshjr', $this->zshjr])
            ->andFilterWhere(['like', 'yshjw', $this->yshjw])
            ->andFilterWhere(['like', 'yshjr', $this->yshjr]);

        return $dataProvider;
    }
}
