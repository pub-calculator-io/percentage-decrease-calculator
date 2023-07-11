<?php
/*
Plugin Name: Percentage Decrease Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/percentage-decrease-calculator/
Description: The percentage decrease calculator finds a percentage decrease from the starting value to the final value and identifies whether the change is an increase or a decrease.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_percentage_decrease_calculator
*/

if (!function_exists('add_shortcode')) return "No direct call for Percentage Decrease Calculator by Calculator.iO";

function display_ci_percentage_decrease_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/percentage-decrease-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Percentage Decrease Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_percentage_decrease_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_percentage_decrease_calculator', 'display_ci_percentage_decrease_calculator' );