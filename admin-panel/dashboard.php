<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Redline</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
    h1, h2, h4, h5, h6 {font-family: 'Syne', "sans-serif"; color: #282828}
    h3 {font-family: 'Space Grotesk', "sans-serif";}
    * {font-family: 'Space Grotesk', "sans-serif";}

      .info-box-icon.brand-dark {background: #B71C1C; color: #fefefe}
      .info-box-icon.brand-primary {background: #D32F2F; color: #fefefe}
      .info-box-icon.brand-secondary {background: #F33226; color: #fefefe}
      .info-box-icon.brand-tertiary {background: #EF5350; color: #fefefe}

      .box-icon {height: 70px; fill: #fefefe}

      bg-primary{background: #EA4335 !important; color: #fefefe}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      link-secondary:hover {
       color: #EA4335; 
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-primary-bg: #EA4335; /* Base color */
        --bd-primary-rgb: 234, 67, 53; /* RGB values */

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white); /* White text */
        --bs-btn-bg: var(--bd-primary-bg); /* Base background color */
        --bs-btn-border-color: var(--bd-primary-bg); /* Base border color */

        /* Hover state */
        --bs-btn-hover-color: var(--bs-white); /* White text on hover */
        --bs-btn-hover-bg: #D63A2D; /* Darker background on hover */
        --bs-btn-hover-border-color: #D63A2D; /* Darker border on hover */

        /* Focus state */
        --bs-btn-focus-shadow-rgb: var(--bd-primary-rgb); /* Focus shadow using RGB */

        /* Active state */
        --bs-btn-active-color: var(--bs-btn-hover-color); /* Same as hover text */
        --bs-btn-active-bg: #C23125; /* Even darker background on active */
        --bs-btn-active-border-color: #C23125; /* Even darker border on active */
     }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .car-img-table {
        height: 22px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">

  </head>
  <body>
  <?php include_once('../components/sidebar.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid pt-5 px-5">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="fw-semibold">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Admin</li>
                <li class="breadcrumb-item">Dashboard</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid px-5">
          <div class="row">
            
            <!-- Info Box -->
            <div class="col-12 col-lg-3">
              <div class="info-box rounded-3">
                <span class="info-box-icon brand-tertiary elevation-1 rounded-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M240,104H229.2L201.42,41.5A16,16,0,0,0,186.8,32H69.2a16,16,0,0,0-14.62,9.5L26.8,104H16a8,8,0,0,0,0,16h8v80a16,16,0,0,0,16,16H64a16,16,0,0,0,16-16v-8h96v8a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16V120h8a8,8,0,0,0,0-16ZM80,152H56a8,8,0,0,1,0-16H80a8,8,0,0,1,0,16Zm120,0H176a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16ZM44.31,104,69.2,48H186.8l24.89,56Z"></path></svg></span>

                <div class="info-box-content">
                  <h3 class="info-box-number mb-0">
                    22
                  </h3>
                  <span class="info-box-text">Cars</span>

                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            
            <!-- Info Box -->
            <div class="col-12 col-lg-3">
              <div class="info-box rounded-3">
                <span class="info-box-icon brand-tertiary elevation-1 rounded-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256"><path d="M140,32V64a12,12,0,0,1-24,0V32a12,12,0,0,1,24,0Zm33.25,62.75a12,12,0,0,0,8.49-3.52L204.37,68.6a12,12,0,0,0-17-17L164.77,74.26a12,12,0,0,0,8.48,20.49ZM224,116H192a12,12,0,0,0,0,24h32a12,12,0,0,0,0-24Zm-42.26,48.77a12,12,0,1,0-17,17l22.63,22.63a12,12,0,0,0,17-17ZM128,180a12,12,0,0,0-12,12v32a12,12,0,0,0,24,0V192A12,12,0,0,0,128,180ZM74.26,164.77,51.63,187.4a12,12,0,0,0,17,17l22.63-22.63a12,12,0,1,0-17-17ZM76,128a12,12,0,0,0-12-12H32a12,12,0,0,0,0,24H64A12,12,0,0,0,76,128ZM68.6,51.63a12,12,0,1,0-17,17L74.26,91.23a12,12,0,0,0,17-17Z"></path></svg></span>

                <div class="info-box-content">
                  <h3 class="info-box-number mb-0">
                    4
                  </h3>
                  <span class="info-box-text">Pending</span>

                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- Info Box -->
            <div class="col-12 col-lg-3">
              <div class="info-box rounded-3">
                <span class="info-box-icon brand-tertiary elevation-1 rounded-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z"></path></svg></span>

                <div class="info-box-content">
                  <h3 class="info-box-number mb-0">
                    45
                  </h3>
                  <span class="info-box-text">Clients</span>

                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- Info Box -->
            <div class="col-12 col-lg-3">
              <div class="info-box rounded-3">
                <span class="info-box-icon brand-tertiary elevation-1 rounded-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M256,120a8,8,0,0,1-8,8H8a8,8,0,0,1,0-16H35.92l47.5-65.41a16,16,0,0,1,25.31-.72l12.85,14.9.2.23a7.95,7.95,0,0,0,12.44,0l.2-.23,12.85-14.9a16,16,0,0,1,25.31.72L220.08,112H248A8,8,0,0,1,256,120Zm-76,24a36,36,0,0,0-35.77,32H111.77a36,36,0,1,0-1.83,16h36.12A36,36,0,1,0,180,144Z"></path></svg></span>

                <div class="info-box-content">
                  <h3 class="info-box-number mb-0">
                    12
                  </h3>
                  <span class="info-box-text">Managers</span>

                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <div class="row">
            <div class="col-lg-7">
              <div class="card rounded-3 overflow-hidden">
                <div class="card-header border-1 px-4">
                  <h3 class="card-title fw-bold">Recent Bookings</h3>
                  <div class="card-tools px-4">
                    <a href="">View all</a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th style="width: 15%;">RentID</th>
                      <th>Car Rented</th>
                      <th>Total</th>
                      <th style="width: 15%;">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>
                        RNT1
                      </td>
                      <td>Honda NSX NA1</td>
                      <td>
                        12,500
                      </td>
                      <td>
                      <div class="span badge bg-warning w-100">Pending</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        RNT2
                      </td>
                      <td>Nissan Fairlady Z</td>
                      <td>
                        7,600
                      </td>
                      <td>
                      <div class="span badge bg-success w-100">Paid</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        RNT3
                      </td>
                      <td>Toyota AE86 Trueno</td>
                      <td>
                        12,500
                      </td>
                      <td>
                      <div class="span badge bg-warning w-100">Pending</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        RNT4
                      </td>
                      <td>Toyota Supra MK4</td>
                      <td>
                        12,500
                      </td>
                      <td>
                      <div class="span badge bg-danger w-100">Cancelled</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        RNT5
                      </td>
                      <td>Mazda RX7</td>
                      <td>
                        12,500
                      </td>
                      <td>
                      <div class="span badge bg-success w-100">Paid</div>
                      </td>
                    </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
            
            <div class="col-lg-5">
              <div class="card rounded-3 overflow-hidden">
                <div class="card-header border-1 px-4">
                  <h3 class="card-title fw-bold">Latest Cars</h3>
                  <div class="card-tools px-3">
                    <a href="">View all</a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>Image</th>
                      <th>Brand</th>
                      <th>Model</th>
                      <th>Rate</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><img class="car-img-table" src="../assets/images/cars/Skyline_GT-R_BNR32.png" alt=""></td>
                        <td>Nissan</td>
                        <td>Skyline GT-R</td>
                        <td>2,499</td>
                      </tr>
                      <tr>
                        <td><img class="car-img-table" src="../assets/images/cars/NSX_NA1.png" alt=""></td>
                        <td>Honda</td>
                        <td>NSX NA1</td>
                        <td>2,999</td>
                      </tr>
                      <tr>
                        <td><img class="car-img-table" src="../assets/images/cars/supra_mk4.png" alt=""></td>
                        <td>Toyota</td>
                        <td>Supra MK4</td>
                        <td>2,799</td>
                      </tr>
                      <tr>
                        <td><img class="car-img-table" src="../assets/images/cars/civic.png" alt=""></td>
                        <td>Honda</td>
                        <td>Civic FK8</td>
                        <td>2,499</td>
                      </tr>
                      <tr>
                        <td><img class="car-img-table" src="../assets/images/cars/RX7.png" alt=""></td>
                        <td>Mazda</td>
                        <td>RX7</td>
                        <td>2,499</td>
                      </tr>
                      
                      
                  </table>
                </div>
                <!-- /.card -->
              </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    

 
  </div>
  <!-- ./wrapper -->
 


  </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js?v=3.2.0"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
</html>
