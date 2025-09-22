<?php
/*
Plugin Name: My First Plugin
Description: A simple plugin to learn WordPress development.
Version: 1.0
Author: Your Namey
*/
function my_first_plugin_footer_message()
{
    echo '<p style="text-align: center;">Hello from My First Plugin!</p>';
}
add_action('wp_footer', 'my_first_plugin_footer_message');

function my_first_shortcode()
{
    return '<p style="color: purple;"><p>This is my first shortcode!</p>';
}
add_shortcode('my_hello', 'my_first_shortcode');

function my_first_plugin_admin_notice()
{echo '
Plugin Learning Rocks!
';}add_action('admin_notices', 'my_first_plugin_admin_notice');
