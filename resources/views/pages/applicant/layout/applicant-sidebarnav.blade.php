   

   
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
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Manage</li>
    
                  <li class="nav-header">User Database</li>
                <li class="nav-item">
                  <a href="{{route('applicant.show_application')}}" class="nav-link active">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      All Applied Scholarship
                    </p>
                  </a>
                </li>

    

                

                    <li class="nav-item">
                      <a href="{{route('applicant.applicant_profile')}}" class="nav-link active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          Profile
                        </p>
                      </a>
                    </li>

                    
                    <li class="nav-item">
                      <a href="{{ route ('applicant.logoutHandler') }}" onclick="event.preventDefault(); document.getElementById('applicantLogoutForm').submit();" class="nav-link active">
                        <i class="nav-icon fa-right-from-bracket"></i> 
                        <form action="{{ route('applicant.logoutHandler') }}" id="applicantLogoutForm" method="POST" style="display: none;">@csrf</form>
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
            <h1>Sample Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
