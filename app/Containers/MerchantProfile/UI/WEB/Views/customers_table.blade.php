@extends('admin.layouts.adminlayout')

@section('page-header')
    Customers <small>Customers</small>
@stop

@section('css')
<style>
.submit_button {
  padding: 23px;
}
.right_table {
  margin-left: 54%;
}
.expanc {
  color: #949bad;
  font-family: Montserrat-Regular;
  font-size: 20px;
}
.green {
  color: #7BB16D !important; 
}
</style>
@stop

@section('content')

@include('admin.layouts.merchant_account_filter')
<div class="container col-sm-9 offset-sm-3 col-md-12 offset-md-2">
  @if(Session::has('success_msg'))
    <div class="alert alert-dismissable alert-sucess">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      {{Session::get('success_msg')}}
    </div>
  @endif
  <div class="row">
    <!-- modal form to create-->
            <div id="charge_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Create a new payment</h4>
                      </div>
                      <div class="modal-body">

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
                            <label for="description">Description:</label>
                            <input type="description" class="form-control" id="description" name="description" required="">
                          </div>
                          <div class="form-group">
                            <label for="statement">Statement desc:</label>
                            <input type="statement" class="form-control" id="statement" name="statement" required="">
                          </div>
                          <div class="form-group">
                            <label for="source">Source:</label>
                            <input type="source" class="form-control" id="source" name="source" required="">
                          </div>
                          <div class="form-group">
                            <label for="tip">Tip:</label>
                            <input type="tip" class="form-control" id="tip" name="tip" required="">
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-4">
                                <label for="capture">Capture charge:</label>
                              </div>
                              <div class="col-md-4">
                                <input type="radio" name="capture" value="yes" checked>Yes
                              </div>
                              <div class="col-md-4">
                                <input type="radio" name="capture" value="no">No
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-4">
                                <label for="health_care">Is health care:</label>
                              </div>
                              <div class="col-md-4">
                                <input type="radio" name="health_care" value="yes">Yes
                              </div>
                              <div class="col-md-4">
                                <input type="radio" name="health_care" value="no" checked>No
                              </div>
                            </div>
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Charge customer</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
            </div>
    <!-- modal form to create ends -->
    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>DESCRIPTION</th>
                  <th>PAYMENT METHOD</th>
                  <th></th>
                </tr>
                </thead>
                
            </table>
            </div>
            <!-- /.box-body -->
    </div>
  </div>
</div>
<script>
  $(function() {
               $('#example1').DataTable({
               
                "ajax":{
                  url: 'https://staging.payarc.net:9000/api/v1/customers',
                  type: 'GET',
                  headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig',
                  'Accept':'application/json' },
                },
                columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'description', name: 'description' },
                        { data: 'card', "mRender": function(data, type, row) {

                              return data.data[0].last4digit+' '+data.data[0].exp_month+'/'+data.data[0].exp_year;
                          }
                        },
                        { data: 'delete', "mRender": function(data, type, row) {
                              return '<td><a class="green" href="#" data-toggle="modal" data-target="#charge_modal">Charge</a></td>';
                              }
                        }
                       
                     ]

            });
         });
</script>

@stop