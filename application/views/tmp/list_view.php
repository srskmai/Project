  <link href="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <style media="screen">
    .td-middle {
      vertical-align: middle;
    }
  </style>

<h1 class="h3 mb-2 text-gray-800">List Manage</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
              <div class="row">
                <div class="col-sm-6">
                 <h6 class="m-0 font-weight-bold text-primary">List table</h6>

                </div>
                <div class="col-sm-6 text-right">
                 <a href="#" class="btn btn-primary btn-icon-split btn-sm"  data-toggle="modal" data-target="#add_list">
                    <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                    <span class="text">Add List</span>
                 </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Site ID.</th>
                      <th>Location</th>
                      <th>Lat</th>
                      <th>Long</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
    <!--               <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> -->
                  <tbody>
                    <tr>
                      <td>000001</td>
                      <td>Amphoe Mueng</td>
                      <td>7.13</td>
                      <td>100.25</td>
                      <td>
                          <h4 class="small font-weight-bold">Civil work <span class="float-right">40%</span></h4>
                          <div class="progress mb-4">
                              <div class="progress-bar bg-danger"
                                   role="progressbar" style="width: 40%"
                                   aria-valuenow="40"
                                   aria-valuemin="0"
                                   aria-valuemax="100">
                              </div>
                          </div>
                      </td>
                      <td class="text-center" style="vertical-align:middle;">
                          <a href="http://localhost/P_kan/project1/index.php/List_ctrl/list_detail" class="btn btn-warning btn-circle">
                           <i class="fas fa-pen"></i>
                         </a>
                      </td>
                    </tr>

                    <tr>
                      <td>000002</td>
                      <td>Amphoe Hatyai</td>
                      <td>7.01</td>
                      <td>100.46</td>
                      <td>
                          <h4 class="small font-weight-bold">Electrical work <span class="float-right">60%</span></h4>
                          <div class="progress mb-4">
                              <div class="progress-bar bg-danger"
                                   role="progressbar" style="width: 60%"
                                   aria-valuenow="60"
                                   aria-valuemin="0"
                                   aria-valuemax="100">
                              </div>
                          </div>
                      </td>
                      <td class="text-center" style="vertical-align:middle;">
                          <a href="http://localhost/P_kan/project1/index.php/List_ctrl/list_detail" class="btn btn-warning btn-circle">
                           <i class="fas fa-pen"></i>
                         </a>
                      </td>
                    </tr>

                    <tr>
                      <td>000003</td>
                      <td>Amphoe Chana</td>
                      <td>7.01</td>
                      <td>100.68</td>
                      <td>
                          <h4 class="small font-weight-bold">Site surver <span class="float-right">20%</span></h4>
                          <div class="progress mb-4">
                              <div class="progress-bar bg-danger"
                                   role="progressbar" style="width: 20%"
                                   aria-valuenow="20"
                                   aria-valuemin="0"
                                   aria-valuemax="100">
                              </div>
                          </div>
                      </td>
                      <td class="text-center" style="vertical-align:middle;">
                          <a href="http://localhost/P_kan/project1/index.php/List_ctrl/list_detail" class="btn btn-warning btn-circle">
                           <i class="fas fa-pen"></i>
                         </a>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- ########## MODAL SELECT FORM ########## -->
      <div id="add_list" class="modal fade effect-scale">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content bd-0 tx-14">
              <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Add list</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <form action="" id="form_select_form" method="post" autocomplete="off" validate>

              <div class="modal-body pd-25">
                <div class="row">
                  <div class="col-md-12">

                    <div class="form-group">
                      <label for="">Location</label>
                      <input type="text" class="form-control" name="" value="">
                      <!-- <select id="select_form" class="form-control" name="" required>
                        <option value=''> -- Please select form -- </option>
                        <option value="form_pr">Purchasing application</option>
                      </select> -->
                    </div>

                    <div class="form-group">
                      <label for="">Lat</label>
                      <input type="text" class="form-control" name="" value="">
                    </div>

                    <div class="form-group">
                      <label for="">Long</label>
                      <input type="text" class="form-control" name="" value="">
                    </div>

                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <input type="submit" value="Add" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">
              </div>

            </form>

          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal -->
<!-- ########## END : MODAL SELECT FORM ########## -->

<script src="<?=base_url()?>assets/theme/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
</script>
