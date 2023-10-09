<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ url('/admin') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ url('/admin') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/dashboard') }}" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#members" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="members">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Members Details</span>
                    </a>
                    <div class="collapse menu-dropdown" id="members">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/members') }}" class="nav-link" data-key="t-one-page"> List Members </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-nft-landing"> import Members </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#payments" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="payments">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Payments Details</span>
                    </a>
                    <div class="collapse menu-dropdown" id="payments">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-one-page"> List of Payments </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Settings</span></li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#users" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="users">
                        <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Users</span>
                    </a>
                    <div class="collapse menu-dropdown" id="users">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">User List</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Add User</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">User Role</a>
                            </li>
                        </ul>
                    </div>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>


    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
