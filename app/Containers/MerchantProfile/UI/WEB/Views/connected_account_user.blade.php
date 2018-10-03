@extends('admin.layouts.adminlayout')

@section('page-header')
    Connected <small>Account Users</small>
@stop

@section('css')
<style>
.submit_button {
    padding: 23px;
}
  .right_table {
    margin-left: 54%;
  }
      .expanc {
        color: #949bad;
        font-family: Montserrat-Regular;
        font-size: 20px;
    }
</style>
@stop

@section('content')

@include('admin.layouts.merchant_account_filter')
<div class="container col-sm-9 offset-sm-3 col-md-12 offset-md-2">
  @if(Session::has('success_msg'))
    <div class="alert alert-dismissable alert-sucess">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      {{Session::get('success_msg')}}
    </div>
  @endif
  <div class="row">
     <!-- modal form to create-->
            <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Create</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
                          </div>
                          <div class="form-group">
                            <label for="value">Email:</label>
                            <input type="email" class="form-control" id="value" placeholder="Enter Email" name="value" required="">
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- modal form to create ends -->
            <!-- edit modal starts -->
            <div id="Edit_Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit</h4>
                      </div>
                      <div class="modal-body">
                        <input type="hidden" class="form-control" id="edit_row" value="" name="edit_row">

                          <div class="form-group">
                            <label for="edit_name">Name:</label>
                            <input type="text" class="form-control" id="edit_name" placeholder="Enter Name" name="edit_name" required="">
                          </div>
                          <div class="form-group">
                            <label for="edit_type">Type:</label>
                          <select name="edit_type" id="edit_type" required="" class="form-control" style="height: 34px;">
                              <option disabled="" selected="" value="">Select Type</option>
                              <option value="Percentage">Percentage</option>
                              <option value="Fixed">Fixed</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="edit_value">Value:</label>
                            <input type="number" class="form-control" id="edit_value" placeholder="Enter value" name="edit_value" step=".01" required="">
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="on_edit_save" type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- edit modal ends -->

            <!-- Delete Modal -->
            <div class="modal fade" id="delete_modal" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete</h4>
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
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-5 text-right right_table">
                  <h1 class="list-inline-item" data-toggle="modal" data-target="#GSCCModal"><a href="#" class="expanc"><i class="fa fa-plus">&nbsp;</i>New</a></h1>
<!--                   <li class="list-inline-item"><a href="#" class="expanc"><img src="http://127.0.0.1:8000/assets/images/export.png" alt="" class="img-fluid expimg">Export</a></li> -->
            </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td><i class="fas fa-key"></i></td>
                  <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                  <td><i class="fas fa-key"></i></td>
                  <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                  <td><i class="fas fa-key"></i></td>
                  <td><i class="fa fa-trash"></i></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                  <td><i class="fas fa-key"></i></td>
                  <td><i class="fa fa-trash"></i></td>
                </tr>
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
    </div>
  </div>
</div>
<script>
  $(function () {
    $('#example1').DataTable();
  })
</script>

@stop