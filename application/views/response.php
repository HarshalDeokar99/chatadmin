<!DOCTYPE html>
<html lang="en">

<head>
   <!-- PAGE TITLE HERE -->
   <title>Responses</title>
   
   <!-- FAVICONS ICON -->
   <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/logo.png">

   <!-- Bootstrap CSS -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
   <!-- Bootstrap Tags Input CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet">

   <!-- Other CSS files -->
   <link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   
   <style>

   </style>
</head>

<body>

    <!--******************* Preloader start ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--******************* Preloader end ********************-->
  
    <!--********************************** Main wrapper start ***********************************-->
    <div id="main-wrapper">
  
        <!-- Header start -->
        <?php $this->load->view('header.php'); ?>
  
        <!-- Sidebar start -->
        <?php $this->load->view('sidebar.php'); ?>
  
        <!-- Content body start -->
        <div class="content-body">
            <div class="container-fluid">
                <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#addresmodal">Add New</button>
  
                <div class="row">
                    <!-- Modal start -->
                    <div class="modal fade" id="addresmodal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add New Response</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form onsubmit="return false;">
                                            <div class="form-group row">
                                                <label for="input" class="col-2 col-form-label">Input</label>
                                                <div class="col-10">
                                                    <input type="text" name="input" class="form-control" placeholder="Enter keywords">
                                                    <small class="form-text text-muted">Separate keywords with a comma, space bar, or enter key</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="output" class="col-2 col-form-label">Output</label>
                                                <div class="col-10">
                                                    <input type="text" name="output" class="form-control">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
  
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List of Question Responses</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Question</th>
                                                <th>Response</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          $i = 0;
                                          foreach ($responses as $r) {
                                              $i++;
                                          ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $r->question; ?></td>
                                                <td><?php echo $r->response_message; ?></td>
                                                <td>
                                                    <div class="dropdown ms-auto text-end c-pointer">
                                                        <div class="btn-link" data-bs-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Accept Patient</a>
                                                            <a class="dropdown-item" href="#">Reject Order</a>
                                                            <a class="dropdown-item" href="#">View Details</a>
                                                        </div>
                                                    </div>
                                                </td>                                                    
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content body end -->
  
        <!-- Footer start -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://youtu.be/r3RNtUX_Ios?si=nnTHke4orTUcCovw" target="_blank">Harshal</a>2024</p>
            </div>
        </div>
        <!-- Footer end -->
    </div>
    <!-- Main wrapper end -->
  
    <!-- Required vendors -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="assets/vendor/global/global.min.js" type="text/javascript"></script>
    <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins-init/datatables.init.js" type="text/javascript"></script>
    <script src="assets/js/custom.min.js" type="text/javascript"></script>
    <script src="assets/js/deznav-init.js" type="text/javascript"></script>

    <script>
     
    </script>

</body>
</html>
