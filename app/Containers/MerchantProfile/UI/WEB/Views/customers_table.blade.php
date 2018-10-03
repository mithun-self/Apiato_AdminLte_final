@extends('admin.layouts.adminlayout')

@section('page-header')
    Customers <small>Customers</small>
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
.green {
  color: #7BB16D !important; 
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
            <div id="charge_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Create a new payment</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="currency">Currency:</label>
                            <select name="currency" id="currency" required="" class="form-control" style="height: 34px;">
                                <option value="usd">USD_US Dollar</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="amount" class="form-control" id="amount" name="amount" required="">
                          </div>
                          <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="description" class="form-control" id="description" name="description" required="">
                          </div>
                          <div class="form-group">
                            <label for="statement">Statement desc:</label>
                            <input type="statement" class="form-control" id="statement" name="statement" required="">
                          </div>
                          <div class="form-group">
                            <label for="source">Source:</label>
                            <input type="source" class="form-control" id="source" name="source" required="">
                          </div>
                          <div class="form-group">
                            <label for="tip">Tip:</label>
                            <input type="tip" class="form-control" id="tip" name="tip" required="">
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-4">
                                <label for="capture">Capture charge:</label>
                              </div>
                              <div class="col-md-4">
                                <input type="radio" name="capture" value="yes" checked>Yes
                              </div>
                              <div class="col-md-4">
                                <input type="radio" name="capture" value="no">No
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-4">
                                <label for="health_care">Is health care:</label>
                              </div>
                              <div class="col-md-4">
                                <input type="radio" name="health_care" value="yes">Yes
                              </div>
                              <div class="col-md-4">
                                <input type="radio" name="health_care" value="no" checked>No
                              </div>
                            </div>
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Charge customer</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
            </div>
    <!-- modal form to create ends -->
    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>DESCRIPTION</th>
                  <th>PAYMENT METHOD</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a class="green" href="/customer/customer-details/">4xjMNKVMnpVnDpAP</a></td>
                  <td>Siba Prasad Hota
                  </td>
                  <td>prasad2@lemonpeak.com</td>
                  <td>Description</td>
                  <td>1111 12/2020</td>
                  <td><a class="green" href="#" data-toggle="modal" data-target="#charge_modal">Charge</a></td>
                </tr>
                <tr>
                  <td><a class="green" href="/customer/customer-details/">4DPpKjVKj4VnMNxA</a></td>
                  <td>Ankit Kocher
                  </td>
                  <td>anky@anky.com</td>
                  <td>  sept 7</td>
                  <td>1111 11/2022</td>
                  <td><a class="green" href="#" data-toggle="modal" data-target="#charge_modal">Charge</a></td>
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