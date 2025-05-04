<header>
<div class="header-area">
    <div class="row align-items-center">
        <!-- nav and search button -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        </div>
    </div>
</div>
<!-- header area end -->
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <!-- <h4 class="page-title pull-left">Dashboard</h4> -->
                <ul class="breadcrumbs pull-left">
                    <!-- <li><a href="{{ route('admin.dashboard')}}">Home</a></li>
                    <li><span>Dashboard</span></li> -->
                </ul>
            </div>
        </div>
<div class="col-sm-6 clearfix">
        <div class="user-profile pull-right">
<!-- Dynamic User Avatar -->
<img class="avatar user-thumb" src="{{ asset('admin/assets/images/author/avatar.png') }}" alt="avatar">

<!-- Dynamic User Info (Name and Role) -->
<h4 class="user-name dropdown-toggle" data-toggle="dropdown">
    {{ Auth::guard('admin')->user()->name }} <i class="fa fa-angle-down"></i>
</h4>
<small>{{ Auth::guard('admin')->user()->role }}</small>

<div class="dropdown-menu">
    <!-- Log Out -->
    <li>
        <a href="javascript:void(0);" class="mega-menu" title="Sign Out" onclick="document.getElementById('logout-form').submit();">
            <i class="zmdi zmdi-power" style="font-size: 50px;"></i> Log Out
        </a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
    </div>
</div>
    </div>

    </div>
</div>
<!-- page title area end -->
        
</header>
