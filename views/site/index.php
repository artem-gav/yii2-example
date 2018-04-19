<?php

use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                [
                    'label' => 'Facility',
                    'attribute' => 'FACILITY',
                    'filter'=> $facilities
                ],
                [
                        'label' => 'Station ID',
                    'attribute' => 'STATIONID',
                    'filter' => $stations
                ],
                [
                        'label' => 'UUT Name',
                    'attribute' => 'UUTNAME'
                ],
                'PARTNUMBER:ntext',
                'SERIALNUMBER:ntext',
                'TESTDATE:datetime',
                'TIMESTART:ntext',
                'TIMESTOP:ntext',
                'UUTPLACE:ntext',
                'GLOBALRESULT:ntext',
                'TESTMODE:ntext',
            ],
        ]); ?>

    </div>
</div>
