<?php

namespace letyii\chart;

class HighchartsAssets extends \yii\web\AssetBundle
{
	public $sourcePath = '@app/widgets/chart/assets/highcharts';
//	public $sourcePath = '@vendor/letyii/yii2-tinymce';
	public $js = [
		'highcharts.js',
		'highcharts-3d.js',
		'modules/exporting.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}