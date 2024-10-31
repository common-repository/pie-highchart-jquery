<?php
/**
 * Plugin Name: Pie Highchart jQuery
 * Plugin URI: http://wpsoft.com.br
 * Description: Highcharts Action
 * Version: 1.0
 * Author: diegpl, pkelbert
 * Author URI: http://wpsoft.com.br
 * License: GPL2
 */
 

function highChartsAction() {
	
	//echo "<link rel='stylesheet' id='style-css'  href='".plugins_url( 'style.css' , __FILE__ )."' type='text/css' media='all' />";
	
	echo "<script type='text/javascript' src='".plugins_url( 'highcharts.js' , __FILE__ )."'></script>";
	echo "<script type='text/javascript' src='".plugins_url( 'modules/exporting.js' , __FILE__ )."'></script>";
	echo "<script type='text/javascript' src='".plugins_url( 'highcharts-action.js' , __FILE__ )."'></script>";
}

add_action('wp_footer', 'highChartsAction');

//[highchart]
function highchartAction( $atts ){
	return "<div id='container' style='min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto'></div>";
}
add_shortcode( 'highchart', 'highchartAction' )

?>