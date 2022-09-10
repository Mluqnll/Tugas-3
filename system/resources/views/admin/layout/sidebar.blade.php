<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="dashboard/crm-index.html" class="logo">
            <span>
                <img src="{{url('public/superadmin')}}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{url('public/superadmin')}}/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                <img src="{{url('public/superadmin')}}/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ url('product') }}">
                    <i class="fa fa-gift"></i>
                    <span>Product</span>
                </a>
            </li>

            <li>
                <a href="{{ url('list') }}"i>
                    <i class="fa fa-list"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);">
                    <i class="fa fa-"></i>
                    <span>MasterData</span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">

                    <li><a href="#">Pembeli</a></li>
                    <li><a href="#">Penjual</a></li>
                </ul>
            </li>  
        </ul>
    </div>
</div>