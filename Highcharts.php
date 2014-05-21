<?php
/**
 * Highcharts v4.0.1
 * Homepage: http://www.highcharts.com/
 * Examples: http://www.highcharts.com/demo
 * 
 * Let Yii2 Highcharts v4.0.1 (Yii Framework 2.0 extention)
 * @copyright Copyright (c) 2014 Let.,ltd
 * @author Ngua Go <nguago@let.vn>
 */

namespace letyii\chart;

use yii\helpers\Html;
use yii\helpers\Json;
use letyii\chart\HighchartsAssets;

class Highcharts extends \yii\widgets\InputWidget {

    public $id = '';
    public $configs = [];

    /**
     * Initializes the widget.
     */
    public function init() {
        HighchartsAssets::register($this->view);
    }

    /**
     * Renders the widget.
     */
    //file:///C:/Users/nguago/Desktop/Highcharts-4.0.1/examples/3d-column-interactive/index.htm
    public function run() {
        $configs = Json::encode($this->configs);

        
        $this->getView()->registerJs('
            var configChart = $.parseJSON(\'' . $configs . '\');
                console.log(configChart);
            $(function () {
                // Set up the chart
                var chart = new Highcharts.Chart(configChart);
                    
                // Activate the sliders
                $("#R0").on("change", function(){
                    chart.options.chart.options3d.alpha = this.value;
                    showValues();
                    chart.redraw(false);
                });
                $("#R1").on("change", function(){
                    chart.options.chart.options3d.beta = this.value;
                    showValues();
                    chart.redraw(false);
                });

                function showValues() {
                    $("#R0-value").html(chart.options.chart.options3d.alpha);
                    $("#R1-value").html(chart.options.chart.options3d.beta);
                }
                showValues();
            });
        ');
        echo '
            <div id="container"></div><div id="sliders">
	<table>
		<tr><td>Alpha Angle</td><td><input id="R0" type="range" min="0" max="45" value="15"/> <span id="R0-value" class="value"></span></td></tr>
	    <tr><td>Beta Angle</td><td><input id="R1" type="range" min="0" max="45" value="15"/> <span id="R1-value" class="value"></span></td></tr>
	</table>
        </div>';
    }

}
