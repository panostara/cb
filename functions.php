<?php


function cssstyle(){

		wp_enqueue_style('firstadd', 'wp-content/themes/TrainingGrounds/css/general.css');
}
add_action( 'wp_enqueue_script', 'cssstyle' );

function jsstyle(){
		wp_enqueue_script('secondadd', 'wp-content/themes/TrainingGrounds/js/jquerymin.js');

}

