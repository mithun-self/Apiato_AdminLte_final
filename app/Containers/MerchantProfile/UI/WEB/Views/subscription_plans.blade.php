@extends('admin.layouts.adminlayout')

@section('page-header')
    Subscriptions <small>Plans</small>
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
.on_custom {
    width: 47%;
    float: left;
}
select#on_custom_select {
    margin-left: 6%;
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
                        <h4 class="modal-title" id="myModalLabel">Create New Plan</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
                          </div>
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
                            <label for="billing">Billing Interval:</label>
                          <select name="billing" id="billing" required="" class="form-control" style="height: 34px;">
                              <option value="1">Daily</option>
                              <option value="2">Weekly</option>
                              <option value="3">Monthly</option>
                              <option value="4">Yearly</option>
                              <option value="5">Custom</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <input type="on_custom_text" class="on_custom form-control" id="on_custom_text" name="on_custom_text" required="" disabled="">
                          <select name="on_custom_select" id="on_custom_select" required="" class="on_custom form-control" style="height: 34px;" disabled="">
                              <option value="daily">Days</option>
                              <option value="daily">Weeks</option>
                              <option value="daily">Months</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="trial_period">Trail period days:</label>
                            <input type="trial_period" class="form-control" id="trial_period" name="trial_period" required="">
                          </div>

                          <div class="form-group">
                            <label for="statement">Statement desc:</label>
                            <input type="statement" class="form-control" id="statement" name="statement" required="">
                          </div>

                      </div>
                      <div class="modal-footer">
                        
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary" disabled="">Create Plan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
                    <th>PLAN</th>
                    <th>COST</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a class="green" href="/plan/plan-details">1000</a></td>
                    <td>$1,000.00 USD / every 1 year(s) </td>
                    </tr>
                  <tr>
                    <td><a class="green" href="/plan/plan-details">4week_no_trial</a></td>
                    <td>$40.00 USD / every 4 week(s)</td>
                  </tr>
                </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
    </div>
</div>
<script>
$(document).ready(function(){
  $(function () {
    $('#example1').DataTable();
  })

    $('select#billing').on('change', function() {
      if(this.value == 5){
        $('#on_custom_text, #on_custom_select').prop("disabled", false);
      }else{
        $('#on_custom_text, #on_custom_select').prop("disabled", true);
      }
    });

});
</script>

@stop