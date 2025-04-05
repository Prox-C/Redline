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
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css?v=3.2.0') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link href="<?= base_url('assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    
    <style>
    h1, h2, h4, h5, h6 {font-family: 'Syne', "sans-serif"; color: #282828}
    h3 {font-family: 'Space Grotesk', "sans-serif";}
    logo-text {font-family: 'Syne', "sans-serif"; font-weight: 900;}
    * {font-family: 'Space Grotesk', "sans-serif";}

    .txt-pri {color: #EA4335 !important;};

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

      .car-bg {
        background-image: url("<?= base_url('assets/images/bg2.jpg') ?>"); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }



    .car-img {
      width: 100%;
      height: 500px;
      object-fit: contain; /* Ensures the image fills the square without stretching */
    }

    .fab-icon {
      position: relative;
      bottom: 1px;
    }

    .spec-logo {
      height: 16px;
      position: relative;
      bottom: 2px;
    }

    .details-star {height: 20px;}
    .card-star {height: 16px;}

    </style>
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <?php $this->load->view('templates/book');?>

    <!-- Header -->
    <nav class="container-fluid sticky-top bg-white p-0">
      <header class="d-flex flex-wrap align-items-center justify-content-between px-4 py-4 m-0 border-bottom">
        <div class="col-1 d-flex align-items-center justify-content-start"> 
            <button onclick="history.back()" class="btn btn-sm border-secondary rounded-circle text-align-center"><svg class="fab-icon" xmlns="http://www.w3.org/2000/svg" height="18px" fill="currentColor" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg></button>
        </div>
        <div class="col-10 d-flex align-items-center justify-content-center">
            <h5 class="m-0 p-0">Car Details</h5>
        </div>
        <div class="col-1 d-flex align-items-center justify-content-end">
            <button class="btn btn-sm btn-outline-danger rounded-circle text-align-center"><svg class="fab-icon" xmlns="http://www.w3.org/2000/svg" height="18px" fill="currentColor" viewBox="0 0 256 256"><path d="M178,36c-20.09,0-37.92,7.93-50,21.56C115.92,43.93,98.09,36,78,36a66.08,66.08,0,0,0-66,66c0,72.34,105.81,130.14,110.31,132.57a12,12,0,0,0,11.38,0C138.19,232.14,244,174.34,244,102A66.08,66.08,0,0,0,178,36Zm-5.49,142.36A328.69,328.69,0,0,1,128,210.16a328.69,328.69,0,0,1-44.51-31.8C61.82,159.77,36,131.42,36,102A42,42,0,0,1,78,60c17.8,0,32.7,9.4,38.89,24.54a12,12,0,0,0,22.22,0C145.3,69.4,160.2,60,178,60a42,42,0,0,1,42,42C220,131.42,194.18,159.77,172.51,178.36Z"></path></svg></button>
        </div>
      </header>
    </nav>

    <!-- Main -->
     <div class="container-fluid"> 
        <div class="row gap-0 p-0 border-bottom">
            <div class="col-lg-6 bg-secondary-subtle p-lg-5 py-0 car-bg"> 
                <img class="img-fluid car-img px-3" src="<?= base_url('assets/images/cars/'.$cars['thumbnail']) ?>" alt="">
            </div>
            <div class="col-lg-6 bg-white p-5 d-flex flex-column">
                <div class="row">
                    <div class="col-9 d-flex align-items-center justify-content-start">
                        <h4 class="m-0 p-0 fw-bold"><?php echo $cars['brand'].' '.$cars['model'];?></h4>
                    </div>
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <?php $this->load->view('templates/details-star');?><h5 style="font-family: 'Space Grotesk'" class="align-middle p-0 m-0 ms-1 fw-normal text-muted"><?php echo $cars['rating'];?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-12">
                    <h5>Description</h5>
                    <p><?php echo $cars['description'];?></p>                  
                  </div>
                  <div class="col-12">
                    <h5>Technical Specifications</h5>
                    <div class="col-12 gap-1 align-items-center p-0">
                      <div class="row">
                        <div class="col-lg-4 col-12 d-flex flex-row align-items-center justify-content-between w-100 border-bottom py-2">
                          <h6 class="p-0 m-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" class="spec-logo me-1" fill="currentColor" viewBox="0 0 256 256"><path d="M213.85,125.46l-112,120a8,8,0,0,1-13.69-7l14.66-73.33L45.19,143.49a8,8,0,0,1-3-13l112-120a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95Z"></path></svg>
                            Power
                          </h6>
                          <span class=" my-0 me-0 ms-2 p-0" style="font-size: 16px"><?php echo $cars['power'];?>hp</span>           
                        </div>
                        <div class="col-lg-4 col-12 d-flex flex-row align-items-center justify-content-between w-100 border-bottom py-2">
                          <h6 class="p-0 m-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" class="spec-logo" fill="currentColor" viewBox="0 0 256 256"><path d="M256,128a15.76,15.76,0,0,1-7.33,13.34L160.48,197.5A15.91,15.91,0,0,1,136,184.16v-37.3L56.48,197.5A15.91,15.91,0,0,1,32,184.16V71.84A15.91,15.91,0,0,1,56.48,58.5L136,109.14V71.84A15.91,15.91,0,0,1,160.48,58.5l88.19,56.16A15.76,15.76,0,0,1,256,128Z"></path></svg>                            
                            Top Speed
                          </h6>
                          <span class=" my-0 me-0 ms-2 p-0" style="font-size: 16px"><?php echo $cars['speed'];?>km/h</span>           
                        </div>
                        <div class="col-lg-4 col-12 d-flex flex-row align-items-center justify-content-between w-100 border-bottom py-2">
                          <h6 class="p-0 m-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" class="spec-logo" fill="currentColor" viewBox="0 0 256 256"><path d="M224,232a8,8,0,0,1-8,8H112a8,8,0,0,1,0-16H216A8,8,0,0,1,224,232Zm-16-88-64.22,0L112,80l14.19-26.32a1.51,1.51,0,0,0,.11-.22A16,16,0,0,0,119.15,32l-.47-.22L85,17.57A16,16,0,0,0,63.8,24.84l-22.12,44a16.1,16.1,0,0,0,0,14.32l58.11,116A15.93,15.93,0,0,0,114.11,208H208a16,16,0,0,0,16-16V160A16,16,0,0,0,208,144Z"></path></svg>
                            Seating Capacity
                          </h6>
                          <span class=" my-0 me-0 ms-2 p-0" style="font-size: 16px"><?php echo $cars['capacity'];?></span>           
                        </div>
                        <div class="col-lg-4 col-12 d-flex flex-row align-items-center justify-content-between w-100 border-bottom py-2">
                          <h6 class="p-0 m-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" class="spec-logo" fill="currentColor" viewBox="0 0 256 256"><path d="M237.94,107.21a8,8,0,0,0-3.89-5.4l-29.83-17-.12-33.62a8,8,0,0,0-2.83-6.08,111.91,111.91,0,0,0-36.72-20.67,8,8,0,0,0-6.46.59L128,41.85,97.88,25a8,8,0,0,0-6.47-.6A111.92,111.92,0,0,0,54.73,45.15a8,8,0,0,0-2.83,6.07l-.15,33.65-29.83,17a8,8,0,0,0-3.89,5.4,106.47,106.47,0,0,0,0,41.56,8,8,0,0,0,3.89,5.4l29.83,17,.12,33.63a8,8,0,0,0,2.83,6.08,111.91,111.91,0,0,0,36.72,20.67,8,8,0,0,0,6.46-.59L128,214.15,158.12,231a7.91,7.91,0,0,0,3.9,1,8.09,8.09,0,0,0,2.57-.42,112.1,112.1,0,0,0,36.68-20.73,8,8,0,0,0,2.83-6.07l.15-33.65,29.83-17a8,8,0,0,0,3.89-5.4A106.47,106.47,0,0,0,237.94,107.21ZM128,168a40,40,0,1,1,40-40A40,40,0,0,1,128,168Z"></path></svg>
                            Transmission
                          </h6>
                          <span class=" my-0 me-0 ms-2 p-0" style="font-size: 16px"><?php echo $cars['transmission'];?></span>           
                        </div>
                        <div class="col-lg-4 col-12 d-flex flex-row align-items-center justify-content-between w-100 py-2">
                          <h6 class="p-0 m-0 text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="spec-logo" fill="currentColor" viewBox="0 0 256 256"><path d="M200,24H123.31A15.86,15.86,0,0,0,112,28.69L101.66,39,91.31,28.69a16,16,0,0,0-22.62,0l-24,24a16,16,0,0,0,0,22.62L55,85.66,44.69,96A15.86,15.86,0,0,0,40,107.31V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V40A16,16,0,0,0,200,24ZM56,64,80,40,90.34,50.34l-24,24ZM180.8,185.6a8,8,0,1,1-9.6,12.8L128,166,84.8,198.4a8,8,0,0,1-9.6-12.8L114.67,156,75.2,126.4a8,8,0,0,1,9.6-12.8L128,146l43.2-32.4a8,8,0,0,1,9.6,12.8L141.33,156ZM176,72H136a8,8,0,0,1,0-16h40a8,8,0,0,1,0,16Z"></path></svg>
                            Fuel Type
                          </h6>
                          <span class=" my-0 me-0 ms-2 p-0" style="font-size: 16px"><?php echo $cars['fuel'];?></span>           
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row px-0 mt-auto d-flex align-items-center pb-lg-0 pb-5">
                <div class="col-lg-4 h-100 d-flex align-items-center justify-content-start">
                    <h5 class="fw-semibold p-0 m-0 txt-pri" style="font-family: 'Space Grotesk';">₱<?php echo $cars['rate']?><span class="fw-normal text-muted">/day</span></h5>
                </div>

                  <div class="col-lg-8">
                    <button class="btn btn-lg btn-bd-primary w-100 rounded-4">Book now</button>
                  </div>
                </div>
            </div>
        </div>

        <div class="row d-flex align-items-start px-5 pb-5 bg-white">
          <div class="col-lg-6 mt-5 py-3 ps-0 pe-lg-4 px-0">
            <h2 class="mb-4">Ratings</h2>
            <?php $this->load->view('templates/ratings');?>
          </div>
          <div class="col-lg-6 ml-auto py-3 mt-5 align-items-center justify-content-center">
            <h2 class="mb-4">Reviews</h2>
            <!-- <p class="text-muted fw-normal text-center p-5">
              Wow, such empty.
            </p> -->
            <?php $this->load->view('templates/reviews');?>
          </div>
          
        </div>
     </div>


  </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>

<script>
  $(function () {
      $('[data-bs-toggle="tooltip"]').tooltip();
  });
</script>
</html>
