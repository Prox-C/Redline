<?php 
  require_once('../config.php');

  if (isset($_POST['register'])) 
  {
      $email = isset($_POST['email']) ? (string) $_POST['email'] : '';
      $fname = isset($_POST['fname']) ? ucwords((string) $_POST['fname']) : '';
      $lname = isset($_POST['lname']) ? ucwords((string) $_POST['lname']) : '';
      $bday = isset($_POST['bday']) && !empty($_POST['bday']) ? date("Y-m-d", strtotime($_POST['bday'])) : null;
      $sex = isset($_POST['sex']) ? (string) $_POST['sex'] : '';
      $password = isset($_POST['password']) ? (string) $_POST['password'] : '';
      // $password2 = isset($_POST['password2']) ? (string) $_POST['password2'] : '';
      

      // if($password != $password2)
      // {
      //     echo "<script>alert('Passwords do not match.');</script>";
      //     echo "<script>location.href='clients.php'</script>"; 
      //     exit;
      // }
  
      $result = register_user(3, $email, $password, $fname, $lname, $bday, $sex, 'profile.png');
  
      if ($result === "email_exists") 
      {
          echo "<script>alert('This email is already registered. Please use a different email.');</script>";
      } 
      else 
      {
        echo "<script>alert('Account Created!');</script>";
        echo "<script>location.href='clients.php'</script>";
      }
  }

  
  if (isset($_POST['update'])) 
  {
      $user_id = isset($_POST['update_user']) ? (int) $_POST['update_user'] : '';
      $email = isset($_POST['email']) ? (string) $_POST['email'] : '';
      $fname = isset($_POST['fname']) ? ucwords((string) $_POST['fname']) : '';
      $lname = isset($_POST['lname']) ? ucwords((string) $_POST['lname']) : '';
      $bday = isset($_POST['bday']) && !empty($_POST['bday']) ? date("Y-m-d", strtotime($_POST['bday'])) : null;
      $sex = isset($_POST['sex']) ? (string) $_POST['sex'] : '';
      $password = isset($_POST['password']) ? (string) $_POST['password'] : '';
      // $password2 = isset($_POST['password2']) ? (string) $_POST['password2'] : '';
      

      // if($password != $password2)
      // {
      //     echo "<script>alert('Passwords do not match.');</script>";
      //     echo "<script>location.href='clients.php'</script>"; 
      //     exit;
      // }
  
      $result = update_user($user_id, $email, $password, $fname, $lname, $bday, $sex);
  
      if ($result === "email_exists") 
      {
          echo "<script>alert('This email is already being used. Please use a different email.');</script>";
      } 
      else 
      {
        echo "<script>alert('Changes saved!');</script>";
        echo "<script>location.href='clients.php'</script>";
      }
  }

  if(isset($_POST['delete']))
  {
    $user_id = isset($_POST['delete_user']) ? (int) $_POST['delete_user'] : '';
    $result = delete_user($user_id);

    if($result)
    {
      echo "<script>alert('User deleted.');</script>";
      echo "<script>location.href='clients.php'</script>";
    }
    else
    {
      echo "<script>alert('An error occurred.');</script>";
      echo "<script>location.href='clients.php'</script>";
    }
  }



  ?>

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
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
    h1, h2, h4, h5, h6 {font-family: 'Syne', "sans-serif"; color: #282828}
    h3 {font-family: 'Space Grotesk', "sans-serif";}
    * {font-family: 'Space Grotesk', "sans-serif";}
    .txt-pri {color: #EA4335 !important}


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

    </style>
    <!-- Custom styles for this template -->
    <link href="../modals.css" rel="stylesheet">
    <link href="../heroes.css" rel="stylesheet">


  </head>
  <body>
  <?php include_once('../components/forms.php');?>
  <?php include_once('../components/sidebar.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid pt-5 px-5">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="fw-semibold">User Management</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Admin</li>
                <li class="breadcrumb-item">Clients</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <section class="content px-5">
        <div class="row">

            <!-- Search Bar -->
            <div class="col-12">
                <form action="simple-results.html">
                    <div class="input-group rounded-3 overflow-hidden">
                        <input type="search" class="form-control form-control-lg b rounded-start-3" placeholder="Search by ID, first name, last name, etc.">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-dark rounded-end-3">
                            <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 mt-4">
                <div class="card rounded-3 overflow-hidden">
                    <div class="card-header border-1 px-4 py-3 d-flex flex-row align-items-center justify-content-between">
                        <h3 class="card-title fw-bold">Registered Users (35)</h3>
                        <button data-bs-toggle="modal" data-bs-target="#addClientModal" class="btn btn-danger btn-sm ml-auto rounded-3 px-3">Add new<svg class="btn-icons" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z"></path></svg></button>
                    </div>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-valign-middle">
                          <thead>
                          <tr>
                            <th>ID</th>
                            <th>Email Address</th>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th colspan="2" style="width: 5%;">Actions</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php 
                            $result = fetch_users();
                            
                            if(!empty($result))
                            {
                              foreach ($result as $record) 
                              { 
                          ?>
                          <tr>
                            <td class="align-middle">USR<?php echo $record['user_id'];?></td>
                            <td class="align-middle"><?php echo $record['email'];?></td>
                            <td class="align-middle"><img src="../assets/images/users/<?php echo $record['profile_pic'];?>" style="height: 24px; margin-right: 6px" alt=""><?php echo $record['fname'].' '.$record['lname'];?></td>
                            <td class="align-middle">
                              <?php 
                                $birthdate = new DateTime($record['birthdate']); 
                                $today = new DateTime(); 
                                $age = $today->diff($birthdate)->y; 
                                echo $age;
                              ?>
                            </td>
                            <td class="align-middle"><?php echo $record['sex'];?></td>
                            <td class="align-middle"><a href="#" class="link-icon text-warning" data-bs-toggle="modal" data-bs-target="#updateUserModal_<?php echo $record['user_id'];?>"><i class="fas fa-edit"></i></a></td>
                            <td class="align-middle"><a href="#" class="link-icon text-danger"><i class="fas fa-trash" data-bs-toggle="modal" data-bs-target="#deleteUserModal_<?php echo $record['user_id'];?>"></i></a></td>
                            <!-- Update User Modal -->
                            <div class="modal fade" tabindex="-1" id="updateUserModal_<?php echo $record['user_id'];?>" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content rounded-4 shadow">
                                  <div class="modal-header px-5 pt-5 pb-0 border-bottom-0">
                                    <h1 class="fw-bold mb-0 fs-2 text-center">Udpate information</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body p-5 pt-0">
                                    <form method="POST" action="../admin-panel/clients.php">
                                      <label class="form-label">Personal Information</label>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-floating mb-3">
                                            <input value="<?php echo $record['fname'];?>" name="fname" type="text" class="form-control rounded-3" id="floatingInput"placeholder="First name" required>
                                            <label for="floatingInput">First name</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-floating mb-3">
                                            <input value="<?php echo $record['lname'];?>" name="lname" type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" required>
                                            <label for="floatingInput">Last name</label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-floating mb-3">
                                            <input value="<?php echo $record['birthdate'];?>" name="bday" type="date" class="form-control rounded-3" id="pickupDate" required>
                                            <label for="pickupDate" class="text-muted-subtle">Date of Birth</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                        <select name="sex" class="form-select form-select-md mb-3 rounded-3 h-100 m-0" aria-label=".form-select-lg example" required>
                                            <option value="" class="d-none" disabled <?php echo empty($record['sex']) ? 'selected' : ''; ?>>Sex</option>
                                            <option value="Male" <?php echo ($record['sex'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                            <option value="Female" <?php echo ($record['sex'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                            <option value="Prefer not to say" <?php echo ($record['sex'] == 'Prefer not to say') ? 'selected' : ''; ?>>Prefer not to say</option>
                                        </select>

                                        </div>
                                      </div>
                                      <label for="" class="form-label">Contact Details</label>
                                      <div class="form-floating mb-3">
                                        <input value="<?php echo $record['email'];?>" name="email" type="email" class="form-control rounded-3" id="floatingInput" placeholder="Email" required>
                                        <label for="floatingPassword">Email</label>
                                      </div>
                                      <div class="form-floating mb-3">
                                        <input name="password" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8">
                                        <label for="floatingPassword">New Password</label>
                                      </div>
                                      <!-- <div class="form-floating mb-3">
                                        <input name="password2" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8">
                                        <label for="floatingPassword">Confirm Password</label>
                                      </div> -->
                                      <input type="hidden" name="update_user" value="<?php echo $record['user_id']; ?>">
                                      <input name="update" role="button" href="admin-panel/dashboard.php" class="w-100 mb-2 btn btn-lg rounded-4 btn-outline-danger" type="submit" value="Save changes">
                                    </form> 
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Delete User Modal -->
                            <div class="modal fade modal-sheet" tabindex="-1" aria-hidden="true"role="dialog" id="deleteUserModal_<?php echo $record['user_id'];?>">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content rounded-4 shadow">
                                  <div class="modal-body p-4 text-center">
                                    <h5 class="mb-0">Confirm Deletion</h5>
                                    <p class="mb-0">Are you sure you want to delete this account? This action cannot be undone.</p>
                                  </div>
                                  <div class="modal-footer flex-nowrap p-0">
                                    <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 text-muted border-end" data-bs-dismiss="modal">Cancel</button>
                                    <form method="POST" action="clients.php">
                                      <input type="hidden" name="delete_user" value="<?php echo $record['user_id']; ?>">
                                      <input name="delete" type="submit" role="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 txt-pri" value="Delete">
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </tr>
                          <?php
                              }
                            } 
                            else
                            {
                          ?>
                              <tr>
                                <td colspan="7" class="text-center">Wow, such empty.</td> 
                              </tr>
                              <?php
                            } 
                          ?>

                          </tbody>
                      </table>

                    </div>
                    <div class="card-footer clearfix  px-4 d-flex flex-row align-items-center justify-content-between w-100 bg-white">
                      <p class="m-0 h-100 text-align-bottom text-muted fw-light">Showing 1 to 5 of 35</p>
                      <ul class="pagination pagination-sm m-0 W-100 float-right m-0 ml-auto">
                        <li class="page-item"><a class="page-link text-danger" href="#">«</a></li>
                        <li class="page-item"><a class="page-link text-danger" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-danger" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-danger" href="#">3</a></li>
                        <li class="page-item"><a class="page-link text-danger" href="#">»</a></li>
                      </ul>
                    </div>
                </div>
              </div>

        </div>
      </section>

        
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
<script src="../assets/dist/js/adminlte.min.js?v=3.2.0"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<script>
    $(function() {
    // Get the canvas element
    var barChartCanvas = $('#donutChart').get(0).getContext('2d');
    
    // Data for Japanese car makes
    var barData = {
        labels: ['Toyota', 'Honda', 'Nissan', 'Mazda', 'Mitsubishi', 'Subaru'],
        datasets: [{
            label: 'Fleet Distribution (%)',
            data: [35, 25, 20, 10, 5, 5],  // Example distribution percentages
            backgroundColor: ['#D32F2F', '#F33226', '#EF5350', '#FF8A80', '#FFCDD2', '#FFEBEE'],  // Using brand color scheme
            borderWidth: 1
        }]
    };
    
    var barOptions = {
        maintainAspectRatio: false,
        responsive: true,
        indexAxis: 'y',  // This makes it a horizontal bar chart
        plugins: {
            legend: {
                display: false,  // Hide legend since we only have one dataset
                labels: {
                    font: {
                        family: "'Space Grotesk', sans-serif"
                    }
                }
            },
            title: {
                display: true,
                text: 'Brands',
                font: {
                    family: "'Syne', sans-serif",
                    size: 16
                }
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        var label = context.dataset.label || '';
                        var value = context.raw || 0;
                        return value + '%';
                    }
                }
            }
        },
        scales: {
            x: {
                beginAtZero: true,
                max: 40,  // Setting max slightly higher than your highest value
                ticks: {
                    callback: function(value) {
                        return value + '%';
                    },
                    font: {
                        family: "'Space Grotesk', sans-serif"
                    }
                },
                grid: {
                    display: false
                }
            },
            y: {
                ticks: {
                    font: {
                        family: "'Space Grotesk', sans-serif"
                    }
                },
                grid: {
                    display: false
                }
            }
        }
    };
    
    // Create the bar chart
    new Chart(barChartCanvas, {
        type: 'bar',
        data: barData,
        options: barOptions
    });
});
</script>
</html>
          