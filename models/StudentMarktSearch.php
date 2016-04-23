<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentMarkt;

/**
 * StudentMarktSearch represents the model behind the search form about `app\models\StudentMarkt`.
 */
class StudentMarktSearch extends StudentMarkt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sno', 'totw', 'ottr', 'Tno'], 'safe'],
            [['ktfc', 'khfd', 'rwml'], 'integer'],
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
        $query = StudentMarkt::find();

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
            'ktfc' => $this->ktfc,
            'khfd' => $this->khfd,
            'rwml' => $this->rwml,
        ]);

        $query->andFilterWhere(['like', 'Sno', $this->Sno])
            ->andFilterWhere(['like', 'totw', $this->totw])
            ->andFilterWhere(['like', 'ottr', $this->ottr])
            ->andFilterWhere(['like', 'Tno', $this->Tno]);

        return $dataProvider;
    }
}
