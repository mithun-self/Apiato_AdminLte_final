@extends('admin.layouts.adminlayout')

@section('page-header')
    Coupon details <small>lzADl1YMgYg5MjW5</small>
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
.parent_div {
    background-color: #f5f5f5;
    border: 2px solid #ededed;
    border-radius: 10px;
    width: 100%;
    min-height: 100%;
    margin-bottom: 20px;
    padding: 8px;
}
span {
    margin: 3px;
}
.top_menus_table li{
  float: left;
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
  <div class="row parent_div">

    <!-- Delete Modal -->
            <div class="modal fade" id="delete_modal" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete coupon</h4>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" class="form-control" id="delete_row" value="" name="delete_row">
                    <p>Delete this coupon.</p>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button id="on_delete" type="button" class="btn btn-primary">Ok</button>
                    </div>
                </div>
                
              </div>
            </div>
            <!-- Delete Modal Ends -->
                <div class="col-md-6">
                    @include('admin.layouts.subscriptions_tabs')
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="text-align: right;">
                  <a href="#" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"><span >Delete coupon</span></i></a>
                </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="events">
        @include('admin.layouts.coupon_details.details_coupon')
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="events">
        @include('admin.layouts.customer_details.events_customer')
      </div>
    </div>
  </div><!-- row -->
</div><!-- container -->
<script>

</script>

@stop