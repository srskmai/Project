  <link href="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

  <style media="screen">
  input[type="checkbox"]{
    width: 30px; /*Desired width*/
    height: 30px; /*Desired height*/
  }
  </style>


<h1 class="h3 mb-2 text-gray-800">List Detail</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
              <div class="row">

                <div class="col-sm-6">
                 <h5 class="m-0"><b>Site ID:</b> 000001</h5>
                </div>

                <div class="col-sm-3">
                 <h5 class="m-0"><b>Lat:</b> 7.13 N</h5>
                </div>

                <div class="col-sm-3">
                 <h5 class="m-0"><b>Long:</b> 100.25 E</h5>
                </div>

                <br><br>

                <div class="col-sm-6">
                 <h5 class="m-0"><b>Location:</b> Amphoe Mueng</h5>
                </div>

                <br>

                <div class="col-sm-12">
                  <h4 class="small font-weight-bold">&nbsp; <span class="float-right">40%</span></h4>
                  <div class="progress mb-6">
                      <div class="progress-bar bg-danger"
                           role="progressbar" style="width: 40%"
                           aria-valuenow="40"
                           aria-valuemin="0"
                           aria-valuemax="100">
                      </div>
                  </div>
                </div>


              </div>
            </div>

            <br>

            <div class="card-body">
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link" href="#">Site survey</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Civil work</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Electical work</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">PAC</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">FAC</a>
                </li>
              </ul>

              <br><br><br>

              <div class="container">
                <div class="row">

                  <div class="col-md-4">
                    Document
                  </div>
                  <div class="col-md-4 text-center">
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked"></label>
                    </div>
                  </div>
                  <br><br>
                  <div class="col-md-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;Cover
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked1">
                        <label class="custom-control-label" for="defaultUnchecked1"></label>
                    </div>
                  </div>
                  <br><br>
                  <div class="col-md-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;Update
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked2">
                        <label class="custom-control-label" for="defaultUnchecked2"></label>
                    </div>
                  </div>

                  <br><br>

                  <div class="col-md-4">
                    Photos
                  </div>
                  <div class="col-md-4 text-center">
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                        <label class="custom-control-label" for="defaultUnchecked3"></label>
                    </div>
                  </div>
                  <br><br>
                  <div class="col-md-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;Installation
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked4">
                        <label class="custom-control-label" for="defaultUnchecked4"></label>
                    </div>
                  </div>

                  <br><br>

                  <div class="col-md-4">
                    CAD Drawings
                  </div>
                  <div class="col-md-4 text-center">
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked5">
                        <label class="custom-control-label" for="defaultUnchecked5"></label>
                    </div>
                  </div>
                  <br><br>
                  <div class="col-md-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;Civil
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-outline-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked6">
                        <label class="custom-control-label" for="defaultUnchecked6"></label>
                    </div>
                  </div>
                  <br><br>
                  <div class="col-md-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;Mounting
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-outline-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked7">
                        <label class="custom-control-label" for="defaultUnchecked7"></label>
                    </div>
                  </div>
                  <br><br>
                  <div class="col-md-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;Layout
                  </div>
                  <div class="col-md-4 text-center">
                    <button type="button" class="btn btn-info btn-sm" name="button">View</button>
                      &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-info btn-sm" name="button">Upload</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked8">
                        <label class="custom-control-label" for="defaultUnchecked8"></label>
                    </div>
                  </div>


                </div>
              </div>

            </div>
          </div>




<script src="<?=base_url()?>assets/theme/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
</script>
