yii2-chart
==========

~~~php
echo letyii\chart\Highcharts::widget([
    'configs' => [
        'chart' => [
            'renderTo' => 'container',
            'type' => 'column',
            'margin' => 75,
            'options3d' => [
                'enabled' => TRUE,
                'alpha' => 15,
                'beta' => 15,
                'depth' => 50,
                'viewDistance' => 25,
            ],
        ],
        'title' =>  [
            'text' => 'Chart rotation demo',
        ],
        'subtitle' => [
            'text' => 'Test options by dragging the sliders below',
        ],
        'plotOptions' => [
            'column' => [
                'depth' => 25,
            ],
        ],
        'series' => [
            ['data' => [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]]
        ],
    ]
]);
~~~