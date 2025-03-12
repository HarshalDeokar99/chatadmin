<!DOCTYPE html>
<html lang="en">

<head>
   <!-- PAGE TITLE HERE -->
	<title>Dashboard</title>
	<!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo.png">
	<link href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


		
	
		
		<!--**********************************
            Header start
        ***********************************-->
        <?php $this->load->view('header.php'); ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php $this->load->view('sidebar.php'); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 align-items-start">
					<div class="me-auto d-none d-lg-block">
						<h2 class="text-primary font-w600 mb-0">Setting</h2>
						<p class="mb-0">Welcome to PHP Chat Bot Admin!</p>
					</div>
					
				</div>
        <div class="row">

					<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header border-0 pb-0 d-sm-flex flex-wrap d-block">
								<div class="mb-3">
									<h4 class="card-title mb-1">System Info</h4>
								</div>
							</div>
							<div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">System Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="system_name" id="system_name" class="form-control" placeholder="System Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">System Short Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="system_short_name" name="system_short_name" class="form-control" placeholder="System Short Name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Introduction Message</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="introduction_message" name="introduction_message" class="form-control" placeholder="Introduction Message">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">No Result Message</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="no_res_message" name="no_res_message" class="form-control" placeholder="No Result Message">
                                            </div>
                                        </div>
                                    
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
						</div>
					</div>
				
				 </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://youtu.be/BIvpSyQfbh4?si=bjNb3vFjFbsq2CkU" target="_blank">Harshal</a>2024</p>
    </div>
</div>        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
	<script> var enableSupportButton = '1'</script>
<script> var asset_url = 'assets/'</script>

<script src="<?php echo base_url(); ?>assets/vendor/global/global.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/chart-js/chart.bundle.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/waypoints/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery.counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/apexchart/apexchart.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dashboard/dashboard-1.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/deznav-init.js" type="text/javascript"></script>
	
</body>


</html>