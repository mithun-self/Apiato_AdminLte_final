@extends('admin.layouts.adminlayout')

@section('page-header')
    Customer Details <small></small>
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
.content {
    display: flow-root;
}
.head-name {
    font-weight: bold;
    font-size: 18px;
}
</style>


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
          <div class="col-md-12">
            <span class="head-name"></span>
          </div>

        <div class="col-md-12 mb-4">
          <div class="col-md-8 no-padding">
            <span class="head-email"></span>
              <span class="head-id"></span>
          </div>

          <div class="col-md-4 text-right">
            <span class="header-right">
              <a href="#" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"><span >Delete</span></i></a>
          </div>
        </div>
               
    {{--<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: right;">
      <a href="#" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-trash"><span >Delete</span></i></a>
    </div>--}}
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="details">
        @include('admin.layouts.customer_details.details_customer')
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="cards">
        @include('admin.layouts.customer_details.cards_customer')
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="payments">
        @include('admin.layouts.customer_details.payments_customer')
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="active_subscriptions">
        @include('admin.layouts.customer_details.subscriptions_customer')
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
    url: "https://staging.payarc.net:9000/api/v1/customers/"+$.urlParam('id'),
    headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig','Accept':'application/json' },
    success: function(data)
    {

       $("span.head-name").html(data.data.name);
       $("span.head-email").html(data.data.email);
       $("span.head-id").html(data.data.id);
    }
  });


});
</script>

@stop