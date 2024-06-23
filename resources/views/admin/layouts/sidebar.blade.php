

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{url('/')}}/admin_assets/logo_2.png" alt="AdminLTE Logo" class="brand-image   elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


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
            <a href="{{url('admin/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">Home</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/ENach-New-Onboarding')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                ENACH New-Onboarding

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/Enach-Request')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                E-NACH Request

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/GetCustGeneratedDynamicQRlist')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Generated DynamicQR list

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/modyfiedmandatedatalist')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Modyfied Mandate list

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/callback-mandatecreation')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               CallBack Mandate Creation

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/callback-mandateexecutions')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                CallBack Mandate Executions

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/callback-dynamic-qrtransection')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Callback Dynamic QR Transactions

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/Payment-Collection-Report')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                PaymentCollectionReport

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/Get-Auction-List')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Auction-List

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/Slider-OurEventList')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               SliderOurEvent

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/Branch-List')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Branch List
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/Download-List')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                DownloadList
              </p>
            </a>
          </li>





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
