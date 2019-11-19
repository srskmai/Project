<link href="<?=base_url()?>assets/theme/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style media="screen">
  .td-middle {
    vertical-align: middle;
  }
  .just-padding {
  padding: 15px;
}

.list-group.list-group-root {
  padding: 0;
  overflow: hidden;
}

.list-group.list-group-root .list-group {
  margin-bottom: 0;
}

.list-group.list-group-root .list-group-item {
  border-radius: 0;
  border-width: 1px 0 0 0;
}

.list-group.list-group-root > .list-group-item:first-child {
  border-top-width: 0;
}

.list-group.list-group-root > .list-group > .list-group-item {
  padding-left: 60px;
}

.list-group.list-group-root > .list-group > .list-group > .list-group-item {
  padding-left: 45px;
}

a{  color: black;}
</style>

<h1 class="h3 mb-2 text-gray-800">Setting</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
            <div class="row">
              <div class="col-sm-6">
               <h6 class="m-0 font-weight-bold text-primary">Type table</h6>

              </div>
              <div class="col-sm-6 text-right">
               <a href="#" class="btn btn-primary btn-icon-split btn-sm"  data-toggle="modal" data-target="#add_list">
                  <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                  <span class="text">Add Type</span>
               </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th class="text-center">Type name </th>
                    <th class="text-center">List</th>
                    <th class="text-center">Sub-List</th>
                    <th class="text-center" width="10%">Action</th>
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
                    <td>Type A</td>
                    <td class="text-right">5</td>
                    <td class="text-right">13</td>
                    <td class="text-center" style="vertical-align:middle;">
                        <a href="http://localhost/P_kan/project1/index.php/List_ctrl/list_detail" class="btn btn-warning btn-circle">
                         <i class="fas fa-pen"></i>
                       </a>
                    </td>
                  </tr>

                  <tr>
                    <td>Type B</td>
                    <td class="text-right">4</td>
                    <td class="text-right">10</td>
                    <td class="text-center" style="vertical-align:middle;">
                        <a href="http://localhost/P_kan/project1/index.php/List_ctrl/list_detail" class="btn btn-warning btn-circle">
                         <i class="fas fa-pen"></i>
                       </a>
                    </td>
                  </tr>

                  <tr>
                    <td>Type C</td>
                    <td class="text-right">6</td>
                    <td class="text-right">17</td>
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
    <div id="add_list2" class="modal fade effect-scale">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Add type</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

          <form action="" id="form_select_form" method="post" autocomplete="off" validate>

            <div class="modal-body pd-25">
              <!-- <div class="just-padding"> -->

                <div class="text-right">
                  <input type="submit" value="Add List" class="btn btn-primary btn-sm">
                </div>

                <br>

                <!-- <div class="row">
                  <div class="col-md-9">
List 1
                  </div>
                  <div class="col-md-2">
<button type="button" class="btn btn-sm btn-primary" name="button">Add sub-list</button>
                  </div>
                  <div class="col-md-1">
2
                  </div>
                  <div class="col-md-1">
