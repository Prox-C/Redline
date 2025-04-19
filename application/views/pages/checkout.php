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
            <button onclick="history.back()" class="btn btn-sm border-secondary rounded-circle text-align-center"><svg class="fab-icon" xmlns="http://www.w3.org/2000/svg" height="18px" fill="currentColor" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg></button>
        </div>
        <div class="col-10 d-flex align-items-center justify-content-center">
            <h5 class="m-0 p-0">Checkout</h5>
        </div>
        <div class="col-1 d-flex align-items-center justify-content-end">
        </div>
      </header>
    </nav>

    <div class="container p-5">
    <main>
        <div class="py-5 text-center">  
        <img class="d-block mx-auto mb-4" src="<?= base_url('assets/images/Car rental-pana.svg') ?>" alt="" width="230">
        <h2>Your JDM Beast is Ready.</h2>
        <p class="text-muted">
        Review your details, choose your payment method, and get ready to hit the road—your dream drive is just a few clicks away!
        </p>
        </div>

        <div class="row g-5">
        <div class="col-md-4 col-lg-5 order-last">
        <?php if (validation_errors()): ?>
          <div class="alert alert-danger">
            <?= validation_errors(); ?>
          </div>
        <?php endif; ?>

        <?= form_open('book') ?>
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            Booking Summary
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0"><?= $car['brand'] . ' ' . $car['model'] ?></h6>
                <small class="text-body-secondary">Car selected</small>
              </div>
              <span class="text-body-secondary">₱<?= $car['rate'] ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Pickup Date</h6>
                <small class="text-body-secondary">Rent start</small>
              </div>
              <span class="text-body-secondary"><?= date('F j, Y', strtotime($this->session->userdata('pickup-date'))) ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Return Date</h6>
                <small class="text-body-secondary">Rent end</small>
              </div>
              <span class="text-body-secondary"><?= date('F j, Y', strtotime($this->session->userdata('dropoff-date'))) ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">Rent Duration</h6>
                <small class="text-body-secondary">No. of days booked</small>
              </div>
              <span class="text-body-secondary"><?= $rent_duration ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <div>
                <h6 class="my-0">Total</h6>
              </div>
              <span class="text-dark fw-bold">₱<?= $car['rate'] * $rent_duration ?></span>
            </li>
          </ul>

          <hr class="my-4">
          <button class="w-100 btn btn-bd-primary btn-lg rounded-4" type="submit">Place booking</button>
          </div>

          <div class="col-md-6 col-lg-7">
            <h4 class="mb-3">Personal Information</h4>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" name="fname" value="<?= set_value('fname', $this->session->userdata('fname')) ?>" required>
                <?= form_error('fname', '<div class="text-danger small">', '</div>') ?>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lname" value="<?= set_value('lname', $this->session->userdata('lname')) ?>" required>
                <?= form_error('lname', '<div class="text-danger small">', '</div>') ?>
              </div>

              <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?= set_value('email', $this->session->userdata('email')) ?>">
                <?= form_error('email', '<div class="text-danger small">', '</div>') ?>
              </div>

              <div class="col-6">
                <label for="number" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="number" value="<?=  set_value('number')?>" placeholder="Enter mobile no." autocomplete="off">
                <?= form_error('number', '<div class="text-danger small">', '</div>') ?>
              </div>

              <div class="col-12 mb-4">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" value="<?= set_value('address') ?>" required>
                <?= form_error('address', '<div class="text-danger small">', '</div>') ?>
              </div>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Billing Information</h4>

            <div class="my-3">
              <label class="form-label d-block mb-2">Mode of payment</label>
              <div class="btn-group w-100 gap-3" role="group" aria-label="payment_method">
                <input type="radio" class="btn-check" name="paymentMethod" id="credit" autocomplete="off" value="Credit Card"
                  <?= set_radio('paymentMethod', 'Credit Card', TRUE) ?> required>
                <label class="btn btn-outline-dark w-50 rounded-3" for="credit">Credit card</label>

                <input type="radio" class="btn-check" name="paymentMethod" id="debit" autocomplete="off" value="Debit Card"
                  <?= set_radio('paymentMethod', 'Debit Card') ?> required>
                <label class="btn btn-outline-dark w-50 rounded-3" for="debit">Debit card</label>
              </div>
              <?= form_error('paymentMethod', '<div class="text-danger small mt-1">', '</div>') ?>
            </div>

            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Name on card</label>
                <input type="text" class="form-control" name="card_name" value="<?= set_value('card_name') ?>" placeholder="Full name as displayed on card" required>
                <?= form_error('card_name', '<div class="text-danger small">', '</div>') ?>
              </div>

              <div class="col-md-6">
                <label for="cc-number" class="form-label">Credit card number</label>
                <input type="text" class="form-control" name="card_no" value="<?= set_value('card_no') ?>" placeholder="16-digit card number" maxlength="19" required>
                <?= form_error('card_no', '<div class="text-danger small">', '</div>') ?>
              </div>

              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Expiration</label>
                <input type="text" class="form-control" name="card_expiration" value="<?= set_value('card_expiration') ?>" placeholder="MM/YY" maxlength="5">
                <?= form_error('card_expiration', '<div class="text-danger small">', '</div>') ?>
              </div>

              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" name="card_cvv" value="<?= set_value('card_cvv') ?>" placeholder="3-digit code" maxlength="3" required>
                <?= form_error('card_cvv', '<div class="text-danger small">', '</div>') ?>
              </div>
            </div>

            <!-- Hidden fields -->
            <input type="hidden" name="car_id" value="<?= $car['id'] ?>">
            <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id') ?>">
            <input type="hidden" name="duration" value="<?= $rent_duration ?>">
            <input type="hidden" name="total_amount" value="<?= $car['rate'] * $rent_duration ?>">
            <input type="hidden" name="pickup" value="<?= $this->session->userdata('pickup-date') ?>">
            <input type="hidden" name="dropoff" value="<?= $this->session->userdata('dropoff-date') ?>">
          </div>
          <?= form_close() ?>


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
