
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
        </div>
      </section>

      <!-- Main content -->
      <section class="content px-5">
        <div class="row">

            <!-- Search Bar -->
            <div class="col-12">
                <form action="simple-results.html">
                    <div class="input-group rounded-3 overflow-hidden px-2">
                        <input type="search" class="form-control form-control b rounded-3" placeholder="Search">
                </form>
            </div>
            
            <div class="col-12 mt-3">
                <div class="card rounded-3 overflow-hidden">
                    <div class="card-header border-1 px-4 py-3 d-flex flex-row align-items-center justify-content-between">
                        <h3 class="card-title fw-bold">Registered Users (35)</h3>
                        <button data-bs-toggle="modal" data-bs-target="#addClientModal" class="btn bg-danger btn-sm ml-auto rounded-3 px-3">Add new<svg class="btn-icons" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H140v76a12,12,0,0,1-24,0V140H40a12,12,0,0,1,0-24h76V40a12,12,0,0,1,24,0v76h76A12,12,0,0,1,228,128Z"></path></svg></button>
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
                          
                            if(!empty($cl))
                            {
                              foreach ($cl as $c)  
                              { 
                          ?>
                          <tr>            
                            <td class="align-middle">UID<?php echo $c['user_id'];?></td>
                            <td class="align-middle"><?php echo $c['email'];?></td>
                            <td class="align-middle"><img src="<?= base_url("assets/images/users/" . $c['profile_pic']) ?>" style="height: 24px; margin-right: 6px" alt=""><?php echo $c['fname'].' '.$c['lname'];?></td>
                            <td class="align-middle">
                              <?php 
                                $birthdate = new DateTime($c['birthdate']); 
                                $today = new DateTime(); 
                                $age = $today->diff($birthdate)->y; 
                                echo $age;
                              ?>
                            </td>
                            <td class="align-middle"><?php echo $c['sex'];?></td>
                            <td class="align-middle"><a href="#" class="link-icon text-warning" data-bs-toggle="modal" data-bs-target="#updateClientModal_<?php echo $c['user_id'];?>"><i class="fas fa-edit"></i></a></td>
                            <td class="align-middle">
                              <a href="#" class="link-icon text-danger">
                                <i class="fas fa-trash" data-bs-toggle="modal" data-bs-target="#deleteUserModal_<?php echo $c['user_id'];?>"></i>
                              </a>
                            </td>
                            <!-- Update User Modal -->
                            <div class="modal fade" tabindex="-1" id="updateClientModal_<?php echo $c['user_id'];?>" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content rounded-4 shadow">
                                  <div class="modal-header px-5 pt-5 pb-0 border-bottom-0">
                                    <h1 class="fw-bold mb-0 fs-2 text-center">Udpate information</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body p-5 pt-0">
                                    <?= form_open('admin/updateClient/'.$c['user_id']);?>
                                      <label class="form-label">Personal Information</label>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-floating mb-3">
                                            <input value="<?php echo $c['fname'];?>" name="c_fname" type="text" class="form-control rounded-3" id="floatingInput"placeholder="First name">
                                            <label for="floatingInput">First name</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-floating mb-3">
                                            <input value="<?php echo $c['lname'];?>" name="c_lname" type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Last name</label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-floating mb-3">
                                            <input value="<?php echo $c['birthdate'];?>" name="c_bday" type="date" class="form-control rounded-3" id="pickupDate">
                                            <label for="pickupDate" class="text-muted-subtle">Date of Birth</label>
                                          </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                        <select name="c_sex" class="form-select form-select-md mb-3 rounded-3 h-100 m-0" aria-label=".form-select-lg example">
                                            <option value="" class="d-none" disabled <?php echo empty($c['sex']) ? 'selected' : ''; ?>>Sex</option>
                                            <option value="Male" <?php echo ($c['sex'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                            <option value="Female" <?php echo ($c['sex'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                            <option value="Prefer not to say" <?php echo ($c['sex'] == 'Prefer not to say') ? 'selected' : ''; ?>>Prefer not to say</option>
                                        </select>

                                        </div>
                                      </div>
                                      <label for="" class="form-label">Contact Details</label>
                                      <div class="form-floating mb-3">
                                        <input value="<?php echo $c['email'];?>" name="c_email" type="email" class="form-control rounded-3" id="floatingInput" placeholder="Email">
                                        <label for="floatingPassword">Email</label>
                                      </div>
                                      <div class="form-floating mb-3">
                                        <input name="c_password" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8">
                                        <label for="floatingPassword">New Password</label>
                                      </div>
                                      <!-- <div class="form-floating mb-3">
                                        <input name="password2" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8">
                                        <label for="floatingPassword">Confirm Password</label>
                                      </div> -->
                                      <input type="hidden" name="update_user_id" value="<?php echo $c['user_id']; ?>">
                                      <input name="update" role="button" href="admin-panel/dashboard.php" class="w-100 mb-2 btn btn-lg rounded-4 btn-outline-danger" type="submit" value="Save changes">
                                    <?= form_close(); ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Delete User Modal -->
                            <div class="modal fade modal-sheet" tabindex="-1" aria-hidden="true"role="dialog" id="deleteUserModal_<?php echo $c['user_id'];?>">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content rounded-4 shadow">
                                  <div class="modal-body p-4 text-center">
                                    <h5 class="mb-2">Account Deletion</h5>
                                      <input type="hidden" name="update_user" value="<?php echo $c['user_id']; ?>">
                                    <p class="mb-0">Are you sure you want to unregister <b><?php echo $c['fname'].' '.$c['lname'];?></b>? This action cannot be undone.</p>
                                  </div>
                                  <div class="modal-footer flex-nowrap p-0">
                                    <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 text-muted border-end" data-bs-dismiss="modal">Cancel</button>
                                    <?= form_open('admin/deleteClient/'.$c['user_id']);?>
                                      <input type="hidden" name="delete_user_id" value="<?php echo $c['user_id']; ?>">
                                      <input name="delete" type="submit" role="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 txt-pri" value="Unregister">
                                    <?= form_close(); ?>
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
                      <ul class="pagination pagination-sm m-0 W-100 m-0 ml-auto">
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

        </div>
      </section>


      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    

 
  </div>
  <!-- ./wrapper -->
 


