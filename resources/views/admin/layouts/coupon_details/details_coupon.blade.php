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

<div class="panel panel-default">
		<div class="panel-heading">
			<div class="row">
					<div class="col-md-6">
						<span>Coupon details</span>
					</div>
			</div>
		</div>
		<div class="panel-body">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span class="title">ID</span></li>
						    <li class="list-group-item"><span class="title">Amount off</span></li>
						    <li class="list-group-item"><span class="title">Duration</span></li>
						    <li class="list-group-item"><span class="title">Status</span></li>
					  	</ul>
					 </div>
					 <div class="col-md-6">
						<ul class="list-group">
						    <li class="list-group-item"><span class="cop_id"></span></li>
						    <li class="list-group-item"><span class="amt_off"></span></li>
						    <li class="list-group-item"><span class="dura"></span></li>
						    <li class="list-group-item"><span class="status"></span></li>
					  	</ul>
					 </div>
			  	</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<ul class="list-group">
					    	<li class="list-group-item"><span class="title">Redemption count</span></li>
					    	<li class="list-group-item"><span class="title">Max redemptions</span></li>
					    	<li class="list-group-item"><span class="title">Redeem by</span></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list-group">
					    	<li class="list-group-item"><span class="redm_count"></span></li>
					    	<li class="list-group-item"><span class="max_redm"></span></li>
					    	<li class="list-group-item"><span class="red_by"></span></li>
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
              			<span>Active redemptions</span>
            		</div> 
		        </div>
		    </div> 
		</div>
		<div class="panel-body">
	        		<div class="row mt-4 pr-detail-text no-margin">
	            		
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
    url: "https://staging.payarc.net:9000/api/v1/discounts/"+$.urlParam('id'),
    headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig','Accept':'application/json' },
    success: function(data)
    {
      $.each(data, function(key, value) {
             $('span.cop_id').html(value.id);
             $('span.amt_off').html(value.percent_off+'% OFF');
             $('span.dura').html(value.duration);
             $('span.status').html(value.status);
             $('span.trial').html(value.trial_period_days);
             $('span.redm_count').html(value.times_redeemed);
             $('span.max_redm').html(value.max_redemptions);
             $('span.red_by').html(value.redeem_by);
             
      }); 
    }
  });


});
</script>

