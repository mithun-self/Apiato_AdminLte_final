<style>
.float{
	float: right !important;
}
span {
    font-size: 14px;
    font-weight: bolder;
}
.tax {
    margin-top: 8px !important;
}
</style>


<div id="invoices_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="width: 140%;">
			<div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add invoice</h4>
            </div>
			<div class="modal-body">
      			<div class="">
					<div class="">
	            		<div class="col-md-12" style="background-color: #e4e4e4;box-shadow: none;border-radius: 5px;max-height: 25px;margin-top: 2%;padding: 24px;line-height: 0;">
	              			<span>Customer details</span>
	            		</div>
          			</div>

			        <div class="col-md-12">
			            <div class="col-md-6">
			              <div class="">
			                <label class="col-md-5 col-form-label invoiceHeading ">
			                  ID:
			                </label>
			                <label class="col-md-7 col-form-label customerData">
			                  4ADjpPVP4NVnxKNM
			                </label>
			              </div>
			              <div class="">
			                <label class="col-md-5 col-form-label invoiceHeading ">
			                  Email:
			                </label>
			                <label class="col-md-7 col-form-label customerData">
			                  asutosh@gmail.com
			                </label>
			              </div>
			              <div class="">
			                <label class="col-md-5 col-form-label invoiceHeading ">
			                  Description:
			                </label>
			                <label class="col-md-7 col-form-label customerData">
			                  asdascc
			                </label>
			              </div>
			            </div>
			            <div class="col-md-6">
			              <div class="">
			                <label class="col-md-5 col-form-label invoiceHeading ">
			                  Send invoice to:
			                </label>
			                <label class="col-md-7 col-form-label invoiceData">
			                  asutosh@gmail.com
			                </label>
			              </div>
			            </div>
			        </div>
      			</div>
      			<div class=" no-margin">
		          <div class="">
		            <div class="col-md-12 left-heading" style="background-color: #e4e4e4;box-shadow: none;border-radius: 5px;max-height: 25px;margin-top: 2%;padding: 24px;line-height: 0;">
		              <span >Invoice items</span>
		            </div>
		          </div>
      			</div>
			    <div class=" no-margin">
			        <label class="col-md-5 col-form-label invoiceHeading ">
			          Description
			        </label>
			        <label class="col-md-2 col-form-label invoiceHeading ">
			          Qty
			        </label>
			        <label class="col-md-2 col-form-label invoiceHeading ">
			          Unit price
			        </label>
			        <label class="col-md-2 col-form-label invoiceHeading ">
			          Amount
			        </label>
			        <label class="col-md-1 col-form-label ">
			        </label>
			    </div>
		      	<div class=" no-margin">
			        <div class="col-md-5">
			          <div class="form-group">
			            <input class="form-control" id="description" name="description" required="" type="text">
			          </div>
			        </div>
			        <div class="col-md-2">
			          <div class="form-group">
			            <input class="form-control" id="qty" min="0" name="qty" required="" type="number">
			          </div>
			        </div>
			        <div class="col-md-2">
			          <div class="form-group">
			            <input class="form-control" id="unit" min="0" name="unit" required="" type="number">
			          </div>
			        </div>
			        <label class="col-md-2 col-form-label">
			          $0.00
			        </label>
		      	</div>
		      	<div class="row no-margin" style="clear: both;">
        
			        <label class="col-md-2">
			          Subtotal
			        </label>
			        <label class="col-md-7 col-form-label"></label>
			        <label class="col-md-2 col-form-label invoiceData">
			          
			        </label>
			        <label class="col-md-1 col-form-label "></label>
			    </div>
		      	<div class="row no-margin" id="disrow">
			        <label class="col-md-5 col-form-label ">
			        </label>
			        <label class="col-md-2 col-form-label invoiceHeading d1">
			          Discount
			        </label>
			        <input class="col-md-2" id="customer" name="customer" type="text">
			        <label class="col-md-2 col-form-label">$ -</label>
			        <label class="col-md-1 col-form-label"></label>

		      	</div>

		      	<div class="row no-margin">
			        <label class="col-md-5 col-form-label ">
			        </label>
			        <div class="col-md-2 col-form-label invoiceHeading t1 tax">
			          Tax
			        </div>
			        <input class="col-md-2 tax" id="tax" min="0" name="tax" type="number">
			        </label>
			        <label class="col-md-2 col-form-label invoiceData t1 tax">$0.00
			        </label>
			        <div class="col-md-1  "></div>
		      	</div>

		      	<div class=" no-margin">
			        <label class="col-md-5 col-form-label ">
			        </label>
			        <div class="col-md-2 invoiceHeading to1">
			          Total
			        </div>
			        <label class="col-md-2 col-form-label invoiceData"></label>
			        <label class="col-md-2 col-form-label invoiceData">$0.00
			        </label>
			        <div class="col-md-1"></div>
		      	</div>

			    <div class=" no-margin">
			        <div class="col-md-5">
			          <div class="form-group">
			            <label class="invoiceHeading">Memo</label>
			            <textarea class="form-control ng-untouched ng-pristine ng-valid" id="memo" name="memo" rows="3"></textarea>
			          </div>
			        </div>
			    </div>
			</div><!-- modal body ends -->
			<div class="modal-footer">
            <button id="on_submit_save_fee" type="button" class="btn btn-primary">Create invoice</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
		</div>
	</div>
</div>



<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
					<div class="col-md-6">
						<span style="font-size: 14px;font-weight: bolder;">Invoices</span>
					</div>
					<div class="col-md-6" style="text-align: right;">
						<a href="#" data-toggle="modal" data-target="#invoices_modal"><i class="fa fa-plus"><span style="font-size: 14px;font-weight: bolder;">Add Invoice</span></i></a>
					</div>
			</div>
		</div>
		<div class="panel-body">
			 <table class="table">
                <thead>
                <tr>
                  <th class="amount">AMOUNT</th>
                  <th class="status"></th>
                  <th class="invoice_number">INVOICE NUMBER</th>
                  <th class="customer">CUSTOMER</th>
                  <th class="payment">PAYMENT DUE</th>
                  <th class="created"><a href="#" data-toggle="modal" data-target="#subscription_modal">CREATED</th>
                </tr>
                </thead>
                <tbody>
                	<td class="amount">----</td>
                	<td class="amount">----</td>
                	<td class="amount">----</td>
                	<td class="amount">----</td>
                	<td class="amount">----</td>
                </tbody>
            </table>
		</div>
</div>
