@section('css')
<style>
.float{
	float: right !important;
}
span {
    font-size: 14px;
    font-weight: bolder;
}
</style>
@stop

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




<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
					<div class="col-md-6">
						<span style="font-size: 14px;font-weight: bolder;">Active Subscriptions</span>
					</div>
					<div class="col-md-6" style="text-align: right;">
						<a href="#" data-toggle="modal" data-target="#subscription_modal"><i class="fa fa-plus"><span style="font-size: 14px;font-weight: bolder;">Add Subscriptions</span></i></a>
					</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					daily plan 1($50 USD/ day)
				</div>
				<div class="col-md-6">
					Active
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					daily plan 1($50 USD/ day)
				</div>
				<div class="col-md-6">
					Active
				</div>
			</div>
		</div>
</div>
