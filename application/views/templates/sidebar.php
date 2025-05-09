<style>
    .nav-icon {
        height: 24px;
        width: auto;
        fill:"#fefefe";
    }

    
</style>


<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark bg-danger">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto me-2">
    <div class="dropdown text-end d-flex align-items-center"> 
            <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?=base_url('/assets/images/users/profile.png')?>" alt="mdo" height="26" class="rounded-circle bg-dark border border-2 border-white">
            </a>
            <ul class="dropdown-menu dropdown-menu-end text-small">
                <li><a class="dropdown-item" href="#">Notifications</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li> 
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="<?=base_url('logout');?>">Sign out</a></li>
            </ul>
            <!-- <button type="button" class="btn btn-dark rounded-4 px-4" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in</button> -->
        </div>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary bg-black elevation-5 fixed">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-black">
      <img src="<?= base_url('assets/images/redline_logo.svg') ?>" alt="RR" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Redline Rentals</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Menu1 -->
            <li class="nav-item">
                <a href="<?= base_url('admin/home')?>" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M120,56v48a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V56A16,16,0,0,1,56,40h48A16,16,0,0,1,120,56Zm80-16H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm-96,96H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm96,0H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Z"></path></svg> 
                <p style="position: relative; top: 2px">Dashboard</p>
                </a>
            </li>
            <!-- Menu2 -->
            <li class="nav-item">
                <a href="<?= base_url('admin/cars')?>" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M240,104H229.2L201.42,41.5A16,16,0,0,0,186.8,32H69.2a16,16,0,0,0-14.62,9.5L26.8,104H16a8,8,0,0,0,0,16h8v80a16,16,0,0,0,16,16H64a16,16,0,0,0,16-16v-8h96v8a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16V120h8a8,8,0,0,0,0-16ZM80,152H56a8,8,0,0,1,0-16H80a8,8,0,0,1,0,16Zm120,0H176a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16ZM44.31,104,69.2,48H186.8l24.89,56Z"></path></svg>
                <p style="position: relative; top: 2px">Cars</p>
                </a>
            </li>
            <!-- Menu3 -->
            <li class="nav-item">
                <a href="<?= base_url('admin/bookings')?>" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M160,56H64A16,16,0,0,0,48,72V224a8,8,0,0,0,12.65,6.51L112,193.83l51.36,36.68A8,8,0,0,0,176,224V72A16,16,0,0,0,160,56Z"></path><path d="M192,24H88a8,8,0,0,0,0,16H192V192a8,8,0,0,0,16,0V40A16,16,0,0,0,192,24Z"></path></svg>
                <p style="position: relative; top: 2px">Bookings</p>
                </a>
            </li>
            <!-- Menu4 -->
            <li class="nav-item">
                <a href="<?= base_url('admin/clients')?>" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12c15.23-26.33,38.7-45.21,66.09-54.16a72,72,0,1,1,73.66,0c27.39,8.95,50.86,27.83,66.09,54.16A8,8,0,0,1,230.93,220Z"></path></svg>
                <p style="position: relative; top: 2px">Clients</p>
                </a>
            </li>
            <!-- Menu5 -->
            <li class="nav-item">
                <a href="<?= base_url('admin/managers')?>" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M256,120a8,8,0,0,1-8,8H8a8,8,0,0,1,0-16H35.92l47.5-65.41a16,16,0,0,1,25.31-.72l12.85,14.9.2.23a7.95,7.95,0,0,0,12.44,0l.2-.23,12.85-14.9a16,16,0,0,1,25.31.72L220.08,112H248A8,8,0,0,1,256,120Zm-76,24a36,36,0,0,0-35.77,32H111.77a36,36,0,1,0-1.83,16h36.12A36,36,0,1,0,180,144Z"></path></svg>
                <p style="position: relative; top: 2px">Managers</p>
                </a>
            </li>


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


</body>
</html>
