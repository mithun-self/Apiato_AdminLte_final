@extends('admin.layouts.adminlayout')

@section('page-header')
    Audit <small>Details</small>
@stop

@section('content')
<style type="text/css">



.expanc {
        color: #949bad;
        font-family: Montserrat-Regular;
        font-size: 20px;
    }
    li {
    list-style-type: none;
}
</style>
         <div class="container col-sm-9 offset-sm-3 col-md-12 offset-md-2">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          <div class="row">            
          <div class="box">
            <div class="box-body">
              <div class="col-md-6">
              </div>
              <div class="col-md-6 text-right right_table">
            </div>
              <table class="table table-bordered table-striped" style="width: 100%;" id="example">
                 <thead style="background-color: #d7dce2; border-radius: 55px;">
                    <tr>
                       <th>USER ID</th>
                       <!-- <th>ROLES</th> -->
                       <th>EVENT</th>
                       <th>MODEL</th>
                       <th>OLD VALUE</th>
                       <th>NEW VALUE</th>
                       <th>URL</th>
                       <th>IP</th>
                       <th>CREATED AT</th>
                    </tr>
                 </thead>
              </table>
            </div>
          </div>
         </div>
       </div>

       <script>
         $(function() {
               $('#example').DataTable({
               ajax: '{{ url('/audit/list') }}',
               "bPaginate":true,
               "iDisplayLength": 5,
               columns: [
                        { data: 'user_id', name: 'user_id' },
                        { data: 'event', name: 'event' },
                        { data: 'auditable_type', name: 'auditable_type' },

                        /*{ data: 'old_values.value', render: function ( data, type, row ) {
                            if($.type(data) == 'undefined'){
                              return '';
                            }else{
                              return data;
                            }
                          } 
                        },
                        { data: 'new_values.value', render: function ( data, type, row ) {
                            if($.type(data) == 'undefined'){
                              return '';
                            }else{
                              return data;
                            }
                          } 
                        },*/
                        { data: 'old_values', name: 'old_values' },
                        { data: 'new_values', name: 'new_values' },
                        { data: 'url', name: 'url' },
                        { data: 'ip_address', name: 'ip_address' },
                        { data: 'created_at', name:'created_at' },                      
                     ]  
            });
         });
         </script>
@stop