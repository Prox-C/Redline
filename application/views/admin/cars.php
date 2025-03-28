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
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css?v=3.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>"> 

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

   
    
    <style>
    h1, h2, h4, h5, h6 {font-family: 'Syne', "sans-serif"; color: #282828;}
    h3 {font-family: 'Space Grotesk', "sans-serif";}
    * {font-family: 'Space Grotesk', "sans-serif";}
    .txt-pri {color: #EA4335 !important}

      .info-box-icon.brand-dark {background: #B71C1C; color: #fefefe}
      .info-box-icon.brand-primary {background: #D32F2F; color: #fefefe}
      .info-box-icon.brand-secondary {background: #F33226; color: #fefefe}
      .info-box-icon.brand-tertiary {background: #EF5350; color: #fefefe}


      .bg-primary{background: #EA4335 !important; color: #fefefe}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .link-secondary:hover {
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

      .btn-icons {
        height: 14px;
        position: relative;
        left: 3px;
      }

      .big-cta-icon {
        height: 22px;
        margin-left: 2px;
        position: relative;
        bottom: 1px
      }

      .card-img-top {
        height: 175px !important;
      }

      .car {
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
      }

      .car:hover {
        transform: scale(1.05); /* Scale the card to 110% of its original size */
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Optional: Adds a shadow effect */
      }

      .card-star {height: 16px;}

      .status-tag {
        height: 16px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">

  </head>
  <body>
  <?php $this->load->view('templates/forms'); ?>
  <?php $this->load->view('templates/sidebar'); ?>

    <div class="content-wrapper">
      
      <!-- Header -->
      <section class="content-header">
        <div class="container-fluid pt-5 px-5">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="fw-semibold">Fleet Management</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Admin</li>
                <li class="breadcrumb-item">Cars</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main -->
      <section class="content px-4 px-lg-5">
        <div class="row">
            <!-- Search Bar -->
            <div class="col-12">
                <form action="">
                    <div class="input-group rounded-3 overflow-hidden px-2">
                        <input type="search" class="form-control form-control b rounded-3" placeholder="Search">
                </form>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-sm-6 col-lg-4 mt-3">
                <button onclick="window.location='new-car'" class="car btn btn-lg bg-dark-subtle rounded-4 h-100 w-100 elevation-1">
                    <span class="text-dark fw-bold">New<svg xmlns="http://www.w3.org/2000/svg" class="big-cta-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M208,28H48A20,20,0,0,0,28,48V208a20,20,0,0,0,20,20H208a20,20,0,0,0,20-20V48A20,20,0,0,0,208,28Zm-4,176H52V52H204ZM76,128a12,12,0,0,1,12-12h28V88a12,12,0,0,1,24,0v28h28a12,12,0,0,1,0,24H140v28a12,12,0,0,1-24,0V140H88A12,12,0,0,1,76,128Z"></path></svg></span>
                </button>
            </div>

            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-lg-4 mt-3" onclick="">
                <div class="car card rounded-4 p-0 overflow-hidden h-100">
                <div class="card-body px-4">
                    <div class="row d-flex align-items-center justify-content-between p-0 mb-2">
                    <div class="col-12 m-0 p-0 d-flex align-items-center">

                        <p class="my-0">
                        <span class="badge text-bg-light fw-normal mx-1">400hp</span>
                        <span class="badge text-bg-light fw-normal">300km/h</span>
                        <span class="badge text-bg-light fw-normal">Manual</span>
                        </p>

                        <p class="my-0 ml-auto d-flex align-items-center gap-1"> 
                        <?php $this->load->view('templates/card-star'); ?>
                        <span class="text-muted card-text">4.8</span>
                        </p>
                    </div>
                    </div>          
                </div>
                <img src="<?= base_url('assets/images/cars/SKyline_GT-R_BNR32.png') ?>" class="card-img-top m-0 p-0" alt="Card image">
                <div class="card-body">
                    <div class="row m-0 p-0 mt-1">
                    <h6 class="col-8 m-0 p-0 text-align-left fw-bold">Skyline GT-R BNR32</h6>
                    <p class="col-4 m-0 p-0 text-end fw-semibold txt-pri">₱2499<span class="fw-normal text-muted">/day</span></p>
                    </div>
                </div>
                </div>
            </div>
            

            

            

            

        </div>
      </section>

    </div>
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


