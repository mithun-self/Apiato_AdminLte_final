@extends('admin.layouts.adminlayout')

@section('page-header')
    Merchant <small>Account Users</small>
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
                        <h4 class="modal-title" id="myModalLabel">Create Merchant</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
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
                  <th>Merchant Name</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Merchant1</td>
                  <td><i class="fa fa-pause"></i></td>
                  <td><i class="fas fa-key"></i></td>
                  <td><i class="fa fa-trash"></i></td>
                  <td><i class="fa fa-sign-in"></i></td>
                </tr>
                <tr>
                  <td>Merchant2</td>
                  <td><i class="fa fa-pause"></i></td>
                  <td><i class="fas fa-key"></i></td>
                  <td><i class="fa fa-trash"></i></td>
                  <td><i class="fa fa-sign-in"></i></td>
                </tr>
                <tr>
                  <td>Merchant3</td>
                  <td><i class="fa fa-pause"></i></td>
                  <td><i class="fas fa-key"></i></td>
                  <td><i class="fa fa-trash"></i></td>
                  <td><i class="fa fa-sign-in"></i></td>
                </tr>
                <tr>
                  <td>Merchant4</td>
                  <td><i class="fa fa-pause"></i></td>
                  <td><i class="fas fa-key"></i></td>
                  <td><i class="fa fa-trash"></i></td>
                  <td><i class="fa fa-sign-in"></i></td>
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