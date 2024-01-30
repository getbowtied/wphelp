<?php

function wphelpkit_dashboard_pages_styles_and_scripts() {   	

	// Styles
	//wp_enqueue_style('wphelpkit-pages', dirname( __FILE__ ) . '/inc/admin/dashboard/css/pages.css', false, wphelpkit_version(), 'all');

	
	// Scripts 
	//wp_enqueue_script('wphelpkit-pages', dirname( __FILE__ ) . '/inc/admin/dashboard/js/pages.js', array('jquery'), wphelpkit_version(), TRUE);
}
add_action( 'admin_enqueue_scripts', 'wphelpkit_dashboard_pages_styles_and_scripts' );



function wphelpkit_pages()
{

	global $menu;
	
	//$menu[55.3] = array('', 'read', 'separator-wphelpkit', '', 'wp-menu-separator wphelpkit-menu-separator');
	
	add_menu_page('WP HelpKit', 'WP HelpKit', 'manage_options', 'wphelpkit', 'wphelpkit_content', 'dashicons-editor-help', 9999 );
    
    //add_submenu_page('wphelpkit', 'WP HelpKit', 'Home', 'manage_options', 'wphelpkit' );

    //add_submenu_page('wphelpkit', 'WP HelpKit Help', 'Help', 'manage_options', 'wphelpkit-help', 'wphelpkit_content_help' );
}
add_action('admin_menu', 'wphelpkit_pages');




function wphelpkit_content()
{
?>

	<div class="wrap">
		
		<h1 class="wp-heading-inline">WP HelpKit</h1>

		<p>
			WP HelpKit is your trusted companion for resolving WordPress-related challenges effortlessly. Whether you're facing issues with WordPress itself, themes, or plugins, our expert team is at your service. With WP HelpKit, you gain access to professional assistance and guidance, ensuring your WordPress journey is smooth and stress-free. Say goodbye to frustrating technical hurdles and hello to a seamless WordPress experience. Get the help you need, when you need it, with WP HelpKit.
		</p>

		<p><a href="https://getbowtied.com/support/" target="_blank" class="button button-primary button-large">Get expert assistance</a></p>

	</div>

<?php
}

/*function wphelpkit_content_help()
{
?>

	<div class="wrap">

	
	</div>

<?php
}*/