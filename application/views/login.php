<html lang="en" class="h-100">

<head>
   <!-- PAGE TITLE HERE -->
	<title>Chatbot admin login</title>
	<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo.png">
	<!-- FAVICONS ICON -->
	<link href="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-12">
					<div class="row align-items-center ">
						<div class="card login-card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-6 text-center">
										
										<div class="media-login">
											<img src="<?php echo base_url(); ?>assets/images/logo.png" class="" style="width:300px;" alt="">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="auth-form">
											<h3 class="text-start mb-4 font-w600">Login to ChatBot Admin</h3>
											<form action="<?php echo base_url(); ?>login" method="POST">
												<div class="form-group">
													<label class="mb-1 text-black">Email<span class="required">*</span></label>
													<input type="email" class="form-control" name="email">
												</div>
												<div class="form-group">
													<label class="mb-1 text-black">Password<span class="required">*</span></label>
													<input type="password" class="form-control" name="password">
												</div>
												
												<div class="text-center">
													<button type="submit" class="btn btn-primary btn-block">Sign In</button>
												</div>
											</form>
											<div class="new-account mt-3 d-flex align-items-center justify-content-between flex-wrap">
												<!-- <small class="mb-0">Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></small>
												<small href="page-forgot-password.html">Forgot Password?</small> -->
											</div>
													
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script> var enableSupportButton = '1'</script>
<script> var asset_url = 'assets/'</script>

<script src="<?php echo base_url(); ?>assets/vendor/global/global.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/deznav-init.js" type="text/javascript"></script>

</body>

</html>