@extends('admin.layouts.adminlayout')

@section('page-header')
    Balance <small></small>
@stop

@section('css')
<style>
.card {
    height: 100%;
    width: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: solid 2px #dfdfdf;
    padding: 2% 2% 0 2%;
    background-color: #F8F8F8;
    border-radius: 9px;
    line-height: 29px;

}
.heading {
    font-size: 15px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
}
.sub-heading {
    font-size: 12px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
}
.bottom {
    margin-top: 1%;
}
.divider {
    border: solid 1px #dfdfdf;
}
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
    <div class="card">
    <div class="row heading-row">
    <div class="heading col-md-12 ">
      USD Balance
    </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xs-6 col-sm-6 col-xl-6">
        <span  class="sub-heading">On the way to your bank</span> 
      </div>
      <div  class="col-md-6 col-xs-6 col-sm-6 col-xl-6 right-pull"> 
        <span class="green">--</span> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xs-6 col-sm-6 col-xl-6">
        <span class="sub-heading">Funds on hold</span> 
      </div>
      <div class="col-md-6 col-xs-6 col-sm-6 col-xl-6 right-pull"> 
        <span class="green">--</span> 
      </div>
    </div>
    <div class="divider"></div>
    <div class="row bottom">
      <div class="col-md-6 col-xs-6 col-sm-6 col-xl-6">
        <span class="heading-total">Total</span> </div>
      <div class="col-md-6 col-xs-6 col-sm-6 col-xl-6 right-pull">
        <span class="green-total"> USD</span> 
      </div>
    </div>
  </div>
  </div>
</div>
@stop
@section('js')
<script>

</script>

@stop