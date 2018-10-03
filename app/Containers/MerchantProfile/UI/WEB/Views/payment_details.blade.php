
@extends('admin.layouts.adminlayout')

@section('page-header')
    Payment Details <small>obWBMROoRbbOynLD</small>
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
                    <h4 class="modal-title" id="myModalLabel">Customer Account</h4>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" class="form-control" id="delete_row" value="" name="delete_row">
                    <p>This will permanently remove the customer's billing info and immediately cancel any current subscriptions. You won't be able to undo this action.</p>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button id="on_delete" type="button" class="btn btn-primary">Delete</button>
                    </div>
                </div>
                
              </div>
            </div>
            <!-- Delete Modal Ends -->
    @include('admin.layouts.payment_tabs')


    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="details">
        @include('admin.layouts.payment_details.details_payment')
      </div>
    </div>


    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="invoices">
        @include('admin.layouts.payment_details.card_payment')
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="invoices">
        @include('admin.layouts.payment_details.connections_payment')
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="invoices">
        @include('admin.layouts.payment_details.emailhistory_payment')
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="invoices">
        @include('admin.layouts.payment_details.logs_payment')
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="events">
        @include('admin.layouts.customer_details.events_customer')
      </div>
    </div>
    <form action="/env">  
      APP_ENV<br>
      <input type="text" name="app_env" value="APP_ENV">
      <br>
      <br>
      <input type="text" value="{{$old}}" name="app_env_value">
      <br><br>
      <input type="submit" value="Submit">
    </form>
  </div><!-- row -->
</div><!-- container -->
<script>

</script>

@stop