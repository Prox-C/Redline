<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?= base_url('assets/dist/js/color-modes.js') ?>"></script>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Redline</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/admin.min.css?v=3.2.0') ?>">
    
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
   
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link href="<?= base_url('assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
     <!-- Toastr --> 
     <link rel="stylesheet" href="<?= base_url('assets/plugins/toastr/toastr.min.css') ?>">
    <style>
    h1, h2, h4, h5, h6 {font-family: 'Syne', "sans-serif"; color: #282828}
    h3 {font-family: 'Space Grotesk', "sans-serif";}
    logo-text {font-family: 'Syne', "sans-serif"; font-weight: 900;}
    * {font-family: 'Space Grotesk', "sans-serif";}
    .txt-pri {color: #EA4335}


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


    .car-img {
        width: 100%; /* Adjust based on container */
        height: 400px; /* Set a square dimension */
        object-fit: contain; /* Ensures the image fills the square without stretching */
    }

    .preview {
    height:240px;
    object-fit: contain;
    }

    .detailsStar {height: 28px;}
    .card-star {height: 16px;}

    .fab-icon {
        position: relative;
        bottom: 1px;
    }

    </style>
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">
  </head>
  <body class="bg-light">

    <!-- Header -->
    <nav class="container-fluid sticky-top bg-white p-0">
      <header class="d-flex flex-wrap align-items-center justify-content-between px-4 py-4   m-0 border-bottom">
        <div class="col-1 d-flex align-items-center justify-content-start"> 
            <button onclick="window.location='<?php echo base_url('admin/view/'.$car['id']); ?>'" class="btn btn-sm border-secondary rounded-circle text-align-center"><svg class="fab-icon" xmlns="http://www.w3.org/2000/svg" height="18px" fill="currentColor" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg></button>
        </div>
        <div class="col-10 d-flex align-items-center justify-content-center">
            <h5 class="m-0 p-0">Update Car Information</h5>
        </div>
        <div class="col-1 d-flex align-items-center justify-content-end">
            <!-- <button class="btn btn-sm btn-outline-danger rounded-circle text-align-center"><svg class="fab-icon" xmlns="http://www.w3.org/2000/svg" height="18px" fill="currentColor" viewBox="0 0 256 256"><path d="M178,36c-20.09,0-37.92,7.93-50,21.56C115.92,43.93,98.09,36,78,36a66.08,66.08,0,0,0-66,66c0,72.34,105.81,130.14,110.31,132.57a12,12,0,0,0,11.38,0C138.19,232.14,244,174.34,244,102A66.08,66.08,0,0,0,178,36Zm-5.49,142.36A328.69,328.69,0,0,1,128,210.16a328.69,328.69,0,0,1-44.51-31.8C61.82,159.77,36,131.42,36,102A42,42,0,0,1,78,60c17.8,0,32.7,9.4,38.89,24.54a12,12,0,0,0,22.22,0C145.3,69.4,160.2,60,178,60a42,42,0,0,1,42,42C220,131.42,194.18,159.77,172.51,178.36Z"></path></svg></button> -->
        </div>
      </header>
    </nav>

    <!-- Main -->
    <div class="container-fluid p-5">
        <div class="row"><div class="col-12"><h2>Car Information</h2></div></div>
        <?= form_open_multipart('admin/updateCar/'.$car['id']); ?>
        <div class="row">
            <div class="col-lg-4 h-100 pb-4">
                <label for="" class="form-label">Thumbnail</label>                             
                <img class="w-100 preview mb-3 rounded-4 bg-secondary-subtle" id="blah" src="<?= base_url('assets/images/cars/' . ($car['thumbnail'] ?? 'preview2.jpg')) ?>" alt="your image" />

                <!-- Actual file input (user can upload a new one) -->
                <input name="image" accept="image/*" class="form-control bg-white rounded-3 mb-2" type="file" onchange="readURL(this);" />

                <!-- Hidden input to carry the old image if no new file is uploaded -->
                <input type="hidden" name="existing_image" value="<?= $car['thumbnail'] ?? ''; ?>">
            </div>

            
            <div class="col-lg-4 d-flex flex-column pb-4">
                <label for="" class="form-label">Manufacturer</label>
                <select name="brand-select" class="form-select form-select-md mb-3 rounded-3" aria-label=".form-select-lg example">
                    <option class="d-none" selected>Brand</option>
                    <option value="Honda" <?= set_select('brand-select', 'Honda', ($car['brand'] == 'Honda')); ?>>Honda</option>
                    <option value="Mazda" <?= set_select('brand-select', 'Mazda', ($car['brand'] == 'Mazda')); ?>>Mazda</option>
                    <option value="Mitsubishi" <?= set_select('brand-select', 'Mitsubishi', ($car['brand'] == 'Mitsubishi')); ?>>Mitsubishi</option>
                    <option value="Nissan" <?= set_select('brand-select', 'Nissan', ($car['brand'] == 'Nissan')); ?>>Nissan</option>
                    <option value="Subaru" <?= set_select('brand-select', 'Subaru', ($car['brand'] == 'Subaru')); ?>>Subaru</option>
                    <option value="Toyota" <?= set_select('brand-select', 'Toyota', ($car['brand'] == 'Toyota')); ?>>Toyota</option>
                </select>

                <label for="" class="form-label">Model</label>
                <input name="model" type="text" placeholder="Enter model name" class="form-control rounded-3 mb-3" value="<?= set_value('model', $car['model']); ?>">
                
                <label for="" class="form-label">Description</label>
                <textarea name="description" placeholder="Write a catchy description for the car" id="description" class="form-control flex-grow-1 rounded-3"><?= set_value('description', $car['description']); ?></textarea>
            </div>

            <div class="col-lg-4 d-flex flex-column p-0 pb-4 justify-content-between">
                <div class="row m-0 p-0">
                    <div class="col-4">
                        <label for="" class="form-label">Power</label>
                        <input name="power" type="number" class="form-control rounded-3" placeholder="(hp)" min="0" value="<?= set_value('power', $car['power']); ?>">
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Top Speed</label>
                        <input name="speed" type="number" class="form-control rounded-3" placeholder="(km/h)" min="0" value="<?= set_value('speed', $car['speed']); ?>">
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Seats</label>
                        <input name="capacity" type="number" class="form-control rounded-3" placeholder="(no.)" min="0" value="<?= set_value('capacity', $car['capacity']); ?>">
                    </div>
                    <div class="col-4 mt-3">
                        <label for="" class="form-label">Transmission</label>
                        <select name="transmission" class="form-select form-select-md mb-3 rounded-3" aria-label=".form-select-lg example">
                            <option class="d-none" selected>Gear box</option>
                            <option value="Automatic" <?= set_select('transmission', 'Automatic', ($car['transmission'] == 'Automatic')); ?>>Automatic</option>
                            <option value="Manual" <?= set_select('transmission', 'Manual', ($car['transmission'] == 'Manual')); ?>>Manual</option>
                        </select>
                    </div>
                    <div class="col-4 mt-3">
                        <label for="" class="form-label">Fuel</label>
                        <select name="fuel" class="form-select form-select-md mb-3 rounded-3" aria-label=".form-select-lg example">
                            <option class="d-none" selected>Fuel</option>
                            <option value="Gasoline" <?= set_select('fuel', 'Gasoline', ($car['fuel'] == 'Gasoline')); ?>>Gasoline</option>
                            <option value="Diesel" <?= set_select('fuel', 'Diesel', ($car['fuel'] == 'Diesel')); ?>>Diesel</option>
                            <option value="Hybrid" <?= set_select('fuel', 'Hybrid', ($car['fuel'] == 'Hybrid')); ?>>Hybrid</option>
                        </select>
                    </div>
                    <div class="col-4 mt-3">
                        <label for="" class="form-label">Status</label>
                        <select name="status" class="form-select form-select-md mb-3 rounded-3" aria-label=".form-select-lg example">
                            <option class="d-none" selected>Status</option>
                            <option value="Available" <?= set_select('status', 'Available', ($car['status'] == 'Available')); ?>>Available</option>
                            <option value="Maintenance" <?= set_select('status', 'Maintenance', ($car['status'] == 'Maintenance')); ?>>Maintenance</option>
                        </select>
                    </div>
                </div>

                <div class="row m-0 p-0">
                    <div class="col-12">
                        <label for="" class="form-label">Rate</label>
                        <input type="number" name="rate" class="form-control form-control-lg mb-3 rounded-3" placeholder="Rate per day (PHP)" min="0" value="<?= set_value('rate', $car['rate']); ?>">
                        <input type="submit" name="add-car" class="btn btn-lg btn-bd-primary rounded-4 w-100" value="Save Changes">
                    </div>
                </div>
            </div>
        </div>
        <?= form_close(); ?>


    </div>


  </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/plugins/toastr/toastr.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>

<script>
  // Create a reusable Toast instance using SweetAlert2
  var Toast = Swal.mixin({
    toast: true,
    position: 'top-end', // Display at the top-right corner
    showConfirmButton: false, // Don't show confirmation button
    timer: 4000 // Duration before auto-close (in milliseconds)
  });

  // Display SweetAlert2 toast for validation errors
  <?php if (validation_errors()): ?>
    Toast.fire({
      icon: 'warning',
      title: 'Please fill up all the fields'
    });
  <?php endif; ?>


  // Display SweetAlert2 toast for flash data error
  <?php if ($this->session->flashdata('error')): ?>
    Toast.fire({
      icon: 'error',
      title: 'Invalid file.'
    });
  <?php endif; ?>
</script>


<script>
  $(function () {
      $('[data-bs-toggle="tooltip"]').tooltip();
  });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</html>
