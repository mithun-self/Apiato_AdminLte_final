@extends('admin.layouts.adminlayout')
@section('page-header')
    Roles <small>User Roles</small>
@stop
@section('content')
<style type="text/css">

.expanc {
        color: #949bad;
        font-family: Montserrat-Regular;
        font-size: 20px;
}
div.label_right { 
  margin: 0 !important; 
  padding: 0; 
  margin-left: 20px; 
  font-size: 100%; 
  font-weight: bold; 
  color: black !important;
} 

ul.checkbox   { 
  margin: 0; 
  padding: 0; 
  margin-left: 20px; 
  list-style: none; 
} 

ul.checkbox li input { 
  margin-right: .25em; 
} 
</style>
         <div class="container col-sm-9 offset-sm-3 col-md-12 offset-md-2">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          <div class="row">
            <!-- modal form to create-->
            <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Create Role</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required="">
                          </div>
                          
                          <div class="form-group">
                            <label for="name">Display Name:</label>
                            <input type="text" class="form-control" id="display_name" placeholder="Enter Display Name" name="display_name" required="">
                          </div>

                          <div class="form-group">
                            <label for="name">Description:</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description" required="">
                          </div>
                          <div class="label_right">Rights granted</div> 
                            <ul class="checkbox"> 
                              <li><input type="checkbox"  value="pepperoni" title="Pepperoni"/>Customer Management</li> 
                              <ul>
                                <li><input type="checkbox" value="sausage"  title="Sausage"/>creates customer</li> 
                                <li><input type="checkbox" value="mushrooms" title="Mushrooms"/>Customer menu options.</li> 
                                <li><input type="checkbox" value="onions" title="Onions"/>Delete a customer.</li> 
                                <li><input type="checkbox" value="gpeppers" title="Green Peppers"/>Update a customer.</li> 
                              </ul>
                              <li><input type="checkbox" value="xcheese" title="Extra Cheese"/>Reporting</li> 
                            </ul> 

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="on_submit_save_fee" type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- modal form to create ends -->
            <!-- edit modal starts -->
            <div id="Edit_Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Role</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="edit_name" placeholder="Enter Name" name="edit_name" required="">
                          </div>
                          
                          <div class="form-group">
                            <label for="name">Display Name:</label>
                            <input type="text" class="form-control" id="edit_display_name" placeholder="Enter Display Name" name="edit_display_name" required="">
                          </div>

                          <div class="form-group">
                            <label for="name">Description:</label>
                            <input type="text" class="form-control" id="edit_description" placeholder="Enter Description" name="edit_description" required="">
                          </div>
                          <div class="label_right">Rights granted</div> 
                            <ul class="checkbox"> 
                              <li><input type="checkbox"  value="pepperoni" title="Pepperoni"/>Customer Management</li> 
                              <ul>
                                <li><input type="checkbox" value="sausage"  title="Sausage"/>creates customer</li> 
                                <li><input type="checkbox" value="mushrooms" title="Mushrooms"/>Customer menu options.</li> 
                                <li><input type="checkbox" value="onions" title="Onions"/>Delete a customer.</li> 
                                <li><input type="checkbox" value="gpeppers" title="Green Peppers"/>Update a customer.</li> 
                              </ul>
                              <li><input type="checkbox" value="xcheese" title="Extra Cheese"/>Reporting</li> 
                            </ul> 

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="on_edit_save" type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- edit modal ends -->

            <!-- Delete Modal -->
            <div class="modal fade" id="delete_modal" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete Role</h4>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" class="form-control" id="delete_row" value="" name="delete_row">
                    <p>Are You Sure</p>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button id="on_delete" type="button" class="btn btn-primary">Delete</button>
                    </div>
                </div>
                
              </div>
            </div>
            <!-- Delete Modal Ends -->

            

          
          <div class="box">
            <div class="box-body above_table">
              <div class="col-md-6">
              </div>
              <div class="col-md-6 text-right right_table">
                  <h1 class="list-inline-item" data-toggle="modal" data-target="#GSCCModal"><a href="#" class="expanc"><i class="fa fa-plus">&nbsp;</i>New</a></h1>
            </div>
              <table class="table table table-bordered table-striped" style="width: 100%;" id="example">
                 <thead style="background-color: #d7dce2; border-radius: 55px;">
                    <tr>
                       <th>NAME</th>
                       <th>DISPLAY NAME</th>
                       <th>DESCRIPTION</th>
                       <th>CREATED</th>
                       <th></th>
                       <th></th>
                    </tr>
                 </thead>
                 <tbody></tbody>
                 <tfoot></tfoot>
              </table>
            </div>
          </div>
         </div>
       </div>
       <script>
         $(function() {
               var table = $('#example').DataTable({

               ajax: '{{ url('roleslisttable') }}',
               columns: [
                        { data: 'name', name: 'name' },
                        { data: 'display_name', name: 'display_name' },
                        { data: 'description', name: 'description' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'edit', "mRender": function(data, type, row) {
                              return '<button data-toggle="modal" data-target="#Edit_Modal" style="font-size: 10px;padding: 0 4px;font-weight: 500;color: rgb(255, 255, 255);background-color: rgb(217, 83, 79);border-color: rgb(212, 63, 58);font-family: Montserrat;" class="btn btn-info btn-sm" href="#"><i class="fa fa-edit"></i></button>';
                              }
                        },
                        { data: 'delete', "mRender": function(data, type, row) {
                              return '<button data-toggle="modal" data-target="#delete_modal" style="font-size: 10px;padding: 0 4px;font-weight: 500;color: rgb(255, 255, 255);background-color: rgb(217, 83, 79);border-color: rgb(212, 63, 58);font-family: Montserrat;" class="btn btn-info btn-sm" href=deleterole/'+row.id+'><i class="fa fa-trash"></i></button>';
                              }
                        }

                       
                     ]  
            });
            $( table.table().footer() ).addClass( 'highlight' );
         });
         </script>
@stop