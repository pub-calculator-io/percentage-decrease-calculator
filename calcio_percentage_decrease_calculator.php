<?php
/*
Plugin Name: Percentage Decrease Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/percentage-decrease-calculator/
Description: Discover the exact percentage drop between two numbers using our free Percentage Decrease Calculator. Instantly calculate reductions, discounts, and price drops.
Version: 1.0.0
Author: www.calculator.io / Percentage Decrease Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_percentage_decrease_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Percentage Decrease Calculator by www.calculator.io";

function calcio_percentage_decrease_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Percentage Decrease Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_percentage_decrease_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_percentage_decrease_calculator', 'calcio_percentage_decrease_calculator_shortcode' );