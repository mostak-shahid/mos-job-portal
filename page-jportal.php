<?php
if (!is_user_logged_in()) {
	wp_redirect( home_url() );
	exit;
} else {
	$user_id =  get_current_user_id();
	$user_meta = get_userdata($user_id);
	$user_roles = $user_meta->roles;
	//var_dump($user_roles[0]);
}
require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'header-jportal.php' );
$page_slug = ($_GET['page']) ? $_GET['page'] : 'welcome';
?>

				<div class="page-content <?php echo $page_slug ?>-content jportal-<?php echo $page_slug ?>">
					<div class="row">
						<div class="col-md-3">
							<?php do_action( 'jportal_sidebar', $page_slug ); ?>
						</div>
						<div class="col-md-9">
							<?php do_action( 'jportal_content', $page_slug ); ?>
						</div>
					</div>
				</div>

<?php require_once ( plugin_dir_path( MOS_JPORTAL_FILE ) . 'footer-jportal.php' ); ?>