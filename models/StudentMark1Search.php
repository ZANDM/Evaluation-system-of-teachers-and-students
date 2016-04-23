<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StudentMark1;

/**
 * StudentMark1Search represents the model behind the search form about `app\models\StudentMark1`.
 */
class StudentMark1Search extends StudentMark1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sno'], 'safe'],
            [['zt', 'jxhj', 'zshj', 'yshj'], 'integer'],
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
        $query = StudentMark1::find();

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
            'zt' => $this->zt,
            'jxhj' => $this->jxhj,
            'zshj' => $this->zshj,
            'yshj' => $this->yshj,
        ]);

        $query->andFilterWhere(['like', 'Sno', $this->Sno]);

        return $dataProvider;
    }
}
