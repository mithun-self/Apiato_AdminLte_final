<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    <li class="header">MENU</li>

    <li class="">
        <a href="/dashboard">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="">
        <a href="">
            <i class="fa fa-list"></i>
            <span>Categories</span>
        </a>
    </li>

    <li class="">
        <a href="/fee">
            <i class="fa fa-list"></i>
            <span>Fee List</span>
        </a>
    </li>

    <li class="">
        <a href="">
            <i class="fa fa-list"></i>
            <span>AccontFeeMap</span>
        </a>
    </li>

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="">
        <a href="">
            <i class="fa fa-users"></i>
            <span>Users</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Tools</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Settings</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Backups</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Logs</a></li>
        </ul>
    </li>
    @endif
</ul>
