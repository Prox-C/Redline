<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?= base_url('assets/js/color-modes.js') ?>"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Redline</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/bootstrap.min.css?v=3.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>"> 

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/loader.css')?>">
    
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
    --bs-btn-hover-bg: #D63A2D !important; /* Darker background on hover */
    --bs-btn-hover-border-color: #D63A2D !important; /* Darker border on hover */

    /* Focus state */
    --bs-btn-focus-shadow-rgb: var(--bd-primary-rgb); /* Focus shadow using RGB */

    /* Active (Pressed) state */
    --bs-btn-active-color: var(--bs-btn-hover-color) !important; /* White text */
    --bs-btn-active-bg: #C23125 !important; /* Even darker background on active */
    --bs-btn-active-border-color: #C23125 !important; /* Even darker border on active */
}

/* Ensure Bootstrap's default active styles are overridden */
.btn-bd-primary:active,
.btn-bd-primary:focus,
.btn-bd-primary:focus-visible {
    background-color: #C23125 !important;
    border-color: #C23125 !important;
    color: #fff !important;
    box-shadow: none !important;
}


      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      .btn-group-fab {
        position: fixed;
        width: 50px;
        height: auto;
        right: 20px; bottom: 20px;
      }
      .btn-group-fab div {
        position: relative; width: 100%;
        height: auto;
      }
      .btn-group-fab .btn {
        position: absolute;
        bottom: 0;
        border-radius: 50%;
        display: block;
        margin-bottom: 4px;
        width: 40px; height: 40px;
        margin: 4px auto;
      }
      .btn-group-fab .btn-main {
        width: 50px; height: 50px;
        right: 50%; margin-right: -25px;
        z-index: 20;
      }
      .btn-group-fab .btn-sub {
        bottom: 0; z-index: 8;
        right: 50%;
        margin-right: -20px;
        -webkit-transition: all 2s;
        transition: all 0.5s;
      }
      .btn-group-fab.active .btn-sub:nth-child(2) {
        bottom: 60px;
      }
      .btn-group-fab.active .btn-sub:nth-child(3) {
        bottom: 110px;
      }
      .btn-group-fab.active .btn-sub:nth-child(4) {
        bottom: 160px;
      }
      .btn-group-fab .btn-sub:nth-child(5) {
        bottom: 210px;
      }

      .fab-icon {
        height: 22px;
        position: relative;
        right: 4px;
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
        height: 175px !important; object-fit: contain;
      }

      .car {
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
      }

      .car:hover {
        transform: scale(1.05); /* Scale the card to 110% of its original size */
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Optional: Adds a shadow effect */
      }

      .card-star {height: 16px;}
      .make-logo {height: 26px; width: auto; position: relative; bottom: 2px;}

      @font-face {
        font-family: 'NikkyouSans';
        src: url('assets/fonts/NikkyouSans-mLKax.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    .logo-tag {
        height: 16px; 
        position: relative;
        bottom: 1px;
        right: 6px;
      }

    .form-floating .form-control {
      background-color: white !important;
    }

    .search-button-icon {
        height: 16px; 
        position: relative;
        bottom: 1px;
    }

    .nav-icon {
      height: 20px;
      position: relative;
      bottom: 2px ;
    }
    </style>

  </head>
  <body class="bg-light-subtle">
  <?php $this->load->view('partials/loader'); ?>
  <?= $this->session->set_userdata('current_view', 'pages/browse'); ?>
  <?php $this->load->view('templates/forms'); ?>
  <?php $this->load->view('templates/top-nav'); ?>


  <div class="container px-4">
    <!-- Search -->
    <div class="card p-3 rounded-3 m-2 shadow-sm">
        <div class="row g-lg-3">
            <div class="col-lg-3 col-12 mb-3 mb-lg-0">
                <div class="form-floating">
                    <input name="searchCar" type="text" class="form-control rounded-3" placeholder="search car" value="<?= $this->session->userdata('search-car')?>" disabled>
                    <label class="text-muted-subtle fw-normal">Search Car</label>
                </div>
            </div>
            <div class="col-lg-3 col-12 mb-3 mb-lg-0">
                <div class="form-floating position-relative">
                    <input type="text" class="form-control rounded-3 pe-5" id="pickupDate" name="rentStart" placeholder="Pickup" value="<?= $this->session->userdata('pickup-date')?>" disabled>
                    <label for="pickupDate" class="text-muted-subtle fw-normal">Pickup</label>
                    <span class="position-absolute end-0 top-50 translate-middle-y me-3">
                        <i class="bi bi-calendar"></i>
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-12 mb-3 mb-lg-0">
                <div class="form-floating position-relative">
                    <input type="text" class="form-control rounded-3 pe-5" id="dropoffDate" name="rentEnd" placeholder="Dropoff" value="<?= $this->session->userdata('dropoff-date')?>" disabled>
                    <label for="dropoffDate" class="text-muted-subtle fw-normal">Dropoff</label>
                    <span class="position-absolute end-0 top-50 translate-middle-y me-3">
                        <i class="bi bi-calendar"></i>
                    </span>
                </div>
            </div>
            <div class="col-lg-3 col-12 mb-3 mb-lg-0">
                <button class="btn bg-secondary-subtle text-dark rounded-4 h-100 w-100" onclick="window.location='<?= base_url('home')?>'">
                    Clear
                    <svg xmlns="http://www.w3.org/2000/svg" class="search-button-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg>                </button>
            </div>
        </div>


    </div>
    
    <div class="col-lg-12 d-flex flex-wrap justify-content-center align-items-center gap-2 mt-4 mx-0 px-0">
        <h6 class="w-100 mx-2 align-middle text-dark">
          Results (<span style="font-size: 14px"><?= $results ?></span>)
        </h6>
        <div class="row w-100 px-0">

          <?php if(!empty($cars))
          {
            foreach ($cars as $car) 
            { 
          ?>
          
          <div class="col-12 col-sm-6 col-lg-4 mb-0 mx-0 px-2 pb-3" onclick="window.location='<?= base_url('view-car/' . $car['id']); ?>'">
            <div class="car card rounded-4 p-0 overflow-hidden mx-0 shadow-sm">
              <div class="card-body px-4">
                <div class="row d-flex align-items-center justify-content-between p-0 mb-2">
                  <div class="col-12 m-0 p-0 d-flex align-items-center justify-content-between">

                    <p class="my-0">
                      <span class="badge text-bg-light fw-normal mx-1"><?php echo $car['power'];?>hp</span>
                      <span class="badge text-bg-light fw-normal"><?php echo $car['speed'];?>km/h</span>
                      <span class="badge text-bg-light fw-normal"><?php echo $car['transmission'];?></span>
                    </p>

                    <p class="my-0 d-flex align-items-center gap-1 me-2"> 
                      <?php $this->load->view('templates/card-star'); ?>
                      <span class="text-muted card-text"><?php echo $car['rating'];?></span>
                    </p>
                  </div>
                </div>          
              </div>
              <img src="<?= base_url('assets/images/cars/' . $car['thumbnail']) ?>" class="card-img-top m-0 p-0" alt="Card image">
              <div class="card-body">
                <div class="row m-0 p-0 mt-1">
                  
                  <h6 class="col-8 m-0 p-0 text-align-left fw-bold"><?php $this->load->view('components/'.$car['brand']);?><?php echo $car['model'];?></h6>
                  <p class="col-4 m-0 p-0 text-end fw-semibold txt-pri">₱<?php echo $car['rate'];?><span class="fw-normal text-muted">/day</span></p>
                </div>
              </div>
            </div>
          </div> 

          <?php
            }
          } else {
          ?>

          <div class="col-12 col-sm-6 col-lg-4 mb-0 mx-0 px-2 w-100 d-flex align-items-center justify-content-center" style="height: 300px"> 
            No cars found. 
          </div>
          <?php 
                }
          ?>
    
        </div>
    </div>

  </div>



  <?php 
    if($this->session->userdata('logged_in')){
      $this->load->view('templates/fab');
    }
  ?>
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

<!-- Date Picker -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize the pickup date picker
        const pickupDatePicker = flatpickr("#pickupDate", {
            dateFormat: "Y-m-d",
            disable: ["2025-04-01", "2025-04-15"], // Disable specific dates
            onChange: function (selectedDates) {
                if (selectedDates.length > 0) {
                    const minDropoffDate = new Date(selectedDates[0]);
                    minDropoffDate.setDate(minDropoffDate.getDate() + 1); // Ensure dropoff is at least 1 day after

                    dropoffDatePicker.set("minDate", minDropoffDate);
                }
            }
        });

        // Initialize the dropoff date picker
        const dropoffDatePicker = flatpickr("#dropoffDate", {
            dateFormat: "Y-m-d",
            disable: [
                function(date) {
                    return (date.getDay() === 0 || date.getDay() === 6); // Disable weekends
                }
            ],
            onChange: function (selectedDates) {
                const pickupDate = pickupDatePicker.selectedDates[0];
                if (pickupDate && selectedDates.length > 0) {
                    if (selectedDates[0] <= pickupDate) {
                        alert("Drop-off date must be later than the pickup date.");
                        dropoffDatePicker.clear();
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#bday", {
            dateFormat: "Y-m-d",  // Format as MM-DD-YYYY
        });
    });
</script>

<!-- Modals & Alerts -->
<?php if ($this->session->flashdata('registration-success')): ?>
  <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000,
      customClass: {
        popup: 'custom-toast'
      }
    });

    Toast.fire({
      html: `
        <div style="display: flex; align-items: center;">
          <img src="https://media.tenor.com/SNL9_xhZl9oAAAAj/waving-hand-joypixels.gif" width="30" height="30" style="margin-right: 10px;">
          <span>Welcome to Redline Rentals!</span>
        </div>
      `
    });
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('login-success')): ?>
  <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000,
      customClass: {
        popup: 'custom-toast'
      }
    });

    Toast.fire({
      html: `
        <div style="display: flex; align-items: center;">
          <img src="https://media.tenor.com/SNL9_xhZl9oAAAAj/waving-hand-joypixels.gif" width="30" height="30" style="margin-right: 10px;">
          <span><?= $this->session->flashdata('login-success');?></span>
        </div>
      `
    });
  </script>
