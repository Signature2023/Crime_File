<?php
require('header.php');
$sql = "SELECT * FROM ward_reg WHERE email = '$email'";
echo $sql;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);

	$fname = $row['fname']; 
	$ward_no = $row['ward_no'];
	$ward_name = $row['ward_name'];
	$gender = $row['gender'];  
	$place = $row['place'];
}
?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="title">
							<h4>blank</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">blank</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
						<div class="profile-photo">
							<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
							<img src="vendors/images/photo1.jpg" alt="" class="avatar-photo">
							<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body pd-5">
											<div class="img-container">
												<img id="image" src="vendors/images/photo2.jpg" alt="Picture">
											</div>
										</div>
										<div class="modal-footer">
											<input type="submit" value="Update" class="btn btn-primary">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<h5 class="text-center h5 mb-0"><?php echo $fname ?></h5>
						<p class="text-center text-muted font-14">Lorem ipsum dolor sit amet</p>
						<div class="profile-info">
							<h5 class="mb-20 h5 text-blue">Contact Information</h5>
							<ul>
								<li>
									<span>Email Address:</span>
									<?php echo $email ?>
								</li>
								<li>
									<span>Ward Name:</span>
									<?php echo $ward_name ?>
								</li>
								<li>
									<span>Place:</span>
									<?php echo $place ?>
								</li>

							</ul>
						</div>

					</div>
				</div>
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
										<form action="php/ward_update.php" method="POST">
											<ul class="profile-edit-list row">
												<li class="weight-500 col-md-12">
													<div class="form-group">
														<label>Full Name</label>
														<input class="form-control form-control-lg" type="text" name="fname" value="<?php echo $fname ?>">
													</div>
													<div class="form-group">
														<label>Ward Number</label>
														<input class="form-control form-control-lg date-picker" type="text" name="ward_no" value="<?php echo $ward_no ?>">
													</div>
													<div class="form-group">
														<label>Ward Name</label>
														<input class="form-control form-control-lg date-picker" type="text" name="ward_name" value="<?php echo $ward_name ?>">
													</div>
													<div class="form-group">
														<label>Gender</label>
														<select name="gender" id="gender" class="custom-control custom-select mb-5 mr-20">
															<option selected disabled>Select Gender</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
														</select>
													</div>
													<!-- <div class="form-group">
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
														<label>Email</label>
														<input class="form-control form-control-lg" type="email" name="email" disabled value="<?php echo $email ?>">
													</div>
													<div class="form-group">
														<label>Place</label>
														<input class="form-control form-control-lg" type="text" name="place" value="<?php echo $place ?>">
													</div>

													<div class="form-group mb-0">
														<input type="submit" name="ward_update" class="btn btn-primary" value="Update Information">
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

		<script>
			$(document).ready(function() {

				document.getElementById("gender").value="<?php echo $gender; ?>";

				// var rbtn = document.getElementsByName('gender');

				// for (var i = 0; i < rbtn.length; i++) {
				// 	if (rbtn[i].value == "<?php echo $gender; ?>") {
				// 		rbtn[i].checked = true;
				// 		break;
				// 	}
				// }
			});
		</script>