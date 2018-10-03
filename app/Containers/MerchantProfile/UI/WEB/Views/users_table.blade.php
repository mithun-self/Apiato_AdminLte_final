@extends('admin.layouts.adminlayout')

@section('page-header')
    Users <small>User</small>
@stop

@section('content')
<style type="text/css">



.expanc {
        color: #949bad;
        font-family: Montserrat-Regular;
        font-size: 20px;
    }
    li {
    list-style-type: none;
}
</style>
         <div class="container col-sm-9 offset-sm-3 col-md-12 offset-md-2">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          <div class="row">
            <!-- modal form to create user -->
            <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Create User</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
                          </div>
                          <div class="form-group">
                            <label for="value">Email:</label>
                            <input type="number" class="form-control" id="email" placeholder="Enter Email" name="email" required="">
                          </div>
                          <div class="form-group">
                            <label for="value">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required="">
                          </div>
                          <div class="form-group">
                            <label for="value">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm_pass" placeholder="Confirm Password" name="confirm_pass" required="">
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- modal form to create user ends -->
            <!-- edit user modal starts -->
            <div id="Edit_Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" class="form-control" id="edit_row" value="" name="edit_row">

                          <div class="form-group">
                            <label for="edit_name">Name:</label>
                            <input type="text" class="form-control" id="edit_name" placeholder="Enter Name" name="edit_name" required="">
                          </div>
                          <div class="form-group">
                            <label for="edit_value">Email:</label>
                            <input type="number" class="form-control" id="edit_email" placeholder="Enter Email" name="edit_value" required="">
                          </div>
                          <div class="form-group">
                            <label for="value">Current Password:</label>
                            <input type="password" class="form-control" id="curr_password" placeholder="Current Password" name="password" required="">
                          </div>
                          <div class="form-group">
                            <label for="value">New Password:</label>
                            <input type="password" class="form-control" id="new_confirm_pass" placeholder="New Password" name="new_confirm_pass" required="">
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="on_edit_save" type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- edit user modal ends -->
            <!-- Delete Modal -->
            <div class="modal fade" id="delete_modal" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete User</h4>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" class="form-control" id="delete_row" value="" name="delete_row">
                    <p>Are You Sure</p>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button id="on_delete" type="button" class="btn btn-primary">Delete</button>
                    </div>
                </div>
                
              </div>
            </div>
            <!-- Delete Modal Ends -->
            
          <div class="box">
            <div class="box-body">
              <div class="col-md-6">
              </div>
              <div class="col-md-6 text-right right_table">
                  <ul>
                    <li class="list-inline-item" data-toggle="modal" data-target="#GSCCModal"><a href="#" class="expanc"><i class="fa fa-plus">&nbsp;</i>New</a></li>
                  </ul>
            </div>
              <table class="table table-bordered table-striped" style="width: 100%;" id="example">
                 <thead style="background-color: #d7dce2; border-radius: 55px;">
                    <tr>
                       <th>USER</th>
                       <!-- <th>ROLES</th> -->
                       <th>EMAIL</th>
                       <th>CREATED AT</th>
                       <th></th>
                       <th></th>
                    </tr>
                 </thead>
              </table>
            </div>
          </div>
         </div>
       </div>

       <script>
         $(function() {
               $('#example').DataTable({
               ajax: '{{ url('getuserslist') }}',
               columns: [
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'edit', "mRender": function(data, type, row) {
                              return '<button data-toggle="modal" data-target="#Edit_Modal" style="font-size: 10px;padding: 0 4px;font-weight: 500;color: rgb(255, 255, 255);background-color: rgb(217, 83, 79);border-color: rgb(212, 63, 58);font-family: Montserrat;" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>';
                              }
                        },
                        { data: 'delete', "mRender": function(data, type, row) {
                              return '<button data-toggle="modal" data-target="#delete_modal" style="font-size: 10px;padding: 0 4px;font-weight: 500;color: rgb(255, 255, 255);background-color: rgb(217, 83, 79);border-color: rgb(212, 63, 58);font-family: Montserrat;" class="btn btn-info btn-sm"><i class="fa fa-trash"></i></button>';
                              }
                        }
                       
                     ]  
            });
         });
         </script>
@stop