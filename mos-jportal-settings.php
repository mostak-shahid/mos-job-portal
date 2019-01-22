<?php
function mos_jportal_options_page() {
	//add_menu_page( 'Mos Job Portal Options', 'Job Portal', 'manage_options', 'mos_jportal_settings', 'mos_jportal_options_page_html' );
	add_submenu_page( 'edit.php?post_type=job', 'Settings', 'Settings', 'manage_options', 'mos_jportal_settings', 'mos_jportal_admin_page' );
}
add_action( 'admin_menu', 'mos_jportal_options_page' );
function mos_jportal_admin_page(){
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	if ( isset( $_GET['settings-updated'] ) ) {
		add_settings_error( 'mos_jportal_messages', 'mos_jportal_message', __( 'Settings Saved', 'mos_jportal' ), 'updated' );
	}
	settings_errors( 'mos_jportal_messages' );
	?>
	<div class="wrap mos-plugin-wrapper">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
		<?php
		// settings_fields( 'mos_jportal' );
		// do_settings_sections( 'mos_jportal' );
		submit_button( 'Save Settings' );
		?>
		</form>
	</div>
	<?php
}