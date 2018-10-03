@extends('admin.layouts.adminlayout')

@section('page-header')
    Processing Limits<small>Processing Limits</small>
@stop

@section('css')
<style>
.submit_button {
    padding: 23px;
}
</style>
@stop

@section('content')
<div class="container col-sm-9 offset-sm-3 col-md-12 offset-md-2">
  @if(Session::has('success_msg'))
    <div class="alert alert-dismissable alert-sucess">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      {{Session::get('success_msg')}}
    </div>
  @endif
      @include('admin.layouts.merchant_account_filter')
  <div class="row">
    <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Default Values</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Transaction Dollar Volume Ceiling :
                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-10 control-label">Daily Total Transactions Limit 
(Number of Transactions) :
</label>
                  <div class="col-sm-2">
                    <input type="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Daily Total Transaction Dollar Volume Ceiling :

                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Monthly Total Transaction Dollar Volume Ceiling : 

                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Monthly Total Transactions Limit 
(Number of Transactions) : 

                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Delayed funding  (in days) :
                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Edit</button>
                <button type="submit" class="btn btn-default">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Merchant Values</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Transaction Dollar Volume Ceiling :
                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-10 control-label">Daily Total Transactions Limit 
(Number of Transactions) :
</label>
                  <div class="col-sm-2">
                    <input type="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Daily Total Transaction Dollar Volume Ceiling :

                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Monthly Total Transaction Dollar Volume Ceiling : 

                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Monthly Total Transactions Limit 
(Number of Transactions) : 

                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-10 control-label">Delayed funding  (in days) :
                  </label>

                  <div class="col-sm-2">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Edit</button>
                <button type="submit" class="btn btn-default">Save</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

        </div>
            <!-- /.box-body -->
      </div>
          <!-- /.box -->
    </div>
@stop