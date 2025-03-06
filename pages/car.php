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
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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


      .car-img {
        width: 100%; /* Adjust based on container */
        height: 400px; /* Set a square dimension */
        object-fit: contain; /* Ensures the image fills the square without stretching */
    }

    .fab-icon {
      position: relative;
      bottom: 0px;
    }

    .detailsStar {height: 28px;}
    .card-star {height: 16px;}

    </style>
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <?php include_once('../components/book.php');?>

    <!-- Header -->
    <nav class="container-fluid sticky-top bg-white p-0">
      <header class="d-flex flex-wrap align-items-center justify-content-between px-4 py-4   m-0 border-bottom">
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
            <div class="col-lg-5 bg-secondary-subtle p-5">
                <img class="img-fluid car-img" src="../assets/images/cars/Skyline_GT-R_BNR32.png" alt="">
            </div>
            <div class="col-lg-7 bg-white p-5 d-flex flex-column">
                <div class="row mb-3">
                    <div class="col-9 d-flex align-items-center justify-content-start">
                        <h2 class="m-0 p-0 fw-bold">Nissan Skyline GT-R</h2>
                    </div>
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <?php $className="detailsStar"; include("../assets/svgs/star.php");?><h4 style="font-family: 'Space Grotesk'" class="align-middle p-0 m-0 ms-1 fw-normal text-muted">4.8</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-12">
                    <h5>Description</h5>
                    <p>The Nissan Skyline GT-R BNR32, also known as the "Godzilla," is a legendary Japanese sports car that revolutionized performance with its RB26DETT twin-turbo inline-six engine and ATTESA E-TS all-wheel-drive system.</p>                  
                  </div>
                  <div class="col-12">
                    <h5>Technical Specifications</h5>
                    <div class="col-12 gap-1 align-items-center p-0">
                      <span class="badge bg-secondary px-3 rounded-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Power">400hp</span>
                      <span class="badge bg-secondary px-3 rounded-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Top Speed">300km/h</span>
                      <span class="badge bg-secondary px-3 rounded-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Transmission">Manual</span>
                      <span class="badge bg-secondary px-3 rounded-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fuel Type">Gasoline</span>
                      <span class="badge bg-secondary px-3 rounded-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Seating Capacity">2</span>
                    </div>
                  </div>
                </div>
                <div class="row px-0 d-flex h-100 align-items-end mt-5">
                  <div class="col-md-4">
                    <h5 style="font-family: 'Space Grotesk';" class="fw-semibold">₱2499<span class="fw-normal text-muted">/day</span></5>
                  </div>
                  <div class="col-md-8 mt-2">
                    <button class="px-4 btn btn-lg btn-bd-primary btn-block rounded-4 m-0 d-flex justify-content-between align-items-center w-100" data-bs-toggle="modal" data-bs-target="#bookModal">
                      <span>Book now</span> 
                      <svg xmlns="http://www.w3.org/2000/svg" height="24" fill="currentColor" viewBox="0 0 256 256"><path d="M224.49,136.49l-72,72a12,12,0,0,1-17-17L187,140H40a12,12,0,0,1,0-24H187L135.51,64.48a12,12,0,0,1,17-17l72,72A12,12,0,0,1,224.49,136.49Z"></path></svg>
                    </button>
                  </div>
                </div>
            </div>
        </div>

        <div class="row d-flex align-items-start px-5 pb-5 bg-white">
          <div class="col-lg-5 pt-5 px-0">
            <h2 class="mb-4">Ratings</h2>
            <?php  include('../components/ratings_chart.php');?>
          </div>
          <div class="col-lg-6 ml-auto pt-5 align-items-center justify-content-center">
            <h2 class="mb-4">Reviews</h2>
            <!-- <p class="text-muted fw-normal text-center p-5">
              Wow, such empty.
            </p> -->
            <?php include_once('../components/reviews.php');?>
          </div>
          
        </div>
     </div>


  </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js?v=3.2.0"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>


<script>
  $(function () {
      $('[data-bs-toggle="tooltip"]').tooltip();
  });
</script>
</html>
