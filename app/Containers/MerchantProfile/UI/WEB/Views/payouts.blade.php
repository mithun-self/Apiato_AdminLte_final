@extends('admin.layouts.adminlayout')

@section('page-header')
    Payouts <small></small>
@stop

@section('css')
<style>

.top_menus_table li {
    float: left;
}
.expanc {
    color: #949bad;
    font-family: Montserrat-Regular;
    font-size: 20px;
}
li {
    list-style-type: none;
}
.green {
  color: green !important;
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
        <div class="col-md-6">
            <ul class="list-group top_menus_table">
            <li><a href="/balance/balance-report" class="expanc">Balance</a></li>
            <li style="margin-left: 26px;"><a href="/balance/payout-list" class="expanc">Payouts</a></li>
            <li style="margin-left: 26px;"><a href="/balance/transaction-list" class="expanc">Transactions</a></li>
            </ul>
        </div>
        <div class="col-md-6 text-right right_table">
        </div>
  </div>

  <div class="row">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th></th>
                  <th>AMOUNT</th>
                  <th>BANK</th>
                  <th>DATE</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a class="green" href="/balance/payout-details"><i class="fas fa-exchange-alt fa-rotate-90"></i></a></td>
                  <td>$289.23 USD
                  </td>
                  <td></td>
                  <td>08/21/2018</td>
                </tr>
                <tr>
                  <td><a class="green" href="/balance/payout-details"><i class="fas fa-exchange-alt fa-rotate-90"></i></a></td>
                  <td>$112.32 USD
                  </td>
                  <td></td>
                  <td>08/21/2018</td>
                </tr>
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
    </div>
  </div>
</div>
@stop
@section('js')
<script>
  $(function () {
    $('#example1').DataTable();
  })
</script>

@stop