1
                  </div>

                </div> -->

              <div class="list-group list-group-root well">

                <a href="#" class="list-group-item">1. Site by site Design Stage
                  <button type="button" class="btn btn-sm btn-danger" style="float:right;" name="button">Delete list</button>
                  <button type="button" class="btn btn-sm btn-success" style="float:right;" name="button">Edit list</button>
                  <button type="button" class="btn btn-sm btn-primary" style="float:right;" name="button">Add sub-list</button>
                </a>
                <div class="list-group">

                  <a href="#" class="list-group-item">a. Site information
                    <button type="button" class="btn btn-sm btn-danger" style="float:right;" name="button">Delete sub list</button>
                    <button type="button" class="btn btn-sm btn-success" style="float:right;" name="button">Edit sub list</button>
                  </a>

                  <a href="#" class="list-group-item">b. Technical site Survey Report (TSSR)
                    <button type="button" class="btn btn-sm btn-danger" style="float:right;" name="button">Delete sub list</button>
                    <button type="button" class="btn btn-sm btn-success" style="float:right;" name="button">Edit sub list</button>
                  </a>

                  <a href="#" class="list-group-item">c. Detail design drawing
                    <button type="button" class="btn btn-sm btn-danger" style="float:right;" name="button">Delete sub list</button>
                    <button type="button" class="btn btn-sm btn-success" style="float:right;" name="button">Edit sub list</button>
                  </a>

                  <a href="#" class="list-group-item">d. Support Design Documentation
                    <button type="button" class="btn btn-sm btn-danger" style="float:right;" name="button">Delete sub list</button>
                    <button type="button" class="btn btn-sm btn-success" style="float:right;" name="button">Edit sub list</button>
                  </a>

                </div>

                <a href="#" class="list-group-item">
                  <div class="row">
                    <div class="col-md-10">
                      <input type="text" name="" class="form-control" value="Construction Stage">
                    </div>
                    <div class="col-md-2">
                      <button type="button" class="btn btn-sm btn-primary" style="float:right;" name="button">Save</button>
                    </div>
                  </div>
                </a>
                <div class="list-group">

                  <a href="#" class="list-group-item">
                    <div class="row">
                      <div class="col-md-10">
                        <input type="text" name="" class="form-control" value="Photo Report">
                      </div>
                      <!-- <div class="col-md-2">
                        <button type="button" class="btn btn-sm btn-primary" style="float:right;" name="button">Save</button>
                      </div> -->
                    </div>
                  </a>


                </div>
            </div>
            <div class="modal-footer">
              <br>
              <input type="submit" value="Add type" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">
            </div>

          </form>


      </div><!-- modal-dialog -->
    </div><!-- modal -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
<!-- ########## END : MODAL SELECT FORM ########## -->

        <!-- ########## MODAL SELECT FORM ########## -->
    <div id="add_list6" class="modal fade effect-scale">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Type</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body pd-25">
              <table class="table table-striped">
                <thead>
                  <!-- <tr>
                    <th>Item1</th>
                    <th></th>
                    <th></th>
                  </tr> -->
                </thead>
                <tbody>
                  <tr>
                    <td>Item1</td>
                    <td><br>Sub Item</td>
                    <td class="text-right">
                      <br>
                      <button type="button" class="btn btn-primary btn-sm" name="button">manual checklist</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">mendatory</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">upload file</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">mendatory</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Item2</td>
                    <td><br>Sub Item</td>
                    <td class="text-right">
                      <br>
                      <button type="button" class="btn btn-primary btn-sm" name="button">manual checklist</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">mendatory</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">upload file</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">mendatory</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Item3</td>
                    <td><br>Sub Item</td>
                    <td class="text-right">
                      <br>
                      <button type="button" class="btn btn-primary btn-sm" name="button">manual checklist</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">mendatory</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">upload file</button>
                      <button type="button" class="btn btn-primary btn-sm" name="button">mendatory</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- <div class="modal-footer">
              <br>
              <input type="submit" value="Add type" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">
            </div> -->

    </div><!-- modal -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
<!-- ########## END : MODAL SELECT FORM ########## -->

        <!-- ########## MODAL SELECT FORM ########## -->
    <div id="add_list" class="modal fade effect-scale">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
              <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Add Type</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

          <form action="" id="form_select_form" method="post" autocomplete="off" validate>

            <div class="model-header pd-y-20 pd-x-25">
              <div class="text-right" style="padding:20 20;">
                <input type="submit" value="Add List" class="btn btn-primary btn-sm">
              </div>
            </div>

            <div class="modal-body">
              <!-- <div class="just-padding"> -->
<!--
                <div class="text-right">
                  <input type="submit" value="Add List" class="btn btn-primary btn-sm">
                </div> -->

                <!-- <br> -->

                <!-- <div class="row">
                  <div class="col-md-9">
List 1
                  </div>
                  <div class="col-md-2">
<button type="button" class="btn btn-sm btn-primary" name="button">Add sub-list</button>
                  </div>
                  <div class="col-md-1">
2
                  </div>
                  <div class="col-md-1">
