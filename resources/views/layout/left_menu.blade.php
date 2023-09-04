
      <!-- ========== App Menu ========== -->
      <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <!-- Dark Logo-->
          <a href="{{ url('/') }}" class="logo logo-dark">
            <span class="logo-sm">
              <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
            </span>
            <span class="logo-lg">
              <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
            </span>
          </a>
          <!-- Light Logo-->
          <a href="{{ url('/') }}" class="logo logo-light">
            <span class="logo-sm">
              <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
            </span>
            <span class="logo-lg">
              <img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="" height="100">
            </span>
          </a>
          <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
          </button>
        </div>

        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
             
              <li class="nav-item">
                <a class="nav-link menu-link" href="{{ url('/') }}" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                  
                  <span data-key="t-dashboards">Home</span>
                </a>
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