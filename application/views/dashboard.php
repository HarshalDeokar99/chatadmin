<!DOCTYPE html>
<html lang="en">

<head>
   <!-- PAGE TITLE HERE -->
	<title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo.png">
	<!-- FAVICONS ICON -->
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
						<h2 class="text-primary font-w600 mb-0">Dashboard</h2>
						<p class="mb-0">Welcome to Chat Bot Admin!</p>
					</div>
					
					
				</div>
        <div class="row">
					<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
						<div id="user-activity" class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title mb-1">FQAs</h4>
									<small class="mb-0">Frequently Asked Questions</small>
								</div>
								
							</div>
							<div class="card-body">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="user" role="tabpanel">
										<canvas id="faqchart" class="chartjs"></canvas>
									</div>
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
        <p>Copyright © Designed &amp; Developed by <a href="https://youtu.be/r3RNtUX_Ios?si=77R7MH2w0_Ui01Nb" target="_blank">Harshal</a>2024</p>
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
	<script>
  var questions=<?php echo json_encode($questions); ?>;
  var times='<?php echo json_encode($times); ?>';
  console.log(questions);
  console.log(times);
  var q=["what is PHP","what are you","hi","What can you do","What is ChatBot"];
  console.log(q);
    $(document).ready(function() {
      var ctx = document.getElementById("faqchart").getContext('2d');
      var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: questions,
          datasets: [{
            data: times,
            backgroundColor: "rgba(0,0,255,1)"
          }]
        }
      });
    });
  </script>
</body>


</html>