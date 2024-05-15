<?php
/*
Plugin Name: CI Percentage decrease calculator
Plugin URI: https://www.calculator.io/percentage-decrease-calculator/
Description: The percentage decrease calculator finds a percentage decrease from the starting value to the final value and identifies whether the change is an increase or a decrease.
Version: 1.0.0
Author: Percentage Decrease Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_percentage_decrease_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Percentage Decrease Calculator by www.calculator.io";

function display_calcio_ci_percentage_decrease_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Percentage Decrease Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_percentage_decrease_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_percentage_decrease_calculator', 'display_calcio_ci_percentage_decrease_calculator' );