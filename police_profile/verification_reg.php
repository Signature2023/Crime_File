<?php
require('header.php');
?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="title">
							<h4>Citizen details</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Details</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
					<div class="card-box height-100-p overflow-hidden">
						<div class="profile-tab height-100-p">
							<div class="tab height-100-p">
								<div class="nav nav-tabs customtab" role="tablist">

									<h4 class="text-blue h5" style="margin:15px;">Edit Your Personal Profile</h4>
								</div>
								<div class="tab-content">


									<!-- Tasks Tab End -->
									<!-- Setting Tab start -->

									<div class="profile-setting">
										<form action="php/police_update.php" method="POST">
											<ul class="profile-edit-list row">
												<li class="weight-500 col-md-12">
													<div class="form-group">
														<label>First Name</label>
														<input class="form-control form-control-lg" type="text" name="fname">
													</div>
													<div class="form-group">
														<label>Last Name</label>
														<input class="form-control form-control-lg" type="text" name="lname">
													</div>

													<div class="form-group">
														<label>Gender</label>
														<select name="gender" id="gender" class="custom-control custom-select mb-5 mr-20">
															<option selected disabled>Select Gender</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
													
<!-- 


													<div class="form-group">
														<label>Gender</label>
														<div class="d-flex">
															<div class="custom-control custom-radio mb-5 mr-20">
																<input type="radio" name="gender" class="custom-control-input" value="Male">
																<label class="custom-control-label weight-400" for="customRadio4">Male</label>
															</div>
															<div class="custom-control custom-radio mb-5">
																<input type="radio" name="gender" class="custom-control-input" value="Female">
																<label class="custom-control-label weight-400" for="customRadio5">Female</label>
															</div>
														</div>
													</div> -->
													<div class="form-group">
														<label>Date of birth</label>
														<input class="form-control form-control-lg date-picker" type="date" name="dob">
													</div>
													<div class="form-group">
														<label>Mobile No</label>
														<input class="form-control form-control-lg date-picker" type="text" name="mobile_no">
													</div>
													<div class="form-group">
														<label>Aadhaar No</label>
														<input class="form-control form-control-lg" type="text" name="aadhaar">
													</div>
													<div class="form-group">
														<label>Pincode</label>
														<input class="form-control form-control-lg" type="text" name="pincode">
													</div>
													<div class="form-group">
														<label>State</label>
														<input class="form-control form-control-lg" type="text" name="state">
													</div>
													<div class="form-group">
														<label>District</label>
														<input class="form-control form-control-lg" type="text" name="district">
													</div>
													<div class="form-group">
														<label>City</label>
														<input class="form-control form-control-lg" type="text" name="city">
													</div>
													<div class="form-group">
														<label>Experience</label>
														<input class="form-control form-control-lg" type="text" name="experience">
													</div>
													<div class="form-group">
														<label>Designation</label>
														<input class="form-control form-control-lg" type="text" name="designation">
													</div>
													<div class="form-group">
														<label>Station Name</label>
														<input class="form-control form-control-lg" type="text" name="station_name">
													</div>
													<div class="form-group">
														<label>Police ID</label>
														<input class="form-control form-control-lg" type="number" name="pid">
													</div>

													<div class="form-group mb-0">
														<input type="submit" name="police_update" class="btn btn-primary" value="Register">
													</div>
												</li>
											</ul>
										</form>
									</div>

									<!-- Setting Tab End -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
 
		<?php
		require('footer.php');
		?>
