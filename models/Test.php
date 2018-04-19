<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class Test extends ActiveRecord
{
    public static function tableName()
    {
        return 'phostestglobaltest';
    }

    public static function getFacilitiesArray() {
        $facilities = Test::find()->select('id, FACILITY')->groupBy('FACILITY')->all();
        return ArrayHelper::map($facilities, 'FACILITY', 'FACILITY');
    }

    public static function getStatitionsArray() {
        $facilities = Test::find()->select('id, STATIONID')->groupBy('STATIONID')->all();
        return ArrayHelper::map($facilities, 'STATIONID', 'STATIONID');
    }
}