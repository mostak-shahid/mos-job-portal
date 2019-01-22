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
									<ul class="list-inline">
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
				<a href="#" class="list-group-item list-group-item-action">Edit Resume</a>
				<a href="#" class="list-group-item list-group-item-action">Update Resume</a>
				<a href="#" class="list-group-item list-group-item-action">Email Resume</a>
			</div>
		</nav>	
		<?php
	}
}
add_action('jportal_content', 'bd_jobs_content', 10, 1 );
if (!function_exists('bd_jobs_content')) {
	function bd_jobs_content($args) {
		if ( $args == 'welcome') :
		?>
		<div class="card">
			<div class="card-header bg-secondary text-white">Header</div>
			<div class="card-body">Content</div> 
		</div>	
		<?php
		endif;
	}
}