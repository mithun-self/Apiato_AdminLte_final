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
	margin: 1% 0;
}
.all_card {
    padding: 0 15px;
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
			<div class="row all_card">
				
			</div>
			<!-- <div class="row card_body">
				<div class="col-md-6">
					0051 05/2036
				</div>
				<div class="col-md-6" style="text-align: right;">
					<i class="fa fa-trash"><span style="font-size: 14px;font-weight: bolder;">Delete</span></i>
					<i class="fa fa-edit"><span style="font-size: 14px;font-weight: bolder;">Edit</span></i>
				</div>
			</div> -->
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
      $.each(data, function(key, value) {
        $.each(this.card, function(k, v) {
          $.each(this, function(k, v) {
            $("div.all_card").append('<div class="col-md-12 card_body"><div class="col-md-6">'+v.last4digit + ' '+ v.exp_month +"/"+v.exp_year +'</div><div class="col-md-6" style="text-align: right;"><i class="fa fa-trash"><span>Delete</span></i><i class="fa fa-edit"><span>Edit</span></i></div></div>');
          });
       });
      }); 
    }
  });


});
</script>