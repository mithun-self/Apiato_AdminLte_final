<!DOCTYPE html>
<html>
<head>
<style>
.sidebar-menu>li>a>.fas {
    width: 20px;
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="dist/css/AdminLTE.min.css"> -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css"> -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <!-- <link rel="stylesheet" href="bower_components/morris.js/morris.css"> -->
  <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css"> -->
   <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }} "></script>
  
<!--     jQuery 3 -->
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }} "></script>
<!--     DataTables -->
   <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
   <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>
<!--   SlimScroll -->
   <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }} "></script>
<!--   FastClick -->
   <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }} "></script>
<!--   AdminLTE App -->
   <script src="{{ asset('dist/js/adminlte.min.js') }} "></script>
<!--   AdminLTE for demo purposes -->
   <script src="{{ asset('dist/js/demo.js') }} "></script> 

  {{--<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">--}}
          <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
@include('log-viewer::_template.style')

    @if (! config('app.debug', true))
        <link rel="stylesheet" href="{{ asset('css/admin-all.css') }}">
    @else
        <!-- Vendors -->
        <link rel="stylesheet" href="{{ asset('css/admin-vendor.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin-custom.css') }}">
    @endif

    @yield('css')

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.layouts.header')
        <!-- Left side column. contains the logo and sidebar -->
        {{--<aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->

                <div class="user-panel">
                  <div class="pull-left image">
                      <img src="{{ auth()->user()->avatar }}" width="160" height="160" class="img-circle" alt="User Image">
                  </div>
                  <div class="pull-left info">
                    <p class="user-panel-name">{{ Auth::user()->name }} </p>
                    {{--<p>
                      <small ><a href="{{ route('logout', auth()->id()) }}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></small>
                    </p>

                  </div>
                </div>

                @include('admin.commun.menu')

            </section>
            <!-- /.sidebar -->
        </aside>--}}

         <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a data-active="1" href="/dashboard"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a data-active="2" href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li><a data-active="11" href="/customers"><i class="fa fa-circle-o text-aqua"></i> <span>Customers</span></a></li>
        <li><a data-active="12" href="/subscriptions"><i class="fa fa-circle-o text-aqua"></i> <span>Subscriptions</span></a></li>
        <li><a data-active="13" href="/payment/payment-list"><i class="fa fa-briefcase"></i> <span>Payments</span></a></li>
        <li><a data-active="16" href="/balance/balance-report"><i class="fa fa-briefcase"></i> <span>Balance</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Admins
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a data-active="3" href="/getusers"><i class="fa fa-circle-o"></i> Users</a></li>
                <li><a data-active="4" href="/getroleslist"><i class="fa fa-circle-o"></i> Role List</a></li>
              </ul>
            </li>
            <li><a data-active="5" href="/merchant_account_user"><i class="fa fa-circle-o"></i> Merchants Account Users</a></li>
            <li><a data-active="6" href="/connected_user_accounts"><i class="fa fa-circle-o"></i> Connect Account Users</a></li>
          </ul>
        </li>


        <li><a data-active="7" href="/processing_limits"><i class="fa fa-circle-o text-aqua"></i> <span>Processing Limits</span></a></li>

        <li><a data-active="8" href="/merchant_management"><i class="fa fa-circle-o text-aqua"></i> <span>Merchant Management</span></a></li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Fee Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a data-active="9" href="/fee"><i class="fa fa-circle-o"></i> View Fees</a></li>
            <li><a data-active="10" href="/mapview"><i class="fa fa-circle-o"></i> Apply Fees</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-th-list"></i> <span>Log Viewer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a data-active="14" href="/log-viewer"><i class="fa fa-circle-o"></i>Dashboard</a></li>
            <li><a data-active="15" href="/log-viewer/logs"><i class="fa fa-circle-o"></i> Logs</a></li>
          </ul>
        </li>

        <li><a data-active="17" href="/audits"><i class="fas fa-clipboard-list"></i> <span>Audit</span></a></li>
        <li><a data-active="18" href="/enveditor"><i class="fa fa-cogs"></i> <span>Env Edit</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    @yield('page-header', 'pageheader')
                </h1>
                {{-- <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                    <li class="active">Here</li>
                </ol> --}}
            </section>

            <!-- Main content -->
            <section class="content">

                @include('admin.commun.flash-message')

                @yield('content')

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

         @include('admin.layouts.footer')

    </div>
    <!-- ./wrapper -->

    @if (config('app.debug', true))
        <!-- Vendors -->
        <script src="{{ asset('js/admin-vendor.js') }} "></script>
        <script src="{{ asset('js/admin-custom.js') }} "></script>
    @else

        {{--<script src="{{ asset('js/admin-all.js') }} "></script>--}}

    @endif

    <!-- jQuery 3 -->
<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->

<!-- jQuery UI 1.11.4 -->
<!-- <script src="bower_components/jquery-ui/jquery-ui.min.js"></script> -->
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }} "></script>

<!-- Morris.js charts -->
<!-- <script src="bower_components/raphael/raphael.min.js"></script> -->
<script src="{{ asset('bower_components/raphael/raphael.min.js') }} "></script>
<!-- <script src="bower_components/morris.js/morris.min.js"></script> -->
<script src="{{ asset('bower_components/morris.js/morris.min.js') }} "></script>
<!-- Sparkline -->
<!-- <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> -->
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }} "></script>
<!-- jvectormap -->
<!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }} "></script>
<!-- <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }} "></script>
<!-- jQuery Knob Chart -->
<!-- <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script> -->
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }} "></script>
<!-- daterangepicker -->
<!-- <script src="bower_components/moment/min/moment.min.js"></script> -->
<script src="{{ asset('bower_components/moment/min/moment.min.js') }} "></script>
<!-- <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }} "></script>
<!-- datepicker -->
<!-- <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }} "></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }} "></script>
<!-- Slimscroll -->
<!-- <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script> -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }} "></script>
<!-- FastClick -->
<!-- <script src="bower_components/fastclick/lib/fastclick.js"></script> -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }} "></script>
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.min.js"></script> -->
<script src="{{ asset('dist/js/adminlte.min.js') }} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->

<script src="{{ asset('dist/js/pages/dashboard.js') }} "></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<script src="{{ asset('dist/js/demo.js') }} "></script>
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        Chart.defaults.global.responsive      = true;
        Chart.defaults.global.scaleFontFamily = "'Source Sans Pro'";
        Chart.defaults.global.animationEasing = "easeOutQuart";
    </script>


<script>
$('ul li a').click(function() {
  localStorage.setItem('active',$(this).data('active'));
});

$(document).ready(function(){
  var ele = localStorage.getItem('active');
  //console.log($('a[data-active="'+ele+'"]').parents('.treeview').length);
  $('a[data-active="'+ele+'"]').parent().addClass('active');
  //$('a[data-active="'+ele+'"]').parentsUntil( ".level-1" ).addClass('menu-open');

if ($('a[data-active="'+ele+'"]').parents('.treeview').length = 1) {
  $($('a[data-active="'+ele+'"]').parents('.treeview')).addClass('active');

}
});

</script>

    @yield('modals')
    @yield('js')
</body>
</html>
