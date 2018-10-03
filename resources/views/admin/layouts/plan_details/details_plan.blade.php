<style>
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
.on_custom {
    width: 47%;
    float: left;
}
select#on_custom_select {
    margin-left: 6%;
}
</style>
  <!-- modal form to create-->
            <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Create New Plan</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
                          </div>
                          <div class="form-group">
                            <label for="currency">Currency:</label>
                          <select name="currency" id="currency" required="" class="form-control" style="height: 34px;">
                              <option value="usd">USD_US Dollar</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="amount" class="form-control" id="amount" name="amount" required="">
                          </div>

                          <div class="form-group">
                            <label for="billing">Billing Interval:</label>
                          <select name="billing" id="billing" required="" class="form-control" style="height: 34px;">
                              <option value="1">Daily</option>
                              <option value="2">Weekly</option>
                              <option value="3">Monthly</option>
                              <option value="4">Yearly</option>
                              <option value="5">Custom</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <input type="on_custom_text" class="on_custom form-control" id="on_custom_text" name="on_custom_text" required="" disabled="">
                          <select name="on_custom_select" id="on_custom_select" required="" class="on_custom form-control" style="height: 34px;" disabled="">
                              <option value="daily">Days</option>
                              <option value="daily">Weeks</option>
                              <option value="daily">Months</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="trial_period">Trail period days:</label>
                            <input type="trial_period" class="form-control" id="trial_period" name="trial_period" required="">
                          </div>

                          <div class="form-group">
                            <label for="statement">Statement desc:</label>
                            <input type="statement" class="form-control" id="statement" name="statement" required="">
                          </div>

                      </div>
                      <div class="modal-footer">
                        
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary" disabled="">Create Plan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
            </div>

            <!-- modal form to create ends -->
<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
					<div class="col-md-6">
						<span>Plan details</span>
					</div>
					<div class="col-md-6" style="text-align: right;">
						<a href="#" data-toggle="modal" data-target="#GSCCModal"><i class="fa fa-edit"><span>Update details</span></i></a>
					</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span>ID</span></li>
						    <li class="list-group-item"><span>Created</span></li>
						    <li class="list-group-item"><span>Name</span></li>
						    <li class="list-group-item"><span>Statement description</span></li>
						    <li class="list-group-item"><span>Trial days</span></li>
					  	</ul>
					 </div>
					 <div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item">l0xogPjVgXjVRrAX</li>
						    <li class="list-group-item">09/07/2018</li>
						    <li class="list-group-item">09/08/2018 to 09/09/2018</li>
						    <li class="list-group-item">eb@eb.com</li>
					  	</ul>
					 </div>
			  	</div>
			</div>
		</div>
</div>