1
                  </div>

                </div> -->

              <div class="list-group list-group-root well">

                <a href="#" class="list-group-item">1. Site by site Design Stage &nbsp;
                  <!-- <div style="float:right;"> -->
                    <button type="button" class="btn btn-primary btn-sm" name="button">Add sub list</button>
                  <!-- </div> -->
                </a>
                <div class="list-group">

                  <a href="#" class="list-group-item">a. Site information
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked1  ">
                        <label class="custom-control-label" for="defaultUnchecked1  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked2  ">
                        <label class="custom-control-label" for="defaultUnchecked2  ">Manual checklist</label>
                        &nbsp;&nbsp;
                    </div>
                    <br>
                    <div class="text-right" style="color:rgba(0,0,0,.125)">
                      __________________________________
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked3  ">
                      <label class="custom-control-label" for="defaultUnchecked3  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked4  ">
                      <label class="custom-control-label" for="defaultUnchecked4  ">Upload file</label>
                      &nbsp;&nbsp;
                    </div>
                  </a>

                  <a href="#" class="list-group-item">b. Technical site Survey Report (TSSR)
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked5  ">
                        <label class="custom-control-label" for="defaultUnchecked5  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked6  ">
                        <label class="custom-control-label" for="defaultUnchecked6  ">Manual checklist</label>
                        &nbsp;&nbsp;
                    </div>
                    <br>
                    <div class="text-right" style="color:rgba(0,0,0,.125)">
                      __________________________________
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked7  ">
                      <label class="custom-control-label" for="defaultUnchecked7  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked8  ">
                      <label class="custom-control-label" for="defaultUnchecked8  ">Upload file</label>
                      &nbsp;&nbsp;
                    </div>
                  </a>

                  <a href="#" class="list-group-item">c. Detail design drawing
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked9  ">
                        <label class="custom-control-label" for="defaultUnchecked9  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked10  ">
                        <label class="custom-control-label" for="defaultUnchecked10  ">Manual checklist</label>
                        &nbsp;&nbsp;
                    </div>
                    <br>
                    <div class="text-right" style="color:rgba(0,0,0,.125)">
                      __________________________________
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked11  ">
                      <label class="custom-control-label" for="defaultUnchecked11  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked12  ">
                      <label class="custom-control-label" for="defaultUnchecked12  ">Upload file</label>
                      &nbsp;&nbsp;
                    </div>
                  </a>

                  <a href="#" class="list-group-item"> d. Support Design Documentation
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked13 ">
                        <label class="custom-control-label" for="defaultUnchecked13  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked14  ">
                        <label class="custom-control-label" for="defaultUnchecked14  ">Manual checklist</label>
                        &nbsp;&nbsp;
                    </div>
                    <br>
                    <div class="text-right" style="color:rgba(0,0,0,.125)">
                      __________________________________
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked15  ">
                      <label class="custom-control-label" for="defaultUnchecked15  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked16  ">
                      <label class="custom-control-label" for="defaultUnchecked16  ">Upload file</label>
                      &nbsp;&nbsp;
                    </div>
                  </a>

                  <!-- <a href="#" class="list-group-item">
                    <div class="row">
                      <div class="col-md-10">
                        <input type="text" name="" class="form-control" value="Support Design Documentation">
                      </div>
                      <div class="col-md-2">
                        <button type="button" class="btn btn-sm btn-primary" style="float:right;" name="button">Save</button>
                      </div>
                    </div>
                  </a> -->

                </div>

                <a href="#" class="list-group-item">2. Construction Stage &nbsp;
                  <button type="button" class="btn btn-primary btn-sm" name="button">Add sub list</button>
                </a>
                <div class="list-group">

                  <a href="#" class="list-group-item">a. Photo Report
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked17  ">
                        <label class="custom-control-label" for="defaultUnchecked17  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked18  ">
                        <label class="custom-control-label" for="defaultUnchecked18  ">Manual checklist</label>
                        &nbsp;&nbsp;
                    </div>
                    <br>
                    <div class="text-right" style="color:rgba(0,0,0,.125)">
                      __________________________________
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked19  ">
                      <label class="custom-control-label" for="defaultUnchecked19  ">Mendatory</label>
                    </div>
                    <div class="custom-control custom-checkbox" style="float:right;">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked20  ">
                      <label class="custom-control-label" for="defaultUnchecked20  ">Upload file</label>
                      &nbsp;&nbsp;
                    </div>
                  </a>


                </div>
            </div>
            <div class="modal-footer">
              <br>
              <br>
              <input type="submit" value="Close" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">
              <input type="submit" value="Add type" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">
            </div>

          </form>


      </div><!-- modal-dialog -->
    </div><!-- modal -->
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
