<!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-light-info elevation-4">
    <!-- Brand Logo -->
   <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('dist/img/a4alogo.jpg')}}" alt="A4A  Logo"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'ADAPT') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
        
          <li class="nav-header text-success"><b>PATIENTS</b></li>

          <li class="nav-item">
            <a href="{{route('dashboard.patients')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Add new Patient
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{route('dashboard.allpatients')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
               All Patient
              </p>
            </a>
          </li>

        
     
          <li class="nav-header text-success"><b>TRACING</b></li>
              <li class="nav-item">
            <a href="{{route('dashboard.tobetraced')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                To be traced
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('dashboard.traced')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Traced participants
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Archived
              </p>
            </a>
          </li>

         
          <li class="nav-header text-success"><b>Reports</b></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                Report List
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                Contact enquiries
              </p>
            </a>
          </li>
       

          
    

          {{-- <li class="nav-header text-success"><b>User Management</b></li>
          <li class="nav-item {{Request::is('auth/users*')?' active':''}}">
            <a href="{{route('users.manage')}}" class="nav-link"> <i class="nav-icon fas fa-users"></i> Manage Users</a>
          </li>
          <li class="nav-item {{Request::is('auth/permissions*')?' active':''}}">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-lock"></i> Manage Permissions</a>
          </li>
          <li class="nav-item {{Request::is('auth/roles*')?' active':''}}">
            <a href="#" class="nav-link"><i class="nav-icon fas fa-users"></i> Manage Roles</a>
          </li>
          <li class="nav-header text-success"><b> TRANSACTIONS</b></li>
           <li class="nav-item {{Request::is('auth/users*')?' active':''}}">
            <a href="{{route('mpesa.transactions')}}" class="nav-link"> <i class="nav-icon fas fa-coins"></i> MPESA transactions</a></li>

           <li class="nav-item {{Request::is('auth/users*')?' active':''}}">
            <a href="{{route('paypal.transactions')}}" class="nav-link"> <i class="nav-icon fas fa-coins"></i> PayPal Transactions</a></li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <!--<div class="sidebar-custom">
      <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
      <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
    </div>
  -->
    <!-- /.sidebar-custom -->
  </aside>