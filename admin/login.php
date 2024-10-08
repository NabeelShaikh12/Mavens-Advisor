<?php
$error = isset($_GET['error']) ? $_GET['error'] : '';
$message = isset($_GET['message']) ? $_GET['message'] : '';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:image" content="https:/yashadmin.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<title>Login</title>
	<link rel="shortcut icon" type="image/png" href="../img/MA Logo circle.png">
	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./css/style.css" rel="stylesheet">
	<script src="https://www.google.com/recaptcha/api.js" async defer> </script>
</head>

<body class="vh-100">
	<div class="page-wraper">
		<div class="browse-job login-style3">
			<div class="bg-img-fix overflow-hidden" style="background:#fff url(images/background/bg6.jpg); height: 100vh;">
				<div class="row gx-0">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 vh-100 bg-white ">
						<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 653px;" tabindex="0">
							<div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
								<div class="login-form style-2">
									<div class="card-body">
										<a href="../" style="color: black;" class="m-2"><i class="fa fa-arrow-left"></i> Back</a>
										<div class="logo-header">
											<a href="index.php" class="logo"><img src="../img/MA Logo circle.png" height="150px" width="150px" alt="" class="width-230 light-logo"></a>
											<a href="index.php" class="logo"><img src="../img/MA Logo circle.png" height="150px" width="150px" alt="" class="width-230 dark-logo"></a>
										</div>
										<nav>
											<div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">
												<div class="tab-content w-100" id="nav-tabContent">
													<div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
														<form method="POST" action="../database_operation/login_process.php" class="dz-form pb-3">
															<h3 class="form-title m-t0">Personal Information</h3>
															<div class="dz-separator-outer m-b5">
																<div class="dz-separator bg-primary style-liner"></div>
															</div>
															<p>Enter your e-mail address and your password.</p>
															<div class="form-group mb-3">
																<input type="email" name="email" class="form-control" required placeholder="hello@example.com">
															</div>
															<div class="form-group mb-3">
																<input type="password" name="password" class="form-control" required placeholder="Password">
															</div>
															<div class="form-group text-left mb-5 forget-main">
																<input type="submit" class="btn btn-primary" style="background-color:#019dff;border:none" name="login" value="Sign Me In">
																<span class="form-check d-inline-block">
																	<input type="checkbox" class="form-check-input" id="check1" name="example1">
																	<label class="form-check-label" for="check1">Remember me</label>
																</span>
																<br>
																<br>
																<br>
																<div class="g-recaptcha" data-sitekey="6Lft5qMpAAAAAKRdw5GXssVzFGo8Nl_kDS0ild-B">
																</div>
															</div>
														</form>
														<div class="text-center bottom">
															<button class="btn btn-primary button-md btn-block" style="background-color:#019dff;border:none" id="nav-sign-tab" data-bs-toggle="tab" data-bs-target="#nav-sign" type="button" role="tab" aria-controls="nav-sign" aria-selected="false">Create an account</button>
														</div>
													</div>
													<div class="tab-pane fade" id="nav-forget" role="tabpanel" aria-labelledby="nav-forget-tab">
														<form class="dz-form">
															<div class="dz-separator-outer m-b5">
																<div class="dz-separator bg-primary style-liner"></div>
															</div>
															<p>Enter your e-mail address below to reset your password. </p>
															<div class="form-group mb-4">
																<input name="dzName" required="" class="form-control" placeholder="Email Address" type="text">
															</div>
															<div class="form-group clearfix text-left">
																<button class=" active btn btn-primary" id="nav-personal-tab" data-bs-toggle="tab" data-bs-target="#nav-personal" type="button" role="tab" aria-controls="nav-personal" aria-selected="true">Back</button>
																<button class="btn btn-primary float-end">Submit</button>
															</div>
														</form>
													</div>
													<div class="tab-pane fade" id="nav-sign" role="tabpanel" aria-labelledby="nav-sign-tab">
														<form class="dz-form py-2" action="./admin_process.php" method="POST">
															<h3 class="form-title">Sign Up</h3>
															<div class="dz-separator-outer m-b5">
																<div class="dz-separator bg-primary style-liner"></div>
															</div>
															<p>Enter your personal details below: </p>
															<div class="form-group mt-3">
																<input name="email" required="" class="form-control" placeholder="Email Address" type="email">
															</div>
															<div class="form-group mt-3">
																<input name="username" required="" class="form-control" placeholder="User Name" type="text">
															</div>
															<div class="form-group mt-3">
																<input name="password" required="" class="form-control" placeholder="Password" type="password">
															</div>
															<div class="form-group mt-3 mb-3">
																<input name="confirmpassword" required="" class="form-control" placeholder="Re-type Your Password" type="password">
															</div>
															<div class="mb-3">
																<span class="form-check float-start me-2 ">
																	<input type="checkbox" class="form-check-input" id="check2" name="example1">
																	<label class="form-check-label d-unset" for="check2">I agree to the</label>
																</span>
																<label><a href="#">Terms of Service </a>&amp; <a href="#">Privacy Policy</a></label>
															</div>
															<div class="form-group clearfix text-left">
																<button class="btn btn-primary outline gray" data-bs-toggle="tab" style="background-color:#019dff;border:none" data-bs-target="#nav-personal" type="button" role="tab" aria-controls="nav-personal" aria-selected="true">Back</button>
																<button class="btn btn-primary float-end" style="background-color:#019dff;border:none" type="submit">Submit</button>
															</div>
														</form>
													</div>
												</div>
												<?php
												if (isset($_SESSION['error_message'])) {
													$error_message = strtoupper($_SESSION['error_message']);
													echo "<p style='color:red; font-family:Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif'>$error_message</p>";
													unset($_SESSION['error_message']);
												}
												if (isset($_SESSION['message'])) {
													$message = strtoupper($_SESSION['error_message']);
													echo "<p style='color:red; font-family:Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif'>$message</p>";
													unset($_SESSION['message']);
												}
												?>
											</div>
										</nav>
									</div>
									<div class="card-footer">
										<div class=" bottom-footer clearfix m-t10 m-b20 row text-center">
											<div class="col-lg-12 text-center">
												<span> © Copyright by
													<a href="javascript:void(0);">Mavens Advisor </a> All rights reserved.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
								<div class="mCSB_draggerContainer">
									<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; display: block; height: 652px; max-height: 643px; top: 0px;">
										<div class="mCSB_dragger_bar" style="line-height: 0px;"></div>
										<div class="mCSB_draggerRail"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="./js/custom.js"></script>
	<script src="./js/demo.js"></script>
	<script src="./js/styleSwitcher.js"></script>
</body>

</html>