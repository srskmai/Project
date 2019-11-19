<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Project</title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>assets/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assets/theme/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Sweet Alert 2 -->
  <link rel="stylesheet" href="<?= base_url('assets/sweetalert2/sweetalert2.css') ?>">



 <script src="<?=base_url()?>assets/theme/vendor/jquery/jquery.min.js"></script>


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-building"></i>
          <!-- <div class="sidebar-brand-icon rotate-n-15"> -->
            <!-- <i class="fas fa-laugh-wink"></i> -->
        </div>
        <div class="sidebar-brand-text mx-3">Project </div>
        <!-- <sup>2</sup> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=site_url();?>/Dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
    <!--   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Utilities Collapse Menu -->
    <!--   <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> -->

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
  <!--     <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
  <!--     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url();?>/List_ctrl">
          <i class="fas fa-fw fa-table"></i>
          <span>List</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-plus"></i>
          <span>Add site</span></a>
      </li> -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Chart</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=site_url();?>/setting">
          <i class="fas fa-cogs"></i>
          <span>Setting layout</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('index.php/user');?>">
          <i class="fas fa-users"></i>
          <span>User mangement</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
        <!--   <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


            <!-- Nav Item - Alerts -->


            <!-- Nav Item - Messages -->


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/image/user/user.png') ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a> -->
                <a class="dropdown-item" href="#" onclick="modal_change_password()">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change password
                </a>
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url() ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php echo $template['body'];?>


          <!-- Content Row -->


          <!-- Content Row -->



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ########## MODAL CHANGE PASSWORD ########## -->
        <div id="modal_change_password" class="modal fade effect-scale">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Change password</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              <form action="" id="form_change_password_main" method="post" autocomplete="off" validate>

                <div class="modal-body pd-25">
                  <div class="row">
                    <div class="col-md-12">

                      <div class="form-group">
                        <label for="">Current password</label><span id='message_current_main'></span>
                        <input id="current_password_main" type="password" class="form-control" name="" value="" required>
                      </div>

                      <div class="form-group">
                        <label for="">New password</label>
                        <input id="new_password_main" type="password" class="form-control" name="" value="" minlength="4" required>
                      </div>

                      <div class="form-group">
                        <label for="">Confirm password</label><span id='message_main'></span>
                        <input id="confirm_password_main" type="password" class="form-control" name="" value="" minlength="4" required>
                      </div>


                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <input type="submit" value="SAVE" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">
                </div>

              </form>

            </div><!-- modal-content -->
          </div><!-- modal-dialog -->
        </div><!-- modal -->
  <!-- ########## END : MODAL CHANGE PASSWORD ########## -->

  <!-- Bootstrap core JavaScript-->

  <script src="<?=base_url()?>assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/theme/vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>assets/theme/js/sb-admin-2.min.js"></script>

  <script src="<?=base_url()?>assets/theme/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- SWEET ALERT 2  -->
  <script src="<?= base_url('assets/sweetalert2/sweetalert2.js') ?>"></script>

  <script type="text/javascript">

    $(document).ready(function() {
      $('#modal_change_password').on('hidden.bs.modal', function (e) {
      $('#message').html('');
      $(this)
        .find("input[type=password],input[type=file],textarea")
           .val('')
           .end()
      })
    });

    function modal_change_password() {
      $("#modal_change_password").modal('show');
    }

    /* ###################################################################################
           LOGOUT
      ################################################################################### */
      $('#form_change_password_main').submit(function(e){
          e.preventDefault();
          var user_id = "<?= $_SESSION['user_id'] ?>";
          if ( $("#new_password_main").val() != $("#confirm_password_main").val() ) {
            Swal.fire('', "New password and confirm password do not match", 'warning');
          }else{
            $.ajax({
              url: '<?= base_url('index.php/login/change_password') ?>',
              type: 'POST',
              data: {user_id: user_id, current_password: $("#current_password_main").val(), new_password: $("#new_password_main").val()}
            })
            .done(function(data) {
              if (data == "Success") {
                Swal.fire('Password Changed !', 'Please login again.', 'success').then((result) => {
                   if (result.value) {
                     window.location.href = "<?= base_url() ?>";
                   }else{
                     window.location.href = "<?= base_url() ?>";
                   }
                 })
              }else{
                Swal.fire('', "The current password you entered did not match", 'error');
                $('#message_current_main').html(' Incorrect current password.').css('color', 'red');
              }
            })
            .fail(function(data) {
              console.log(data);
            });
          }
      })

      $('#new_password_main, #confirm_password_main').on('keyup', function () {
        if ($('#new_password_main').val() == $('#confirm_password_main').val() && $('#new_password_main').val() != '' && $('#confirm_password_main').val() != '') {
          $('#message_main').html(' Matching').css('color', 'green');
        } else
          $('#message_main').html(' Not Matching').css('color', 'red');
      });
  </script>

</body>

</html>
