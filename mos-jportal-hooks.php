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
				<a href="<?php echo home_url( '/job-portal/' ) ?>" class="list-group-item list-group-item-action">Home</a>
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
					<div class="<?php echo $args ?>-text">
						<div class="wrapper-info bg-info text-white"> 	
							<h4>Welcome to your Mybdjobs account!</h4>
							<p>Here you can check your detailed states like Companies viewed my Resume, Online Application, Emailed Resume, Shortlisted Jobs etc. Beside My Stats in Edit Resume option you can find all features at a glance to add/update.</p>
						</div>
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
						<div class="wrapper-info bg-info text-white">
							<p>Here you can edit your resume in five different steps (Personal, Education/ Training, Employment, Other Information and Photograph). To enrich your resume provide authentic information.</p>
						</div>
						<div class="form-tabs">
							<div class="row">
								<div class="col personal-tab active">
									<a href="#" class="wrapper">
										<i class="fa fa-user"></i>
										<span>Personal</span>								
									</a>	
								</div>
								<div class="col education-tab">
									<a href="#" class="wrapper">
										<i class="fa fa-graduation-cap"></i>
										<span>Education/Training</span>								
									</a>	
								</div>
								<div class="col employment-tab">
									<a href="#" class="wrapper">
										<i class="fa fa-briefcase"></i>
										<span>Employment</span>								
									</a>	
								</div>
								<div class="col employment-tab">
									<a href="#" class="wrapper">
										<i class="fa fa-list-ul"></i>
										<span>Other Information</span>								
									</a>	
								</div>
								<div class="col employment-tab">
									<a href="#" class="wrapper">
										<i class="fa fa-camera-retro"></i>
										<span>Photograph</span>								
									</a>	
								</div>
							</div>
						</div>
						<form method="POST" action="">
							<div id="personal-tab-accordion" class="accordion">
								<div class="card">
									<div class="card-header" id="headingOne">
										<h5 class="mb-0">
											<a href="javascript:void(0)" class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Personal Details 
											</a>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#personal-tab-accordion">
										<div class="card-body">
											<div class="edit-btn-wrapper text-right"><button class="btn btn-light btn-sm"><i class="fa fa-edit"></i> Edit</button></div>
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
													<div class="form-group">
														<label class="control-label" for="last_name">Father's Name</label>
														<input type="text" class="form-control" id="father_name" name="father_name" placeholder="Father's Name">
													</div>
													<div class="form-group">
														<label class="control-label" for="last_name">Mother's Name</label>
														<input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Mother's Name">
													</div>
													<div class="form-group">
														<label class="control-label" for="last_name">Date of Birth</label>
														<input type="date" class="form-control" id="dob" name="last_name" placeholder="Date of Birth ">
													</div>													
													<div class="form-group">
														<label for="gender">Gender</label>
														<select class="form-control" id="gender" name="gender">
															<option value=''>Select</option>
															<option>Male</option>
															<option>Female</option>
															<option>Others</option>
														</select>
													</div>		
													<div class="form-group">
														<label class="control-label" for="last_name">Religion</label>
														<input type="text" class="form-control" id="religion" name="religion" placeholder="Religion">
													</div>									
													<div class="form-group">
														<label for="marital">Marital Status</label>
														<select class="form-control" id="marital" name="marital">
			                                                <option value="">Select</option>
			                                                <option>Unmarried</option>
			                                                <option> Married </option>
			                                                <option> Single </option>
														</select>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label class="control-label" for="nationality">Nationality</label>
														<input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
													</div>
													<div class="form-group">
														<label class="control-label" for="nid">National Id No</label>
														<input type="text" class="form-control" id="nid" name="nid" placeholder="National Id No">
													</div>
													<div class="form-group">
														<label class="control-label" for="passport">Passport No</label>
														<input type="text" class="form-control" id="passport" name="passport" placeholder="Passport No">
													</div>
													<div class="form-group">
														<label class="control-label" for="phone">Phone</label>
														<input type="tel" class="form-control-plaintext" id="phone" name="phone" placeholder="Phone" value="+8801234567890"  readonly>
													</div>
													<div class="form-group">
														<label class="control-label" for="phone-2">Alternate Phone</label>
														<input type="tel" class="form-control" id="phone-2" name="phone-2" placeholder="Alternate Phone">
													</div>
													<div class="form-group">
														<label class="control-label" for="email">Email</label>
														<input type="email" class="form-control-plaintext" id="email" name="email" placeholder="Email" value="example@abc.com" readonly>
													</div>
													<div class="form-group">
														<label class="control-label" for="email-2">Alternate Email</label>
														<input type="email" class="form-control" id="email-2" name="email-2" placeholder="Alternate Email">
													</div>
													<!-- <div class="form-group has-error has-feedback">
														<label class="control-label" for="email">Email</label>
														<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
														<span class="fa fa-remove form-control-feedback"></span>
													</div>
													<div class="form-group">
														<label class="control-label" for="email">Email</label>
														<input type="email" class="form-control  is-invalid" id="email" name="email" placeholder="Email" required>
														<div class="invalid-feedback">Please provide a valid city.</div>
													</div>
													<div class="form-group">
														<label class="control-label" for="email">Email</label>
														<input type="email" class="form-control  is-valid" id="email" name="email" placeholder="Email" required>
														<div class="invalid-feedback">Please provide a valid city.</div>
													</div> -->							
												</div>
											</div>
											<button  type="submit" class="btn btn-primary">Save</button>
											<button type="button" class="btn btn-dark">Close</button>
											<input type="hidden" name="jportal_profile_edit" value="<?php echo wp_create_nonce('jportal-profile-edit-nonce'); ?>"/>	
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Collapsible Group Item #2
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#personal-tab-accordion">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Collapsible Group Item #3
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#personal-tab-accordion">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
							</div>	

						</form>					
					</div>
				</div> 
			</div>	
			<?php
		endif;
	}
}