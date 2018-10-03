@extends('admin.layouts.adminlayout')

@section('page-header')
    Subscriptions <small>Invoices</small>
@stop

@section('css')
<style>
.submit_button {
    padding: 23px;
}
.expanc {
  color: #949bad;
  font-size: 20px;
}
li {
    list-style-type: none;
}
.top_menus_table li{
  float: left;
}
a.expanc.active {
    color: black;
    font-weight: bold;
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

    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              @include('admin.layouts.subscriptions_tabs')
              <div class="row">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>AMOUNT</th>
                    <th>STATUS</th>
                    <th>BILLING</th>
                    <th>CUSTOMER</th>
                    <th>NUMBER</th>
                    <th>CREATED</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a class="green" href="/subscription/invoice-details">$1,000.00 USD</a></td>
                    <td>Paid</td>
                    <td>AUTO</td>
                    <td>Siba Prasad Hota</td>
                    <td>XB8W-0006</td>
                    <td>09/14/2018</td>
                    </tr>
                  <tr>
                    <td><a class="green" href="/subscription/invoice-details">4week_no_trial</a></td>
                    <td>Paid</td>
                    <td>AUTO</td>
                    <td>Bradley Martin</td>
                    <td>5O9-0122</td>
                    <td>09/14/2018</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
    </div>
</div>
<script>
  $(function () {
    $('#example1').DataTable();
  })
</script>

@stop