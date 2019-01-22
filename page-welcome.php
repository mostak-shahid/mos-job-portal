<?php
if (!is_user_logged_in()) {
	wp_redirect( home_url() );
	exit;
} else {
	echo get_current_user_id();
}
require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'header-jportal.php' );
?>


	<div class="container">
		<h1>My First Bootstrap Page</h1>
		<p>This part is inside a .container class.</p> 
		<p>The .container class provides a responsive fixed width container.</p>           
	</div>

<?php require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'footer-jportal.php' ); ?>