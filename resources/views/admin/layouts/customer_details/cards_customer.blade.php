<style>
.float{
	float: right !important;
}
span {
    font-size: 14px;
    font-weight: bolder;
}
.card_body{
	padding: 19px;
	border: 1px solid #CBCBCB;
	border-radius: 15px;
	margin: 2%;
}

</style>
<!-- modal form to update-->
            <div id="card_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Change default card</h4>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                            <label for="country">Source:</label>
                            <select name="country" id="country" required="" class="form-control" style="height: 34px;">
                                <option value="usa">1111 02/2022</option>
                            </select>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Change default card</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
            </div>
    <!-- modal form to update ends -->
    <!-- modal form to add card -->
            <div id="add_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Add a card</h4>
                      </div>
                      <div class="modal-body">
                      	<div class="form-group">
                            <label for="card_no">Card number:</label>
                            <input type="text" class="form-control" id="card_no" name="card_no" required="">
                        </div>
                        <div class="form-group">
                            <label for="card_no">Expiry/Cvc:</label>
                            <div class="form-group">
	                            <input type="text" style="width: 47%;float: left;" class="on_custom form-control" id="card_yr" name="card_yr" required="">
	                            <input type="text" style="width: 47%;float: left;margin-left: 6%;" class="on_custom form-control" id="card_cvc" name="card_cvc" required="">
	                        </div>
                        </div>
                        <div class="form-group">
                            <label for="cardholder">Cardholder name:</label>
                            <input type="text" class="form-control" id="cardholder" name="cardholder" required="">
                        </div>
                        <div class="form-group">
                            <label for="street">Street:</label>
                            <input type="text" class="form-control" id="street" name="street" required="">
                        </div>
                        <div class="form-group">
                            <label for="street_2">Street(line2):</label>
                            <input type="text" class="form-control" id="street_2" name="street_2" required="">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city" required="">
                        </div>
                        <div class="form-group">
                            <label for="zip">Zip/Postal:</label>
                            <input type="text" class="form-control" id="zip" name="zip" required="">
                        </div>
                        <div class="form-group">
                            <label for="state">State/Province:</label>
                            <input type="text" class="form-control" id="state" name="state" required="">
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" id="country" name="country" required="">
                        </div>
                    </div>
                      <div class="modal-footer">
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Add card</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
            </div>
    <!-- modal form to add card ends -->
<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
					<div class="col-md-6">
						<span>Cards</span>
					</div>
					<div class="col-md-6" style="text-align: right;">
						<a href="#" data-toggle="modal" data-target="#card_modal"><i class="fa fa-edit"><span>Default Card</span></i></a>
						<a href="#" data-toggle="modal" data-target="#add_modal"><i class="fa fa-plus"><span>Add Card</span></i></a>
					</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="row card_body">
				<div class="col-md-6">
					0051 05/2036
				</div>
				<div class="col-md-6" style="text-align: right;">
					<i class="fa fa-trash"><span>Delete</span></i>
					<i class="fa fa-edit"><span>Edit</span></i>
				</div>
			</div>
			<div class="row card_body">
				<div class="col-md-6">
					0051 05/2036
				</div>
				<div class="col-md-6" style="text-align: right;">
					<i class="fa fa-trash"><span style="font-size: 14px;font-weight: bolder;">Delete</span></i>
					<i class="fa fa-edit"><span style="font-size: 14px;font-weight: bolder;">Edit</span></i>
				</div>
			</div>
		</div>
</div>