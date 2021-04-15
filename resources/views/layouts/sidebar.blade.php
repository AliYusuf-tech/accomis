 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="ACCOMIS" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ACCOMIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Main Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>M&E Dashboard</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">QUESTIONEERS</li>
          <li class="nav-item">
            <a href="{{ route('cbo') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                CBO/CAT
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('client.exit') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Client Exit
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('remidial') }}" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Remedial Feedback

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ route('cbo.monthly') }}" class="nav-link">
              <i class="fa fa-book"></i>
              <p>CBO Monthly Minutes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('spo.monthly') }}" class="nav-link">
              <i class="fa fa-book"></i>
              <p>SPO Monthly Minutes</p>
            </a>
          </li>


          <li class="nav-header">REPORTS</li>

          <li class="nav-item">
            <a href="{{ route('cbo') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
               List of CBO/CAT
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="clientexit.html" class="nav-link">
              <i class="nav-icon fa fa-image"></i>
              <p>
                 Exit Questioneers
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Feedbacks

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ route('cbo.monthly') }}" class="nav-link">
              <i class="fa fa-book"></i>
              <p>CBO Monthly Minutes</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('spo.monthly') }}" class="nav-link">
              <i class="fa fa-book"></i>
              <p>SPO Monthly Minutes</p>
            </a>
          </li>
          <li class="nav-header">HEALTH FACILITIES</li>
          <li class="nav-item">
            <a href="{{ route('health_facility') }}" class="nav-link">
              <i class="fas fa-eye"></i>
              <p>View</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('health_facility.add') }}" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Add

              </p>
            </a>

          </li>

          <li class="nav-header">SETTINGS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Uploads</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>State</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>LGA</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Wards</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>SPO</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>CBO</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Sign Out</p>
            </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
