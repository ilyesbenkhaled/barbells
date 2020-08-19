<?php
/*
Plugin Name: SweetAlert2 add-on for CF7
Description: Add SweetAlert2 script in Contact Form 7 submission process.
Version: 0.3.1
Author: Armin Toepper, Antoine Derrien
Author URI: 
*/

function load_swal_cf7_wp_admin_style() {
        wp_register_style( 'swal_cf7_wp_admin_css', plugin_dir_url( __FILE__ ) . '/css/admin.css', false, '1.0.0' );
        wp_enqueue_style( 'swal_cf7_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_swal_cf7_wp_admin_style' );


// Call swal_cf7_duration_menu function to load plugin menu in dashboard
add_action( 'admin_menu', 'swal_cf7_duration_menu' );

// Create WordPress admin menu
if( !function_exists("swal_cf7_duration_menu") )
{
function swal_cf7_duration_menu(){

  $page_title = 'CF7 SweetAlert2';
  $menu_title = 'SwAl2 CF7';
  $capability = 'manage_options';
  $menu_slug  = 'swal-cf7-info';
  $function   = 'swal_cf7_settings_page';
  $icon_url   = 'dashicons-testimonial';
  $position   = 30;

  add_menu_page( $page_title,
                 $menu_title,
                 $capability,
                 $menu_slug,
                 $function,
                 $icon_url,
                 $position );

  // Call update_swal_cf7_duration function to update database
  add_action( 'admin_init', 'update_swal_cf7_duration' );

}
}

// Create function to register plugin settings in the database
if( !function_exists("update_swal_cf7_duration") )
{
function update_swal_cf7_duration() {
  register_setting( 'swal-cf7-info-settings', 'swal_cf7_duration_success' );
  register_setting( 'swal-cf7-info-settings', 'swal_cf7_duration_error' );
  register_setting( 'swal-cf7-info-settings', 'swal_cf7_title_success' );
  register_setting( 'swal-cf7-info-settings', 'swal_cf7_title_error' );
}
}

// Create WordPress plugin page
if( !function_exists("swal_cf7_settings_page") )
{
function swal_cf7_settings_page(){
?>
<div class="swal-cf7__container">
  <h2>SweetAlert2 for CF7 | Settings</h2>
  <form method="post" action="options.php">
    <?php settings_fields( 'swal-cf7-info-settings' ); ?>
    <?php do_settings_sections( 'swal-cf7-info-settings' ); ?>
	  <h4>Success Alert</h4>
      <p>Timer (default is 3000) <input type="text" name="swal_cf7_duration_success" value="<?php echo get_option('swal_cf7_duration_success'); ?>"/> ms</p>
	  <p>Title (default none) : <input type="text" name="swal_cf7_title_success" value="<?php echo get_option('swal_cf7_title_success'); ?>"/></p>
	  <hr />
	  <h4>Success Alert</h4>
      <p>Timer (default is 3000) <input type="text" name="swal_cf7_duration_error" value="<?php echo get_option('swal_cf7_duration_error'); ?>"/> ms</p>
	  <p>Title (default none) : <input type="text" name="swal_cf7_title_error" value="<?php echo get_option('swal_cf7_title_error'); ?>"/></p>
  <?php submit_button(); ?>
  </form>
  <sidebar>
	<p>This plugin adds the <a href="https://sweetalert2.github.io" target="_blank">SweetAlert2</a> script into Contact Form 7 wordpress plugin submission process.</p>
	<p>This plugin requires the <a href="https://wordpress.org/plugins/contact-form-7/" target="_blank">Contact Form 7</a> plugin to work.</p>
	<p>Just activate it to replace CF7 default submission output by a SweetAlert2 pop up. The add-on will display the Contact Form 7 messages in the pop up.</p>
	<p>You also can customize duration and title of success/error alert.</p>
	<a class="button button-primary" href="https://wordpress.org/support/plugin/cf7-sweetalert/reviews/#new-post" target="_blank">Rate this plugin</a>
  </sidebar>
</div>
<?php
}
}

require 'includes/functions.php'; /* customs scripts */

?>
