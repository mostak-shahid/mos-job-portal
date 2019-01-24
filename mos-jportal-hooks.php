<?php
add_action( 'jportal_header', 'bd_jobs_header', 10, 1 );
if (!function_exists('bd_jobs_header')) {
	function bd_jobs_header() {
		?>
		<div class="top-header"></div>
		<div class="mid-header bg-dark text-white">
			<div class="container">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-lg-6">
							<div class="dib">
								<div class="text-left">
									<ul class="list-inline mb0">
										<li class="list-inline-item"><a href="http://jobs.bdjobs.com/jobsearch.asp" class="jobs" target="_blank">Jobs</a></li>
										<li class="list-inline-item"><a href="javascript:void();" class="mybdjobs active">My Bdjobs</a></li>
										<li class="list-inline-item"><a href="http://bdjobs.com/m_d_l/" class="training" target="_blank">Training</a></li>
										<li class="list-inline-item"><a href="http://corporate3.bdjobs.com/" class="corporate" target="_blank">Employers</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="dib">
								<div class="text-right">
									Social Menu
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bot-header">
			<div class="container">
				<div class="content-wrapper">
					menu
				</div>
			</div>            
		</div>
		<?php
	}
}
add_action('jportal_sidebar', 'bd_jobs_sidebar', 10, 1 );
if (!function_exists('bd_jobs_sidebar')) {
	function bd_jobs_sidebar($args) {
		?>
		<nav class="side-menu">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action">Home</a>
			</div>
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action">View Resume</a>
				<a href="<?php echo home_url( '/job-portal/?page=edit-profile' ) ?>" class="list-group-item list-group-item-action">Edit Resume</a>
				<a href="#" class="list-group-item list-group-item-action">Update Resume</a>
				<a href="#" class="list-group-item list-group-item-action">Email Resume</a>
			</div>
		</nav>	
		<?php
	}
}
add_action('jportal_content', 'jportal_welcome_content', 10, 1 );
if (!function_exists('jportal_welcome_content')) {
	function jportal_welcome_content($args) {
		if ( $args == 'welcome') :
		?>
		<div class="card">
			<div class="card-header bg-secondary text-white <?php echo $args ?>-header">My Stats</div>
			<div class="card-body">
				<div class="bg-info text-white <?php echo $args ?>-text">
					<h4>Welcome to your Mybdjobs account!</h4>
					<p>Here you can check your detailed states like Companies viewed my Resume, Online Application, Emailed Resume, Shortlisted Jobs etc. Beside My Stats in Edit Resume option you can find all features at a glance to add/update.</p>
				</div>
			</div> 
		</div>	
		<?php
		endif;
	}
}
add_action('jportal_content', 'jportal_edit_profile_content', 10, 1 );
if (!function_exists('jportal_edit_profile_content')) {
	function jportal_edit_profile_content($args) {
		if ( $args == 'edit-profile') :
			global $form_err;
		?>
		<div class="card">
			<div class="card-header bg-secondary text-white <?php echo $args ?>-header">Edit Profile</div>
			<div class="card-body">
				<div class="<?php echo $args ?>-text">
					<form method="POST" action="">	
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="control-label" for="first_name">First Name</label>
								<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="last_name">Last Name</label>
								<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
							</div>
							<div class="form-group has-error has-feedback">
								<label class="control-label" for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
								<span class="fa fa-remove form-control-feedback"></span>
							</div>							
						</div>
					</div>						
						<button  type="submit" class="btn btn-primary">Submit</button>
						<input type="hidden" name="jportal_profile_edit" value="<?php echo wp_create_nonce('jportal-profile-edit-nonce'); ?>"/>
					</form>					
				</div>
			</div> 
		</div>	
		<?php
		endif;
	}
}