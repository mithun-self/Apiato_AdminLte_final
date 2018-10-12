<style>
.float{
	float: right !important;
}
span.title {
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
<!-- update subcription modal starts -->
<div id="subscription_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="width: 140%;">
			<div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Create a new payment</h4>
            </div>
		<div class="modal-body">
      	<div class="row">
        	<div class="col-sm-12 col-md-6">
          		<div class="form-group typeahead_formcontainer">
            	<label class="col-sm-12 col-md-4 col-form-label">Select customer:</label>
          		</div>
        	</div>

        	<div class="col-sm-12 col-md-6">
          		<div class="form-group " style="margin-bottom: 15px;">

            		<div class="input-selected-details" style="background-color: #d7dce2;padding: 10px;border-radius: 4px;">
              		<p>Customer ID : <span>4ADjpPVP4NVnxKNM</span></p>
              		<p>Email : <span>asutosh@gmail.com</span></p>
            		</div>

          		</div>

        	</div>
      	</div>


      	<div class="row">
        	<div class="col-sm-12 col-md-6">
          		<div class="form-group typeahead_formcontainer ">
	            	<label class="col-sm-12 col-md-4 col-form-label">Add plan :</label>
	            	<div class="col-sm-12 col-md-8 input-label-mar-pad">
	        		<input class="form-control" id="customer" name="customer" type="text"required="">
	            	</div>
          		</div>
        	</div>

	        <div class="col-sm-12 col-md-6">
	          <div class="form-group" style="margin-bottom: 15px;">

	            <div class="input-selected-details" style="background-color: #d7dce2;padding: 10px;border-radius: 4px;">
	              <p>Plan ID : <span></span></p>
	              <p id="plan">Amount : <span></span>
	                <span></span>
	                <span></span>
	                <span></span></p>
	            </div>

	          </div>

	        </div>
      	</div>

      	<div class="row">
	        <div class="col-sm-12 col-md-6">
	          <div class="form-group typeahead_formcontainer">
	            <label class="col-sm-12 col-md-4 col-form-label">Add coupon :</label>
	            <div class="col-sm-12 col-md-8 input-label-mar-pad">
	            <input class="form-control" id="customer" name="customer" type="text">
	            </div>
	          </div>

	        </div>

	        <div class="col-sm-12 col-md-6">
	          <div class="form-group" style="margin-bottom: 15px;">

	            <div class="input-selected-details" style="background-color: #d7dce2;padding: 10px;border-radius: 4px;">
	              <p>Coupon ID : <span class="coupon"></span></p>
	              <p>Redeemed : <span class="coupon"></span></p>
	            </div>

	          </div>

	        </div>

      	</div>


      	<div class="row">
	        <div class="col-sm-12 col-md-6">
	          <div class="form-group">
	            <label class="col-sm-12 col-md-4 col-form-label">Tax :</label>
	            <div class="col-sm-12 col-md-8 input-label-mar-pad">
	              <input class="form-control" name="tax" placeholder="0%" type="number">
	            </div>
	          </div>
	          <div class="form-group end">
	            <label class="col-sm-12 col-md-4 col-form-label subscriptionend">Subscription start :</label>
	            <div class="col-sm-12 col-md-8 input-label-mar-pad ed">
	              <div class="col-md-12 radio">
	                <input checked="" class="radiobtn" name="radio1" type="radio">
	                <span>Start immediately</span>
	              </div>
	              <div class="col-md-12 radio">
	                <input class="rd radiobtn" name="radio1" type="radio">
	                <span>Start after</span>
	                <input class="form-control" id="terminate2" max="999" min="3" name="start_after_days" type="number" maxlength="3" disabled="">
	                <span>days</span>
	              </div>

	            </div>
	          </div>
	          <div class="form-group">
	            <label class="col-sm-12 col-md-4 col-form-label subscriptionend">Subscription end :</label>
	            <div class="col-sm-12 col-md-8 input-label-mar-pad ed">
	              <div class="col-md-12 radio">
	                <input checked="" class="radiobtn" name="radio" type="radio">
	                <span class="nv">Never ends</span>
	              </div>
	              <div class="col-md-12 radio">
	                <input class="rd radiobtn" name="radio" type="radio">
	                  <span class="nv">Ends after</span>
	                  <input class="form-control" id="terminate" max="999" min="3" name="end_after_cycles" type="number"maxlength="3" disabled="">
	                  <span>billing cycles</span>
	                  <br>
	                  <span id="billingcyc"> </span>

	              </div>

	            </div>
	          </div>
	        </div>

	        <div class="col-sm-12 col-md-6">

	          <div class="memo-text">
	            <p><strong>Memo</strong></p>
	            <textarea class="form-control" name="memo" rows="3"></textarea>
	            <p>This will appear on invoices</p>
	          </div>

	        </div>
      	</div>


      	<div class="row">

	        <div  style="background-color: #d7dce2;padding: 10px;border-radius: 4px;" class="col-sm-12 col-md-6">
	          	<div class="form-group input-selected-details">

	              <label class="col-sm-12 col-md-4 col-form-label" id="trail">Trial period :</label>
	              <div class="col-sm-12 col-md-8 input-label-mar-pad">
	                  <span id="trailperiod"></span>
	              </div>
	          	</div>

	        </div>
	        <div class="col-sm-12 col-md-6" id="preview">

	          <div class="preview-text">
	            <h5 ><strong _ngcontent-c21="">Preview</strong></h5>
	            <p >Amount due on first invoice will be
					<span class="ng-star-inserted" style="">$0.00 USD</span>
	            </p>
	          </div>

	        </div>

      	</div>

		</div><!-- modal body ends -->
		<div class="modal-footer">
            <button id="on_submit_save_fee" type="button" class="btn btn-primary">Start subscription</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
</div>
</div>
</div>
<!-- update subscription ends -->
<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
					<div class="col-md-6">
						<span>Details</span>
					</div>
					<div class="col-md-6" style="text-align: right;">
						<a href="#" data-toggle="modal" data-target="#subscription_modal"><i class="fa fa-edit"><span>Update details</span></i></a>
					</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span class="title">ID</span></li>
						    <li class="list-group-item"><span class="title">Created</span></li>
						    <li class="list-group-item"><span class="title">Current period</span></li>
						    <li class="list-group-item"><span class="title">Customer</span></li>
					  	</ul>
					 </div>
					 <div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span class="id"></span></li>
						    <li class="list-group-item"><span class="created"></span></li>
						    <li class="list-group-item"><span class="cur_period"></span></li>
						    <li class="list-group-item"><span class="customer"></span></li>
					  	</ul>
					 </div>
			  	</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
					    	<li class="list-group-item"><span class="title">Tax percent</span></li>
					    	<li class="list-group-item"><span class="title">Discount</span></li>
					    	<li class="list-group-item"><span class="title">Billing method</span></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list-group">
					    	<li class="list-group-item"><span class="tax"></span></li>
					    	<li class="list-group-item"><span class="discount"></span></li>
					    	<li class="list-group-item"><span class="billing"></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
        		<div class="col-sm-12 ">
            		<div class="col-sm-12 col-md-6 no-padding left-heading">
              			<span>Pricing plan</span>
            		</div> 
		            <div class="col-sm-12 col-md-3 left-heading">
		              <span>Quantity</span>
		            </div> 
		            <div class="col-sm-12 col-md-3 left-heading">
		              <span>Total</span>
		            </div>
		        </div>
		    </div> 
		</div>
		<div class="panel-body pricing_plan">
	        		<!-- <div class="row mt-4 pr-detail-text no-margin">
	            		<div class="col-sm-12 col-md-6">

	              		<span>daily plan 1 </span>
	              		<p>$50.00  USD /day</p>
	            		</div> 
		            	<div class="col-sm-12 col-md-3">
							<p>---</p>
		            	</div> 
			            <div class="col-sm-12 col-md-3 no-padding">
			              <p>$50.00  USD /
			                day</p>
			            </div> 
	          		</div>  -->  
	    </div>       
    </div>

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
    headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig','Accept':'application/json' },
    success: function(data)
    {
      
      $.each(data, function(key, value) {
        $.each(this.customer, function(k, v) {
          //$.each(this, function(k, v) {
          	//console.log(v);
            //$("div.all_card").append('<div class="col-md-12 card_body"><div class="col-md-6">'+v.last4digit + ' '+ v.exp_month +"/"+v.exp_year +'</div><div class="col-md-6" style="text-align: right;"><i class="fa fa-trash"><span>Delete</span></i><i class="fa fa-edit"><span>Edit</span></i></div></div>');
            $("span.id").html(value.id);
            $("span.created").html(v.created_at);
            $("span.cur_period").html(value.current_period_start+ ' to ' +value.current_period_end);
            $("span.customer").html(v.email+ '<br>( ' +v.name+' )');
            $("span.tax").html(value.tax_percent+'%');
            $("span.discount").html(value.discount_id);
            $("span.billing").html((value.billing_type == 1) ? 'Charge payment source on file' : '----');
          //});
       });
        $.each(this.plan, function(k, v) {
        	$("div.pricing_plan").append('<div class="row mt-4 pr-detail-text no-margin"><div class="col-sm-12 col-md-6"><span>'+v.name+'</span><p>$'+v.amount/100+' '+v.currency +' /'+v.interval+'</p></div><div class="col-sm-12 col-md-3"><p>---</p></div><div class="col-sm-12 col-md-3 no-padding"><p>$'+v.amount/100+' '+v.currency +' /'+v.interval+'</p></div></div>');
        });
      }); 
    }
  });


});
</script>

