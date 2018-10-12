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
						    <li class="list-group-item"><span class="title">ID</span></li>
						    <li class="list-group-item"><span class="title">Created</span></li>
						    <li class="list-group-item"><span class="title">Name</span></li>
						    <li class="list-group-item"><span class="title">Statement description</span></li>
						    <li class="list-group-item"><span class="title">Trial days</span></li>
					  	</ul>
					 </div>
					 <div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span class="plan_id"></span></li>
						    <li class="list-group-item"><span class="created"></span></li>
						    <li class="list-group-item"><span class="name"></span></li>
						    <li class="list-group-item"><span class="stat_desc"></span></li>
                <li class="list-group-item"><span class="trial"></span></li>
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
    url: "https://staging.payarc.net:9000/api/v1/plans/"+$.urlParam('id'),
    headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig','Accept':'application/json' },
    success: function(data)
    {
      $.each(data, function(key, value) {
             $('span.plan_id').html(value.id);
             $('span.created').html(value.created_at.date);
             $('span.name').html(value.name);
             $('span.stat_desc').html(value.statement_descriptor);
             $('span.trial').html(value.trial_period_days);
      }); 
    }
  });


});
</script>


