<?php


namespace sefamertgungor\tasks\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use sefamertgungor\tasks\models\Deletetasks;


class DeletetasksSearch extends Deletetasks
{

    public function search($params)
    {
        $query = Deletetasks::find();

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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $query->andFilterWhere(['like', 'task', $this->task])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }

}
