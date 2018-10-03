@extends('admin.layouts.adminlayout')

@section('page-header')
    Disputes <small>disputes</small>
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
li {
  list-style-type: none;
}
a.expanc.active {
    color: black;
    font-weight: bold;
}
.top_menus_table li{
  float: left;
}
#dropdown-basic .container-fluid .row:nth-child(2){
  display: none;
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
      
    </div>
    <div class="col-md-6">
      <div class="subscription_filters pull-right">
        @include('admin.layouts.subscription_filters')
      </div>
    </div>
  </div>
  <div class="row">


    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              @include('admin.layouts.payment_tabs')
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>DISPUTE ID</th>
                  <th>TRANSACTION ID</th>
                  <th>KIND</th>
                  <th>REASON</th>
                  <th>STATUS</th>
                  <th>RECEIVED DATE</th>
                  <th>REPLY BEFORE</th>
                  <th>DISPUTED DATE</th>
                  <th>ACCEPTED</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>----</td>
                  <td>----</td>
                  <td>----</td>
                  <td>----</td>
                  <td>----</td>
                  <td>----</td>
                  <td>----</td>
                  <td>----</td>
                  <td>----</td>

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