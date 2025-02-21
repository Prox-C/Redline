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
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
        z-index: 9;
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


    </style>
    <!-- Custom styles for this template -->
    <link href="modals.css" rel="stylesheet">

  </head>
  <body>
    <?php include_once('components/home-nav.php');?>
    <div class="btn-group-fab" role="group" aria-label="FAB Menu">
      <div>
        <button type="button" class="btn btn-main btn-bd-primary has-tooltip" data-placement="left" title="Menu"> <i class="fa fa-bars"></i></button>
        <button type="button" class="btn btn-sub btn-bd-primary has-tooltip" data-placement="left" title="Fullscreen"> <i class="fa fa-arrows-alt"></i> </button>
        <button type="button" class="btn btn-sub btn-bd-primary has-tooltip" data-placement="left" title="Save"> <i class="fa fa-floppy-o"></i> </button>
        <button type="button" class="btn btn-sub btn-bd-primary has-tooltip" data-placement="left" title="Download"> <i class="fa fa-download"></i> </button>
      </div>
    </div>

  </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js?v=3.2.0"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>

<!-- FAB -->
<script>
  $(function() {
    $('.btn-group-fab').on('click', '.btn', function() {
      $('.btn-group-fab').toggleClass('active');
    });
    $('has-tooltip').tooltip();
  });
</script>
</html>
