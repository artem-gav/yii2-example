<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class TestSearch extends Test
{
    public function rules()
    {
        return [
            [['FACILITY', 'STATIONID', 'UUTNAME'], 'safe']
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Test::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        
        $query
            ->andFilterWhere(['FACILITY' => $this->FACILITY])
            ->andFilterWhere(['STATIONID' => $this->STATIONID])
            ->andFilterWhere(['like', 'UUTNAME', $this->UUTNAME])
        ;

        return $dataProvider;
    }
}