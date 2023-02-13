<?php
/*
 * Plugin Name:		Campus da Nova
 * Plugin URI:		https://novaigreja.com/locais
 * Description:		Plataforma da Nova Igreja para listar os campus.
 * Version:			1.0
 * Author:			Nova Digital Team
 * Author URI:		https://novaigreja.com
 * License:			GPL-2.0+
 * License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Not called within Wordpress framework
if (!defined('WPINC')) {
    die;
}

/***************
 * global variables
 ***************/

$campusdanova_prefix = 'campusdanova_';
$campusdanova_plugin_name = 'Campus da Nova';


// retrieve our plugin settings from the options table
$campusdanova_options = get_option('campusdanova_settings');


ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '../../logs/error.log');
error_log('Campus da Nova WordPress plugin');

//Localise (Translate into other languages)
load_plugin_textdomain('campusdanova', false, dirname(plugin_basename(__FILE__)) . '/languages/');


/***************
 * includes
 ***************/

/**
 * OUTPUTS DONATION RESULTS SHORTCODE
 */
function campus_da_nova_shortcode()
{
    // Outputs the HTML to replace short code
    ob_start();
    include 'includes/campus-da-nova-lista.php';
    return ob_get_clean();
}

add_shortcode('campus-da-nova', 'campus_da_nova_shortcode');
