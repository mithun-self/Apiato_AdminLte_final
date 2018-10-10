@extends('admin.layouts.adminlayout')

@section('page-header')
    Subscriptions <small>Invoices</small>
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
a.expanc.active {
    color: black;
    font-weight: bold;
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
     <!-- modal form to create-->
            <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Create</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
                          </div>
                          <div class="form-group">
                            <label for="value">Email:</label>
                            <input type="email" class="form-control" id="value" placeholder="Enter Email" name="value" required="">
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- modal form to create ends -->

    <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              @include('admin.layouts.subscriptions_tabs')
              <div class="row">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>AMOUNT</th>
                    <th>STATUS</th>
                    <th>BILLING</th>
                    <th>CUSTOMER</th>
                    <th>NUMBER</th>
                    <th>CREATED</th>
                  </tr>
                  </thead>
                  <tfoot>
                    <div class="col-sm-7"><div class="dataTables_paginate paging_simple" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">Next</a></li></ul></div></div>
                  </tfoot>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
    </div>
</div>
<script>
  var limit = 20;
  var page = 1;
$("#example1_previous a").on('click',function(){
    
});

$("#example1_next a").on('click',function(){
    
});
  $(function() {

               $('#example1').DataTable({
               "pagingType": "simple",
               //"bPaginate": false,
                "ajax":{
                  url: 'https://staging.payarc.net:9000/api/v1/invoices?limit=20&page=1',
                  type: 'GET',
                  headers: { 'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5ZTBlYzIwNTdlZWI2ODdiZWE0ODk5YWU5NWU3MGYyNDMzMGYwMDViZDU5ZDA5YTQ2NWM5NjZkYzVjNGRjNGVjMzVhYmE2N2ZjOWY1MmI4In0.eyJhdWQiOiIyIiwianRpIjoiNzllMGVjMjA1N2VlYjY4N2JlYTQ4OTlhZTk1ZTcwZjI0MzMwZjAwNWJkNTlkMDlhNDY1Yzk2NmRjNWM0ZGM0ZWMzNWFiYTY3ZmM5ZjUyYjgiLCJpYXQiOjE1MzkxNjY3NTQsIm5iZiI6MTUzOTE2Njc1NCwiZXhwIjoxODU0NTI2NzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KQXUeJK-jyZVkhZNm3mJuTd5r2trC307Px3Rn9uSmADuzyLPNx-yPLcBGTCXQ57alNP4wUCqZaBGJYkl-C4hk6wTvxRuYeCC0uc-GyROTmUFNq0sd8qmFEa3Sqn6nuyEWrgcCUShEJvtB6hU4PJQ_82Z0Pz5IORd-CxBUmg8KhNcxFdBm3fq9cCocB9kKJE22be6LWL7RlL8p9b-SSCIclt-NBILPj1lby71fMfae2RfwM__-AYipNx4QEHI54J6T6OwTWEaSUAlIwmfAY80yQdFVrwADyoofSWvolL-kvLWGueFWcc9Pkz8vjSoV4tlUXvO5f7PuDzn9dekhfXOTVPAxZAB0DEqdyl0BITjgv9xY_adEv_JBYhSXVwLY-VULG_3wJfP4DhbouU-K5FOFbciYld2NhZ2jocAsX4hdB4GjtyEUv8B_bXsCVUYKppyn7Uj18y97Y9GwSSqZqJ6JEXpxnOIY8m0q1v4YHxmUum7cCYcFVwKSap0FVQAnw34gCZnxWBwWxsOr0tQ6gXoQNd2kvXoKhwP5lTCpqTw6soUbycvpwndUG3UlQnI2ZbK02iJxK9wIZ_AMkJMZI6LfZaY7JRGFFJAzReo_ASic09N1TeHAUjhvmTTksr2OmFPpOIiKiocXKgISPmyP7bxhYCf9njFfEi8ystDZ_Aobig',
                  'Accept':'application/json' },
                },
                columns: [
                        
                        { data: 'total', "mRender": function(data, type, row) {

                             return '<a class="green" href="/subscription/coupon-details?id='+row.id+'" >$'+row.total/100+'.00 USD</a>';
                          }
                        },
                        { data: 'paid', "mRender": function(data, type, row) {
                            if(row.paid == 1){
                               return  'Paid';
                            }else{
                              return  'Failed';
                            }
                          }
                        },
                        { data: 'billing', "mRender": function(data, type, row) {
                            if(row.billing == 1){
                               return  'Auto';
                            }else{
                              return  'Undefined';
                            }
                          }
                        },
                        { data: 'customer', "mRender": function(data, type, row) {
                            if(data.data.name){
                             return  data.data.name;
                            }else{
                              return null;
                            }
                           }
                          
                        },
                      { data: 'invoice_number', name: 'invoice_number' },
                      { data: 'created_at', "mRender": function(data, type, row) {
                         
                             return  data.date;
                          
                        }
                      },

                        
                       
                     ]

            });
         });

</script>

@stop