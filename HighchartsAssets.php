<?php

namespace letyii\chart;

class HighchartsAssets extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/letyii/yii2-chart/assets/highcharts';
	public $js = [
		'highcharts.js',
		'highcharts-3d.js',
		'modules/exporting.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}