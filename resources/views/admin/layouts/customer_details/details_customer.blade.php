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
</style>
    <!-- modal form to update-->
            <div id="update_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Update Customer Details</h4>
                      </div>
                      <div class="modal-body">
                      	<div class="row">
					        <div class="col-md-12">
					          <p class="heading">Account information</p>
					        </div>
					     </div>
                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required="">
                          </div>
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" required="">
                          </div>
                          <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" name="description" required="">
                          </div>
                          <div class="row">
					        <div class="col-md-12">
					          <span class="heading">Contact preferences</span>
					        </div>
					      </div>
					      <div class="row">
					        <div class="col-md-12">
					          <p class="data">If you opt to email receipts or invoices to this customer they'll be sent to the following
					            email addresses.</p>
					        </div>
					      </div>
                          <div class="form-group">
                            <label for="email_to">Send email to:</label>
                            <input type="text" class="form-control" id="email_to" name="email_to" required="">
                          </div>
                          <div class="form-group">
                            <label for="tip">CC:</label>
                            <input type="text" class="form-control" id="cc" name="cc" required="">
                          </div>
                          <div class="form-group">
                            <label for="country">Country:</label>
                            <select name="country" id="country" required="" class="form-control" style="height: 34px;">
                                <option value="usa">United States</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="tip">Billing address:</label>
                            <input type="text" class="form-control bill" id="addr_1" name="addr_1" required="">
                            <input type="text" class="form-control bill" id="addr_2" name="addr_2" required="">
                            <input type="text" class="form-control bill" id="addr_3" name="addr_3" required="">
                            <input type="text" class="form-control bill" id="addr_4" name="addr_4" required="">
                            <input type="text" class="form-control bill" id="addr_5" name="addr_5" required="">
                          </div>
                          <div class="form-group">
                            <label for="tip">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required="">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Update details</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
            </div>
    <!-- modal form to update ends -->
<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
					<div class="col-md-6">
						<span>Details</span>
					</div>
					<div class="col-md-6" style="text-align: right;">
						<a href="#" data-toggle="modal" data-target="#update_modal"><i class="fa fa-edit"><span>Update details</span></i></a>
					</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="col-md-6">
				<span>Account information</span>
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span>ID</span></li>
						    <li class="list-group-item"><span>Created</span></li>
						    <li class="list-group-item"><span>Email</span></li>
						    <li class="list-group-item"><span>Description</span></li>
					  	</ul>
					 </div>
					 <div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span class="id"></span></li>
						    <li class="list-group-item"><span class="created"></span></li>
						    <li class="list-group-item"><span class="email"></span></li>
						    <li class="list-group-item"><span class="description"></span></li>
					  	</ul>
					 </div>
			  	</div>
			</div>
			<div class="col-md-6">
				<span>Invoicing settings</span>
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
					    	<li class="list-group-item"><span>Send invoices to</span></li>
					    	<li class="list-group-item"><span>Address</span></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list-group">
					    	<li class="list-group-item"><span class="invoices_to"></span></li>
					    	<li class="list-group-item"><span class="address"></span></li>
						</ul>
					</div>
				</div>
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
    url: "https://staging.payarc.net:9000/api/v1/customers/"+$.urlParam('id'),
    headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig','Accept':'application/json' },
    success: function(data)
    {

       $("span.id").html(data.data.id);
       $("span.created").html(data.data.created_at);
       $("span.email").html(data.data.email);
       $("span.description").html(data.data.description);
       $("span.invoices_to").html(data.data.email);
       $("span.address").html(data.data.address_1+'</br>'+data.data.address_2+'</br>'+data.data.city);
       //$("span.address").text(data.data.address_2);
       //$("span.address").text(data.data.city);
    }
  });


});
</script>