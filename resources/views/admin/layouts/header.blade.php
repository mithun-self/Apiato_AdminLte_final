<!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>P</b>3.0</span>
                <!-- logo for regular state and mobile devices -->
                <span style="width: 67%;margin: 0 auto;" class="logo-lg"><img src="/dist/img/payarc-logo.png"/></span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                 -->
                <!-- Sidebar toggle button-->
                  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                  </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar -->
                                <img src="{{ auth()->user()->image }}" width="160" height="160" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs" >{{ auth()->user()->name }}</span>&nbsp
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{ auth()->user()->image }}" width="160" height="160" class="img-circle" alt="User Image">
                                    <p>
                                        {{ auth()->user()->email }} <br/>
                                        {{--<small >Role : {{ auth()->user()->rolename() }}</small>--}}
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer" style="height:75px;padding-top:20px;">
                                    <div class="pull-left">
                                        <a href="{{ url('admin\profileedit', auth()->id()) }}" class="btn btn-info btn-flat" style="width:90px">Profile</a>
                                    </div>
                                    {{--<div class="pull-right">
                                        {!! Form::open(['url'=>'logout']) !!}
                                            <button type="submit" class="btn btn-danger btn-flat"  style="width:90px">Logout</button>
                                        {!! Form::close() !!}
                                    </div>--}}
                                    <div class="pull-right">
                                      <a class="btn btn-info btn-flat logout" href="{{ url('/logout') }}">
                                        Logout</a>
                                    </div>
                                </li>

                                </ul>

                                </li>
                            </ul>
                </div>
            </nav>
        </header>