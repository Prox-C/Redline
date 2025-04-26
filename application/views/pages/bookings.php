<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/dist/js/color-modes.js"></script>

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

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link href="<?= base_url('assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/loader.css')?>">

    
    <style>
    h1, h2, h4, h5, h6 {font-family: 'Syne', "sans-serif"; color: #282828}
    h3 {font-family: 'Space Grotesk', "sans-serif";}
    logo-text {font-family: 'Syne', "sans-serif"; font-weight: 900;}
    * {font-family: 'Space Grotesk', "sans-serif";}


      .small-box.brand-dark {background: #c5211c; color: #fefefe}
      .small-box.brand-primary {background: #EA4335; color: #fefefe}
      .small-box.brand-secondary {background: #f59b65; color: #fefefe}
      .small-box.brand-tertiary {background: #f7ba79; color: #fefefe}

      .box-icon {height: 70px; fill: #fefefe}

      .bg-primary {background: #EA4335 !important}

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

      .txt-pri {color: #EA4335}

      /* Default border color */
    .form-check-input {
        border: 2px solid #EA4335 !important;
    }

    /* Change color when selected */
    .form-check-input:checked {
        background-color: #EA4335 !important;
        border-color: #EA4335 !important;
        box-shadow: 0 0 5px #EA4335 !important;
    }

    .fab-icon{
        position: relative;
        bottom: 1px;
    }

    .list-image {
        height: 100px;
        object-fit: cover;
    }

    .booking-card {
      transition: border 0.5s ease;
    }

    .booking-card:hover {
      border: 1px solid #EA4335;
    }

    .accordion-button {
      box-shadow: none !important;
      background-color: transparent !important;
    }

    .accordion-button:focus {
      box-shadow: none !important;
    }

    .accordion-button:active {
      background-color: transparent !important;
      box-shadow: none !important;
    }




    </style>
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">
  </head>
  <body class="bg-light">
  <?php $this->load->view('partials/loader'); ?>
    <!-- Header -->
    <nav class="container-fluid sticky-top bg-white p-0">
      <header class="d-flex flex-wrap align-items-center justify-content-between px-4 py-4   m-0 border-bottom">
        <div class="col-1 d-flex align-items-center justify-content-start"> 
            <button onclick="window.location='<?= base_url('home')?>'" class="btn btn-sm border-secondary rounded-circle text-align-center"><svg class="fab-icon" xmlns="http://www.w3.org/2000/svg" height="18px" fill="currentColor" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg></button>
        </div>
        <div class="col-10 d-flex align-items-center justify-content-center">
            <h5 class="m-0 p-0">My Bookings</h5>
        </div>
        <div class="col-1 d-flex align-items-center justify-content-end">
        </div>
      </header>
    </nav>

    <div class="container p-5">
      <div class="accordion" id="bookingsAccordion">
        <!-- Active Bookings -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingActive">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseActive" aria-expanded="true" aria-controls="collapseActive">
              Active Bookings
            </button>
          </h2>
          <div id="collapseActive" class="accordion-collapse collapse show" aria-labelledby="headingActive" data-bs-parent="#bookingsAccordion">
            <div class="accordion-body pb-1">
              <?php foreach ($bookings as $booking): ?>
                <?php if ($booking['status'] === 'pending' || $booking['status'] === 'confirmed'): ?>
                  <div class="card elevation-0 p-3 rounded-3 mb-3 booking-card" onclick="window.location='<?= base_url('view-booking/' . $booking['booking_id']); ?>'">
                    <div class="row g-3 align-items-center">
                      <div class="col-12 col-md-auto">
                        <img src="<?= base_url('assets/images/cars/' . $booking['thumbnail']) ?>" class="img-fluid rounded-2" style="max-width: 140px;" alt="...">
                      </div>
                      <div class="col">
                        <h5 class="mb-1"><?= $booking['brand'] . ' ' . $booking['model'] ?></h5>
                        <div class="text-muted"><?= $booking['pickup_date'] ?> to <?= $booking['dropoff_date'] ?></div>
                        <div class="mt-1 fw-semibold">₱<?= number_format($booking['total_amount'], 2) ?></div>
                      </div>
                      <div class="col-auto text-end">
                        <?php
                          $status = $booking['status'];
                          $badgeClass = '';

                          if ($status === 'pending') {
                            $badgeClass = 'bg-warning-subtle text-warning';
                          } else {
                            $badgeClass = 'bg-success-subtle text-success';
                          }
                        ?>
                        <span class="badge <?= $badgeClass ?>"><?= ucfirst($status) ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Cancelled Bookings -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingCancelled">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCancelled" aria-expanded="false" aria-controls="collapseCancelled">
              Cancelled Bookings
            </button>
          </h2>
          <div id="collapseCancelled" class="accordion-collapse collapse" aria-labelledby="headingCancelled" data-bs-parent="#bookingsAccordion">
            <div class="accordion-body pb-1">
              <?php foreach ($bookings as $booking): ?>
                <?php if ($booking['status'] === 'cancelled'): ?>
                  <div class="card bg-light p-3 rounded-3 mb-3 text-muted elevation-0 booking-card" onclick="window.location='<?= base_url('view-booking/' . $booking['booking_id']); ?>'">
                    <div class="row g-3 align-items-center">
                      <div class="col-12 col-md-auto">
                        <img src="<?= base_url('assets/images/cars/' . $booking['thumbnail']) ?>" class="img-fluid rounded-2" style="max-width: 140px;" alt="...">
                      </div>
                      <div class="col">
                        <h5 class="mb-1"><?= $booking['brand'] . ' ' . $booking['model'] ?></h5>
                        <div><?= $booking['pickup_date'] ?> to <?= $booking['dropoff_date'] ?></div>
                        <div class="mt-1">₱<?= number_format($booking['total_amount'], 2) ?></div>
                      </div>
                      <div class="col-auto text-end">
                        <span class="badge bg-danger-subtle text-danger"><?= ucfirst($booking['status']) ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Completed Bookings -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingCompleted">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCompleted" aria-expanded="false" aria-controls="collapseCompleted">
              Completed Bookings
            </button>
          </h2>
          <div id="collapseCompleted" class="accordion-collapse collapse" aria-labelledby="headingCompleted" data-bs-parent="#bookingsAccordion">
            <div class="accordion-body pb-0">
              <?php foreach ($bookings as $booking): ?>
                <?php if ($booking['status'] === 'completed'): ?>
                  <div class="card bg-light p-3 rounded-3 mb-3 text-muted elevation-0 booking-card" onclick="window.location='<?= base_url('view-booking/' . $booking['booking_id']); ?>'">
                    <div class="row g-3 align-items-center">
                      <div class="col-12 col-md-auto">
                        <img src="<?= base_url('assets/images/cars/' . $booking['thumbnail']) ?>" class="img-fluid rounded-2" style="max-width: 140px;" alt="...">
                      </div>
                      <div class="col">
                        <h5 class="mb-1"><?= $booking['brand'] . ' ' . $booking['model'] ?></h5>
                        <div><?= $booking['pickup_date'] ?> to <?= $booking['dropoff_date'] ?></div>
                        <div class="mt-1">₱<?= number_format($booking['total_amount'], 2) ?></div>
                      </div>
                      <div class="col-auto text-end">
                        <span class="badge bg-primary-subtle text-primary"><?= ucfirst($booking['status']) ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="<?= base_url('assets/dist/js/loader.js')?>"></script>
  </body>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Bootstrap 5.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<!-- Flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


<script>
  $(function () {
      $('[data-bs-toggle="tooltip"]').tooltip();
  });
</script>

<script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end', // Top-right corner
      showConfirmButton: false,
      timer: 4000
    });

    <?php if ($this->session->flashdata('validation-error')): ?>
      Toast.fire({
        icon: 'warning',
        text: 'Please fill up all the fields.'
      });
    <?php endif; ?>
  </script>
</html>
