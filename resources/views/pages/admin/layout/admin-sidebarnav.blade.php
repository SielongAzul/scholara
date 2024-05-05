   

   
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="/back/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Scholara</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/back/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('admin.home')}}" class="d-block">Admin Sample</a>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Manage</li>
            <li class="nav-item ">
                <a href="{{route('admin.category_table')}}" class="nav-link ">
                  <i class="nav-icon fas fa-table"> </i>
                  <p>
                    Category
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('admin.category_table')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Show All Scholarship Category</p>
                    </a>
                  </li>
          

                </ul>

                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                      Scholarships
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('admin.show_scholarships')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Show All Scholarships</p>
                      </a>
                    </li>
 

                  </ul>
                  <li class="nav-header">User Database</li>
                <li class="nav-item">
                  <a href="{{route('admin.show_applicants')}}" class="nav-link ">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Registered Applicants
                    </p>
                  </a>
                </li>

                

                
                <li class="nav-item ">
                  <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Validators
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('admin.show_validators')}}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Show All Validators</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('admin.add_validator')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Validators</p>
                      </a>
                    </li>

                  </ul>

                    <li class="nav-item">
                      <a href="{{route('admin.show_providers')}}" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          Registered Scholarship Providers
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="widgets.html" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          Profile
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="widgets.html" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          Transaction History
                        </p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          Validation History
                        </p>
                      </a>
                    </li>
                    
                    <li class="nav-item">
                      <a href="{{ route ('admin.logoutHandler') }}" onclick="event.preventDefault(); document.getElementById('adminLogoutForm').submit();" class="nav-link">
                        <i class="nav-icon fa-right-from-bracket"></i> 
                        <form action="{{ route('admin.logoutHandler') }}" id="adminLogoutForm" method="POST" style="display: none;">@csrf</form>
                      
                        <p>
                          Sign Out
                        </p>
                      </a>
                    </li>
              
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
