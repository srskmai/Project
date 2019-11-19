









<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">User management</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 text-right">
    <!-- <h6 class="m-0 font-weight-bold text-primary">User</h6> -->
    <button type="button" class="btn btn-success btn-sm" name="button" data-toggle="modal" data-target="#modal_add_user"><i class="fas fa-plus"></i> Add user</button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="table_user" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center">Username</th>
            <th class="text-center">User Type</th>
            <th class="text-center" width="15%">Action</th>
          </tr>
        </thead>
        <!-- <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot> -->
        <tbody id="body_user">
          <!-- <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td class="text-center">
              <button type="button" title="Change password" class="btn btn-primary bt-sm" name="button"><i class="fab fa-product-hunt"></i></button>
              <button type="button" title="Change user type" class="btn btn-info bt-sm" name="button"><i class="fas fa-sliders-h"></i></button>
              <button type="button" title="Delete" class="btn btn-danger bt-sm" name="button"><i class="fas fa-trash-alt"></i></button>
            </td>
          </tr>
          <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td class="text-center">
              <button type="button" title="Change password" class="btn btn-primary bt-sm" name="button"><i class="fab fa-product-hunt"></i></button>
              <button type="button" title="Change user type" class="btn btn-info bt-sm" name="button"><i class="fas fa-sliders-h"></i></button>
              <button type="button" title="Delete" class="btn btn-danger bt-sm" name="button"><i class="fas fa-trash-alt"></i></button>
            </td>
          </tr> -->
        </tbody>
      </table>
    </div>
  </div>
</div>



<div id="modal_add_user" class="modal fade effect-scale">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bd-0 tx-14">
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Add new user</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <form action="" id="form_add_user" method="post" autocomplete="off" validate>

        <div class="modal-body pd-25">
          <div class="row">
            <div class="col-md-12">

              <div class="form-group">
                <label for="">Username</label><span id='message_current'></span>
                <input id="user_name" type="text" class="form-control" name="user_name" value="" required>
              </div>

              <div class="form-group">
                <label for="">Password</label>
                <input id="new_password" type="password" class="form-control" name="" value="" minlength="4" required>
              </div>

              <div class="form-group">
                <label for="">Confirm password</label><span id='message'></span>
                <input id="confirm_password" type="password" class="form-control" name="" value="" minlength="4" required>
              </div>

              <div class="form-group">
                <label for="">User type</label><span id='message'></span>
                <div class="row">
                  <div class="col-md-6">
                    <input type="radio" name="user_type" value="Project owner" checked> Project ownwer
                  </div>
                  <div class="col-md-6">
                    <input type="radio" name="user_type" value="Member"> Member
                  </div>
                </div>


                <!-- <input id="confirm_password" type="password" class="form-control" name="" value="" minlength="4" required> -->
              </div>


            </div>
          </div>
        </div>

        <div class="modal-footer">
          <input type="submit" value="Create user" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">
        </div>

      </form>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->

<div id="modal_reset_password" class="modal fade effect-scale">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bd-0 tx-14">
        <div class="modal-header pd-y-20 pd-x-25">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"> Reset password & Change user type</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <form action="" id="form_reset_password" method="post" autocomplete="off" validate>

        <div class="modal-body pd-25">
          <div class="row">
            <div class="col-md-12">
              <input id="user_id_edit" type="hidden" name="" value="">
              <div class="form-group">
                <label for="">New password</label>
                <input id="new_password_edit" type="password" class="form-control" name="" value="" minlength="4">
              </div>

              <div class="form-group">
                <label for="">Confirm password</label><span id='message_edit'></span>
                <input id="confirm_password_edit" type="password" class="form-control" name="" value="" minlength="4">
              </div>

              <div class="form-group">
                <label for="">User type</label><span id='message_edit'></span>
                <div class="row">
                  <div class="col-md-6">
                    <input type="radio" name="user_type_edit" value="Project owner" checked> Project ownwer
                  </div>
                  <div class="col-md-6">
                    <input type="radio" name="user_type_edit" value="Member"> Member
                  </div>
                </div>


                <!-- <input id="confirm_password" type="password" class="form-control" name="" value="" minlength="4" required> -->
              </div>


            </div>
          </div>
        </div>

        <div class="modal-footer">
          <input type="submit" value="EDIT" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">
        </div>

      </form>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->


