@extends('admin.layouts.adminlayout')

@section('page-header')
    Payout Details <small>  </small>
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

.float{
  float: right !important;
}
span {
    font-size: 14px;
    font-weight: bolder;
}
.bill {
  margin-top:6px; 
}
li.list-group-item {
  border: none;
}

</style>
@stop

@section('content')

<div class="container col-sm-9 offset-sm-3 col-md-12 offset-md-2">
  @if(Session::has('success_msg'))
    <div class="alert alert-dismissable alert-sucess">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      {{Session::get('success_msg')}}
    </div>
  @endif
  <div class="row parent_div">


  <div class="row">
        <div class="col-md-6">
            <ul class="list-group top_menus_table">
            <li><a href="/balance/balance-report" class="expanc">Balance</a></li>
            <li style="margin-left: 26px;"><a href="/balance/payout-list" class="expanc">Payouts</a></li>
            <li style="margin-left: 26px;"><a href="/balance/transaction-list" class="expanc">Transactions</a></li>
            </ul>
        </div>
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="text-align: right;">
                 
      </div>
  </div>


                

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
              <div class="col-md-6">
                <span>Payout details</span>
              </div>
              <div class="col-md-6" style="text-align: right;">
                
              </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <ul class="list-group">
                  <li class="list-group-item"><span>Date paid</span></li>
                <li class="list-group-item"><span>Description</span></li>
                    <li class="list-group-item"><span>Amount</span></li>
                    <li class="list-group-item"><span>ID</span></li>
                  </ul>
               </div>
               <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">08/21/2018</li>
                    <li class="list-group-item">Payout created by PayArc</li>
                    <li class="list-group-item">$ 289.23</li>
                    <li class="list-group-item">qyWG69y1Wr9XnV2e</li>
                  </ul>
               </div>
              </div>
          </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
              <div class="col-md-6">
                <span>Bank account details</span>
              </div>
              <div class="col-md-6" style="text-align: right;">
                
              </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="col-md-6">
            <div class="row">

            </div>
          </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="events">

      </div>
    </div>
  </div><!-- row -->
</div><!-- container -->
<script>

</script>

@stop