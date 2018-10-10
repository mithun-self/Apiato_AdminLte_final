@extends('admin.layouts.adminlayout')

@section('page-header')
    Subscriptions <small>Subscriptions</small>
@stop

@section('css')
<style>
.submit_button {
    padding: 23px;
}
.expanc {
  color: #949bad;
  font-size: 20px;
}
li {
    list-style-type: none;
}
.top_menus_table li{
  float: left;
}
.green {
    color: #7BB16D !important;
}
a.expanc.active {
    color: black;
    font-weight: bold;
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
  

    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              
                @include('admin.layouts.subscriptions_tabs')
              
              <div class="row">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>CUSTOMER</th>
                    <th>STATUS</th>
                    <th>BILLING</th>
                    <th>PLANS</th>
                    <th>CREATED</th>
                  </tr>
                  </thead>
                  
                </table>
              </div>
            </div>
            <!-- /.box-body -->
    </div>
</div>
<script>
  $(function() {
               $('#example1').DataTable({
               
                "ajax":{
                  url: 'https://staging.payarc.net:9000/api/v1/subscriptions?limit=20&page=1&include=customer',
                  type: 'GET',
                  headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig',
                  'Accept':'application/json' },
                },
                columns: [
                        { data: 'customer', "mRender": function(data, type, row) {

                             return '<a class="green" href="/subscription/subscription-details/?id='+row.id+'" >'+data.data.email+'</a>';
                          }
                        },
                        { data: 'status', name: 'status' },
                        { data: 'billing_type', "mRender": function(data, type, row) {
                            if(row.billing_type == 1){
                             return 'AUTO';
                            }else{
                              return 'NA';
                            }
                          }
                        },
                        { data: 'plan', "mRender": function(data, type, row) {
                             return data.data.name +'($'+ data.data.amount/100 +' USD /'+  data.data.interval +')';
                          }
                        },
                        { data: 'created_at', "mRender": function(data, type, row) {

                             return data.date
                          }
                        }
                        
                       
                     ]

            });
         });
</script>

@stop