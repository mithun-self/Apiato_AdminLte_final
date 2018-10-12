@extends('admin.layouts.adminlayout')

@section('page-header')
    Subscription Details <small><span class="head_details"></span></small>
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
.content {
    display: flow-root;
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
                    <h4 class="modal-title" id="myModalLabel">Delete subscription</h4>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" class="form-control" id="delete_row" value="" name="delete_row">
                    <p>Delete this subscription.</p>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button id="on_delete" type="button" class="btn btn-primary">Delete</button>
                    </div>
                </div>
                
              </div>
            </div>
            <!-- Delete Modal Ends -->
                <div class="col-md-6">
                    @include('admin.layouts.subscriptions_tabs')
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="text-align: right;">
                  <a href="#" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"><span >Delete subscription</span></i></a>
                </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="details">
        @include('admin.layouts.subscription_details.details_subscription')
      </div>
    </div>


    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="invoices">
        @include('admin.layouts.customer_details.invoices_customer')
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
  $(document).ready(function(){


$.urlParam = function(name){
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  return results[1] || 0;
}

$.ajax
  ({
    type: "GET",
    url: "https://staging.payarc.net:9000/api/v1/subscriptions/"+$.urlParam('id')+'?include=customer',
    headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBiZmIzNzFmYTBhNGVmMjNiNWMyOTIxMmM3ZGI5MWZjNWRjYWUzYjM0ZGY3MjYxMjAxZGNkY2VlY2EyMmQ0MTE1Y2M3ODkxMDUyYWY3OWJiIn0.eyJhdWQiOiIyIiwianRpIjoiMGJmYjM3MWZhMGE0ZWYyM2I1YzI5MjEyYzdkYjkxZmM1ZGNhZTNiMzRkZjcyNjEyMDFkY2RjZWVjYTIyZDQxMTVjYzc4OTEwNTJhZjc5YmIiLCJpYXQiOjE1MzkzMjU3ODIsIm5iZiI6MTUzOTMyNTc4MiwiZXhwIjoxODU0Njg1NzgyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.svZMzQP_0fS-JIiAY1ZuFrruQih8ifuR0MIy476VF4XooGDTTJ4P0TgdzgMbrocpdsmQl3yZQEooW-gQFxwcJXAEzt_nt8LA0kNmF-KzPnIykYoEGcAjfwqf3n3EkgxOa0oqu9xSTnsdmQAckPFy3j0ZyRYfy6or8c0Uaz5aV2ajHaR7mlZ_ua4kIG-GBH1Sl08FJAz4BYY6_EyDeP4GnGq045MaToODBBT_k3Woh9YQCdHLHzpZNAMzcXnNkEYhL-tLmxlAUdyEeUmNmf6LzsBcffG_QpyOkyrfbwdyBBXLXjfwkQr7JsiZy4a7hA6SZeGaa7t5CnxuduIzWfrvCv5Zp3j_q9K172QvwuJtByTQAqT-dPkf_4ZFqzF6-cwVGyXtyuIJfUMSFGU-HHj4GD-hKiJoEXC-PrFqHSOyuFw6_dCByf0qqK0z4TaU2f1v6-ikXwpqdkeJXHJeK-WtNz8QyPyGfitbGH5SOsnAOD6etQAJg-kwfKZJLrHhmo229pj1bMjHvMVemkV1V4EveVko-bRmdfBNLOwgFt3Z5vmLw39LGCnNLpD-ckJGtgnmxEhEsuq9Qai7mb8VDNS23DvVcO374t5CtHhh28RXJm-I-7VJhOp-mSLkvsA7M8rQBAQ7eOUMY71WcnTpDWS5L0HvEP_WdoxRW8IlegXwELU','Accept':'application/json' },
    success: function(data)
    {
      $.each(data, function(key, value) {
        //$.each(this.card, function(k, v) {
         // $.each(this, function(k, v) {
            //$("div.all_card").append('<div class="col-md-12 card_body"><div class="col-md-6">'+v.last4digit + ' '+ v.exp_month +"/"+v.exp_year +'</div><div class="col-md-6" style="text-align: right;"><i class="fa fa-trash"><span>Delete</span></i><i class="fa fa-edit"><span>Edit</span></i></div></div>');
            $("span.head_details").html(value.id);
         // });
       //});
      }); 
    }
  });


});
</script>

@stop