@extends('admin.layouts.adminlayout')

@section('page-header')
    Subscriptions <small>Subscriptions</small>
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
.green {
    color: #7BB16D !important;
}
a.expanc.active {
    color: black;
    font-weight: bold;
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
  

    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              
                @include('admin.layouts.subscriptions_tabs')
              
              <div class="row">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>CUSTOMER</th>
                    <th>STATUS</th>
                    <th>BILLING</th>
                    <th>PLANS</th>
                    <th>CREATED</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a class="green" href="/subscription/subscription-details/">eb@eb.com</a></td>
                    <td>Active</td>
                    <td>AUTO</td>
                    <td>dai<a class="green" href="/subscription/subscription-details/"lyplan ($123 USD /day)</td>
                    <td>09/14/2018 11:23</td>
                  </tr>
                  <tr>
                    <td><a class="green" href="">eb@eb.com</a></td>
                    <td>Active</td>
                    <td>AUTO</td>
                    <td>ads ($21 USD /day)</td>
                    <td>09/14/2018 10:23</td>
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