<script type="text/javascript">
  $(document).ready(function() {

    get_user();

    $('#modal_add_user').on('hidden.bs.modal', function (e) {
    $("input[name='"+"user_type"+"'][value='"+"Project owner"+"']").prop('checked', true);
    $('#message').html('');
    $(this)
      .find("input[type=text],input[type=password]")
         .val('')
         .end()
    })
    // $("input[name=user_type][value=" + "Project owner" + "]").attr('checked', true);
  });

  function get_user() {
    $.ajax({
      url: '<?= base_url('index.php/user/get_user') ?>',
      type: 'POST',
      dataType: 'json',
    })
    .done(function(user_data) {
      user_html = '';
      for (var i = 0; i < user_data.length; i++) {
        user_html += '<tr>';
        user_html += '  <td>'+user_data[i].user_name+'</td>';
        user_html += '  <td>'+user_data[i].user_type+'</td>';
        user_html += '  <td class="text-center">';
        // user_html += '    <button type="button" title="Reset password" class="btn btn-primary bt-sm" name="button" onclick="reset_password('+user_data[i].user_type+')"><i class="fab fa-product-hunt"></i></button>';
        user_html += '    <button type="button" title="Change information" class="btn btn-info bt-sm" name="button" onclick="reset_password('+user_data[i].user_id+','+'\''+user_data[i].user_type+'\''+')"><i class="fas fa-sliders-h"></i></button>';
        user_html += '    <button type="button" title="Delete" class="btn btn-danger bt-sm" name="button" onclick="delete_user('+user_data[i].user_id+')"><i class="fas fa-trash-alt"></i></button>';
        user_html += '  </td>';
        user_html += '</tr>';
      }
      $('#table_user').DataTable().destroy();
      $("#body_user").html(user_html);
      $('#table_user').dataTable({
        bProcessing: true,
        bScrollCollapse: true,
        lengthMenu: [ [25, 50, 100, -1], [25, 50, 100, "All"] ],
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
        }
      });
    })
    .fail(function() {
      console.log("error");
    });

  }

  $('#new_password, #confirm_password').on('keyup', function () {
    if ($('#new_password').val() == $('#confirm_password').val() && $('#new_password').val() != '' && $('#confirm_password').val() != '') {
      $('#message').html(' Matching').css('color', 'green');
    } else
      $('#message').html(' Not Matching').css('color', 'red');
  });

  $('#new_password_edit, #confirm_password_edit').on('keyup', function () {
    if ($('#new_password_edit').val() == $('#confirm_password_edit').val() && $('#new_password_edit').val() != '' && $('#confirm_password_edit').val() != '') {
      $('#message_edit').html(' Matching').css('color', 'green');
    } else
      $('#message_edit').html(' Not Matching').css('color', 'red');
  });

  $( "#form_add_user" ).submit(function( event ) {
    event.preventDefault();
    if ( $("#new_password").val() != $("#confirm_password").val() ) {
      Swal.fire('', "Password and confirm password do not match", 'warning');
    }else{

      $.ajax({
        url: '<?= base_url('index.php/user/create_user') ?>',
        type: 'POST',
        // dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
        data: {username: $("#user_name").val(), password: $("#new_password").val(), user_type: $('input[name="user_type"]:checked').val()}
      })
      .done(function(data) {
        if (data == "Exists") {
          Swal.fire('', "The username already exists", 'warning');
        }else if (data == "Success") {
          $("#modal_add_user").modal("hide");
          Swal.fire('Created!', "Create user successful", 'success');
          get_user();
        }else {
          Swal.fire('', "There has been in error inserting an user", 'error');
        }
      })
      .fail(function(data) {
        console.log(data);
      });

    }
  });

  function reset_password(id, type) {
    $("#modal_reset_password").modal('show');
    $('#user_id_edit').val(id);
    $("input[name='"+"user_type_edit"+"'][value='"+type+"']").prop('checked', true);
  }

  $( "#form_reset_password" ).submit(function( event ) {
    event.preventDefault();
    if ( $("#new_password_edit").val() != $("#confirm_password_edit").val() ) {
      Swal.fire('', "New password and confirm password do not match", 'warning');
    }else{
      var user_type = $('input[name="user_type_edit"]:checked').val();
      var password = $("#new_password_edit").val();
      var user_id = $("#user_id_edit").val();
      $.ajax({
        url: '<?= base_url("index.php/user/update_user") ?>',
        type: 'POST',
        data: {user_type: user_type, password:password, id:user_id}
      })
      .done(function(data) {
        if (data == "Success") {
          Swal.fire('Updated!', "Updated user successful", 'success');
          $("#modal_reset_password").modal('hide');
          get_user();
        }else{
          Swal.fire('', "Update user fail, please try again", 'warning');
        }
      })
      .fail(function(data) {
        console.log("error: "+data);
      });

    }
  });


  function delete_user(id) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to delete this user !",
      type: 'info',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'Cancel',
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: '<?= base_url('index.php/user/delete_user') ?>',
          type: 'POST',
          data: {id: id}
        })
        .done(function(data) {
          if (data == "Success") {
            Swal.fire('Deleted!', "Delete user successful", 'success');
            get_user();
          }else{
            Swal.fire('', "Delete user fail, please try again", 'warning');
          }
        })
        .fail(function(data) {
          Swal.fire('Error!', data, 'error');
        });
      }
    })

  }



</script>
