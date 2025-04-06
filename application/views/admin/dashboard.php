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
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css?v=3.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>"> 

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

   
    <link  href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    
    <style>
      
    h1, h2, h4, h5, h6 {font-family: 'Syne', "sans-serif"; color: #282828;}
    h3 {font-family: 'Space Grotesk', "sans-serif";}
    * {font-family: 'Space Grotesk', "sans-serif";}
    .txt-pri {color: #EA4335 !important}

      .info-box-icon.brand-dark {background: #B71C1C; color: #fefefe}
      .small-box.brand-primary {background: #EA4335; color: #fefefe}
      .info-box-icon.brand-secondary {background: #F33226; color: #fefefe}
      .info-box-icon.brand-tertiary {background: #EF5350; color: #fefefe}


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

      .link-icon {
        height: 12px;
        position: relative;
        bottom: 1px;
      }

      .box-icon {
        height: 60PX;
        color: #fff;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">

  </head>
  <body>
  <?php $this->load->view('templates/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid pt-5 px-5">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="fw-semibold">System Overview</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Admin</li>
                <li class="breadcrumb-item">Home</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid px-5">
          <div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box brand-primary rounded-3 overflow-hidden">
              <div class="inner px-3">
                <h3>22</h3>
                <p>Cars</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars">
                <svg xmlns="http://www.w3.org/2000/svg" class="box-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M240,104H229.2L201.42,41.5A16,16,0,0,0,186.8,32H69.2a16,16,0,0,0-14.62,9.5L26.8,104H16a8,8,0,0,0,0,16h8v80a16,16,0,0,0,16,16H64a16,16,0,0,0,16-16v-8h96v8a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16V120h8a8,8,0,0,0,0-16ZM80,152H56a8,8,0,0,1,0-16H80a8,8,0,0,1,0,16Zm120,0H176a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16ZM44.31,104,69.2,48H186.8l24.89,56Z"></path></svg>
                </i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box brand-primary rounded-3 overflow-hidden">
              <div class="inner px-3">
                <h3>106</h3>
                <p>Bookings</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars">
                <svg xmlns="http://www.w3.org/2000/svg" class="box-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Z"></path></svg>
                </i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box brand-primary rounded-3 overflow-hidden">
              <div class="inner px-3">
                <h3>47</h3>
                <p>Clients</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars">
                <svg xmlns="http://www.w3.org/2000/svg" class="box-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12c15.23-26.33,38.7-45.21,66.09-54.16a72,72,0,1,1,73.66,0c27.39,8.95,50.86,27.83,66.09,54.16A8,8,0,0,1,230.93,220Z"></path></svg>                </i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box brand-primary rounded-3 overflow-hidden">
              <div class="inner px-3">
                <h3>12</h3>
                <p>Managers</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars">
                <svg xmlns="http://www.w3.org/2000/svg" class="box-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M256,120a8,8,0,0,1-8,8H8a8,8,0,0,1,0-16H35.92l47.5-65.41a16,16,0,0,1,25.31-.72l12.85,14.9.2.23a7.95,7.95,0,0,0,12.44,0l.2-.23,12.85-14.9a16,16,0,0,1,25.31.72L220.08,112H248A8,8,0,0,1,256,120Zm-76,24a36,36,0,0,0-35.77,32H111.77a36,36,0,1,0-1.83,16h36.12A36,36,0,1,0,180,144Z"></path></svg>
                </i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card rounded-3 overflow-hidden">
                <div class="card-header border-1 px-4 pt-3">
                  <h3 class="card-title fw-bold">Recent Bookings</h3>
                  <div class="card-tools pe-2">
                    <a href="" class="txt-pri">View all<svg xmlns="http://www.w3.org/2000/svg" class="link-icon m-0 p-0" fill="currentColor" viewBox="0 0 256 256"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg></a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-valign-middle">
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
                      <div class="span badge bg-warning-subtle text-warning w-100">Pending</div>
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
                      <div class="span badge bg-success-subtle text-success w-100">Confirmed</div>
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
                      <div class="span badge bg-primary-subtle text-primary w-100">Completed</div>
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
                      <div class="span badge bg-danger-subtle text-danger w-100">Cancelled</div>
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
                      <div class="span badge bg-success-subtle text-success w-100">Confirmed</div>
                      </td>
                    </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>
            
            <div class="col-lg-6">
              <div class="card rounded-3 overflow-hidden">
                <div class="card-header border-1 px-4 pt-3">
                  <h3 class="card-title fw-bold">Latest Cars</h3>
                  <div class="card-tools pe-2">
                    <a href="" class="txt-pri">View all<svg xmlns="http://www.w3.org/2000/svg" class="link-icon m-0 p-0" fill="currentColor" viewBox="0 0 256 256"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg></a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>Image</th>
                      <th>Make</th>
                      <th>Model</th>
                      <th>Rate</th>
                    </tr>                                   
                    </thead>
                    <tbody>
                      <tr>
                        <td><img class="car-img-table" src="<?= base_url('assets/images/cars/Skyline_GT-R_BNR32.png') ?>"></td>
                        <td>Nissan</td>
                        <td>Skyline GT-R</td>
                        <td>2,499</td>
                      </tr>
                      <tr>
                        <td><img class="car-img-table" src="<?= base_url('assets/images/cars/NSX_NA1.png') ?>" alt=""></td>
                        <td>Honda</td>
                        <td>NSX NA1</td>
                        <td>2,999</td>
                      </tr>
                      <tr>
                        <td><img class="car-img-table" src="<?= base_url('assets/images/cars/supra_mk4.png') ?>" alt=""></td>
                        <td>Toyota</td>
                        <td>Supra MK4</td>
                        <td>2,799</td>
                      </tr>
                      <tr>
                        <td><img class="car-img-table" src="<?= base_url('assets/images/cars/RX7.png') ?>" alt=""></td>
                        <td>Honda</td>
                        <td>Civic FK8</td>
                        <td>2,499</td>
                      </tr>
                      <tr>
                        <td><img class="car-img-table" src="<?= base_url('assets/images/cars/impreza_wrx_type_r_sti_v6.png') ?>" alt=""></td>
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
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Bootstrap 5.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>

</html>


