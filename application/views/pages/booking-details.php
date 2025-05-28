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
  <?php $this->load->view('templates/forms'); ?>
  <?php $this->load->view('partials/loader'); ?>
    <!-- Header -->
    <nav class="container-fluid sticky-top bg-white p-0">
      <header class="d-flex flex-wrap align-items-center justify-content-between px-4 py-4   m-0 border-bottom">
        <div class="col-1 d-flex align-items-center justify-content-start"> 
            <button onclick="window.location='<?= base_url('bookings/'.$this->session->userdata('user_id'))?>'" class="btn btn-sm border-secondary rounded-circle text-align-center"><svg class="fab-icon" xmlns="http://www.w3.org/2000/svg" height="18px" fill="currentColor" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg></button>
        </div>
        <div class="col-10 d-flex align-items-center justify-content-center">
            <h5 class="m-0 p-0">Booking Details</h5>
        </div>
        <div class="col-1 d-flex align-items-center justify-content-end">
        </div>
      </header>
    </nav>

    <?php 
    if($booking['status'] == 'pending'){
    ?>
      <div class="col-12 bg-warning-subtle py-1 text-center">
        Your booking is being processed. Please wait for the admin to approve your booking.
      </div>
    <?php 
    } else if($booking['status']=='confirmed'){ 
    ?>
      <div class="col-12 bg-success-subtle py-1 text-center">
        Your booking has been Approved. Pickup on <?= date('F j, Y', strtotime($booking['pickup_date'])); ?>.
      </div>
    <?php 
    } 
    ?>


    <div class="container p-lg-5 p-4">
      <div class="card p-lg-5 p-4 rounded-4">
        <div class="col-12 m-0 p-0 d-flex flex-row align-items-center justify-content-between">
          <p class="m-0 text-light text-muted">Booking ID: <?= $booking['booking_id']?></p>
          <p class="m-0 text-light text-muted text-end">Booked on: <?= date('F j, Y', strtotime($booking['created_at'])); ?></p>
        </div>
        <h1><?= $booking['brand'].' '.$booking['model']?></h1>
        <label class="mt-3">Booking Summary</label>
        <div class="col-12 m-0 py-1 p-0 border-bottom d-flex align-items-center justify-content-between">
          <span>Daily Rate</span>
          <span class="text-muted fw-medium">₱<?= $booking['rate']?></span>
        </div>
        <div class="col-12 m-0 py-1 p-0 border-bottom d-flex align-items-center justify-content-between">
          <span>Pickup Date</span>
          <span class="text-muted fw-medium"><?= date('F j, Y', strtotime($booking['pickup_date'])); ?></span>
        </div>
        <div class="col-12 m-0 py-1 p-0 border-bottom d-flex align-items-center justify-content-between">
          <span>Dropoff Date</span>
          <span class="text-muted fw-medium"><?= date('F j, Y', strtotime($booking['dropoff_date'])); ?></span>
        </div>
        <div class="col-12 m-0 py-1 p-0 border-bottom d-flex align-items-center justify-content-between">
          <span>Duration</span>
          <span class="text-muted fw-medium"><?= $booking['total_days']?> days</span>
        </div>
        <div class="col-12 m-0 py-1 p-0 d-flex align-items-center justify-content-between">
          <span>Amount to pay</span>
          <span class="txt-pri fw-bold txt-pri">₱<?= number_format($booking['total_amount'], 0, '.', ',') ?></span>
        </div>

        <?php if ($booking['status'] == 'cancelled'): ?>
            <button class="btn bg-secondary-subtle border-0 mt-3 mx-0 rounded-4" disabled>Cancelled</button>
        <?php elseif ($booking['status'] == 'completed'): ?>
            <button class="btn bg-secondary-subtle border-0  mt-3 mx-0 rounded-4" disabled>Completed</button>
        <?php elseif ($booking['status'] == 'confirmed'): ?>
            <button class="btn bg-secondary-subtle border-0  mt-3 mx-0 rounded-4" disabled>Confirmed</button>
        <?php else: ?>
            <button class="btn bg-danger mt-3 mx-0 rounded-4" data-bs-toggle="modal" data-bs-target="#cancelBookingModal">Cancel Booking</button>
        <?php endif; ?>

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
