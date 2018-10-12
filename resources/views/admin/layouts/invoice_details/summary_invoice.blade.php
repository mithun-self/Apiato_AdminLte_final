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
thead {
    background-color: #e4e4e4;
    padding: 4px 0;
}
table.table {
    font-weight: 600;
    background-color: #F8F8F8;
    border: 1px solid #CBD2D9;
    border-radius: 10px;
    border-collapse: inherit;
    border-spacing: 0;
}
</style>

<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
					<div class="col-md-6">
						<span>Summary</span>
					</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span class="title">Billed to</span></li>
						    <li class="list-group-item"><span class="title">Billing address</span></li>
					  	</ul>
					 </div>
					 <div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span class="billed_to"></span></li>
						    <li class="list-group-item"><span class="bil_addr"></span></li>
					  	</ul>
					 </div>
			  	</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
					    	<li class="list-group-item"><span class="title">Invoice number</span></li>
					    	<li class="list-group-item"><span class="title">Billing method</span></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list-group">
					    	<li class="list-group-item"><span class="inv_no"></span></li>
					    	<li class="list-group-item"><span class="bil_meth"></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</div>
	<div class="row">
          <div class="col-sm-12 no-padding-l-r mrg-top-20">

            <div  class="payment-table">
              <table  class="table">
                <thead>
                <tr>
                  <th>DESCRIPTION</th>
                  <th class="left-space1">QTY</th>
                  <th class="left-space">UNIT PRICE</th>
                  <th class="left-space2">AMOUNT</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-bottom">
                  <td class="text-left sum_date" colspan="4">
                  </td>
                </tr>
                <tr class="border-bottom">
                  <td class="sum_name"></td>
                  <td class="left-space1 sum_qty"></td>
                  <td class="left-space sum_unit" id="amount"></td>
                  <td class="left-space2 sum_amount"></td>

                </tr>
                <tr>
                  <td></td>
                  <td class="left-space1"></td>
                  <td class="left-space font-light">SubTotal</td>
                  <td class="left-space2 sum_subtotal"></td>
                </tr>
       
                <tr class="space-top">
                  <td></td>
                  <td class="left-space1"></td>
                  <td class="left-space font-light">Total</td>
                  <td class="left-space2 sum_total"></td>
                </tr>
                <tr class="space-top">
                  <td></td>
                  <td class="left-space1"></td>
                  <td class="left-space font-light">Amount paid</td>
                  <td class="left-space2 sum_amountpaid"></td>
                </tr>
                <tr class="space-top">
                  <td></td>
                  <td class="left-space1"></td>
                  <td class="left-space">Amount due</td>
                  <td class="left-space2 sum_amountdue"></td>
                </tr>
                </tbody>
              </table>
            </div>

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
    url: "https://staging.payarc.net:9000/api/v1/invoices/"+$.urlParam('id')+"?include=subscriptions,discounts",
    headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig','Accept':'application/json' },
    success: function(data)
    {
      $.each(data, function(key, value) {
            $('span.billed_to').html(this.customer.data.email+'<br>( '+this.customer.data.name+' )');
            $('span.bil_addr').html(this.customer.data.address_1+'<br>'+this.customer.data.address_2+'<br>'+this.customer.data.city+' '+this.customer.data.state+' '+this.customer.data.country);
            $('span.inv_no').html(this.invoice_number);
            $('span.bil_meth').html((this.billing == 1)? 'AUTO' : 'NA');
            var to = "  -   ";
            $('td.sum_date').html(this.period_start+''+to+''+this.period_end);
            $('td.sum_name').html(this.subscriptions.data.plan.data.name);
            $('td.sum_qty').html((this.quantity > 0)? this.quantity : 1);
            $('td.sum_unit').html('$'+(this.plan_amount/100).toFixed(2)+' '+this.currency);
            $('td.sum_amount').html('$'+(this.plan_amount/100).toFixed(2)+' '+this.currency);
            $('td.sum_subtotal').html('$'+(this.subtotal/100).toFixed(2)+' '+this.currency);
            $('td.sum_total').html('$'+(this.subtotal/100).toFixed(2)+' '+this.currency);
            $('td.sum_amountpaid').html('$'+(this.amount_paid/100).toFixed(2)+' '+this.currency);
            $('td.sum_amountdue').html('$'+(this.amount_due/100).toFixed(2)+' '+this.currency);
             
      }); 
    }
  });


});
</script>

