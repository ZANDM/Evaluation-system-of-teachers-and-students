<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentCourse;

/**
 * StudentCourseSearch represents the model behind the search form about `app\models\StudentCourse`.
 */
class StudentCourseSearch extends StudentCourse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cno', 'Cname', 'Tname', 'Tno', 'Sno'], 'safe'],
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
        $query = StudentCourse::find();

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
        $query->andFilterWhere(['like', 'Cno', $this->Cno])
            ->andFilterWhere(['like', 'Cname', $this->Cname])
            ->andFilterWhere(['like', 'Tname', $this->Tname])
            ->andFilterWhere(['like', 'Tno', $this->Tno])
            ->andFilterWhere(['like', 'Sno', $this->Sno]);

        return $dataProvider;
    }
}