<?php endif; ?>





<!-- FAB -->
<script>
  $(function() {
    $('.btn-group-fab').on('click', '.btn', function() {
      $('.btn-group-fab').toggleClass('active');
    });
    $('has-tooltip').tooltip();
  });
</script>
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
        title: 'Please fill up all the fields.'
      });

      var modalID = '<?= $this->session->flashdata('validation-error'); ?>';
      var modal = new bootstrap.Modal(document.getElementById(modalID));
      modal.show();
    <?php endif; ?>

    <?php if ($this->session->flashdata('password-mismatch')): ?>
      Toast.fire({
        icon: 'warning',
        title: 'Passwords do not match'
      });
      var modalID = '<?= $this->session->flashdata('password-mismatch'); ?>';
      var modal2 = new bootstrap.Modal(document.getElementById(modalID));
      modal2.show();
    <?php endif; ?>

    // Check for flash data error
    <?php if ($this->session->flashdata('error')): ?>
      Toast.fire({
        icon: 'error',
        title: '<?= $this->session->flashdata('error'); ?>'
      });
    <?php endif; ?>

    <?php if ($this->session->flashdata('login-failed')): ?>
      Toast.fire({
        icon: 'error',
        title: '<?= $this->session->flashdata('login-failed'); ?>'
      });
    <?php endif; ?>

    <?php if ($this->session->flashdata('email-error')): ?>
      var modalID = '<?= $this->session->flashdata('email-error'); ?>';
      var modal3 = new bootstrap.Modal(document.getElementById(modalID));
      modal3.show();
    <?php endif; ?>


  </script>

</html>


