<?php
function computerchill_styles(): void {
	wp_enqueue_style('main_styles', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'computerchill_styles');

show_admin_bar(false);