
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid pt-5 px-5">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="fw-semibold">Booking Management</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Admin</li>
                <li class="breadcrumb-item">Bookings</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content px-4 px-lg-5">
        <div class="row">
            <!-- Search Bar -->
            <div class="col-12">
                <form action="simple-results.html">
                    <div class="input-group rounded-3 overflow-hidden px-2">
                        <input type="search" class="form-control form-control b rounded-3" placeholder="Search">
                </form>
            </div>

            <!-- Table --> 
            <div class="col-12 mt-3">
                <div class="card rounded-3 overflow-hidden">
                    <div class="card-header border-1 px-4 py-3 d-flex flex-row align-items-center justify-content- ">
                        <h3 class="card-title fw-bold">All (106)</h3>
                        <div class="col-4 ml-auto d-flex flex-row align-items-center justify-content-end gap-1">
                            <button class="btn bg-light-subtle btn-sm border-dark-subtle rounded-pill px-lg-3 d-flex flex-direction-column align-items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="status-tag" fill="currentColor" viewBox="0 0 256 256"><path d="M76,64A12,12,0,0,1,88,52H216a12,12,0,0,1,0,24H88A12,12,0,0,1,76,64Zm140,52H88a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Zm0,64H88a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24ZM44,112a16,16,0,1,0,16,16A16,16,0,0,0,44,112Zm0-64A16,16,0,1,0,60,64,16,16,0,0,0,44,48Zm0,128a16,16,0,1,0,16,16A16,16,0,0,0,44,176Z"></path></svg>                                
                                <div class="span d-none d-lg-flex">All</div>
                            </button>
                            <button class="btn bg-light-subtle btn-sm border-dark-subtle rounded-pill px-lg-3 d-flex flex-direction-column align-items-center gap-1 text-warning">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="status-tag" fill="currentColor" viewBox="0 0 256 256"><path d="M140,32V64a12,12,0,0,1-24,0V32a12,12,0,0,1,24,0Zm33.25,62.75a12,12,0,0,0,8.49-3.52L204.37,68.6a12,12,0,0,0-17-17L164.77,74.26a12,12,0,0,0,8.48,20.49ZM224,116H192a12,12,0,0,0,0,24h32a12,12,0,0,0,0-24Zm-42.26,48.77a12,12,0,1,0-17,17l22.63,22.63a12,12,0,0,0,17-17ZM128,180a12,12,0,0,0-12,12v32a12,12,0,0,0,24,0V192A12,12,0,0,0,128,180ZM74.26,164.77,51.63,187.4a12,12,0,0,0,17,17l22.63-22.63a12,12,0,1,0-17-17ZM76,128a12,12,0,0,0-12-12H32a12,12,0,0,0,0,24H64A12,12,0,0,0,76,128ZM68.6,51.63a12,12,0,1,0-17,17L74.26,91.23a12,12,0,0,0,17-17Z"></path></svg>
                                <div class="span d-none d-lg-flex">Pending</div>
                            </button>
                            <button class="btn bg-light-subtle btn-sm border-dark-subtle rounded-pill px-lg-3 d-flex flex-direction-column align-items-center gap-1 text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="status-tag" fill="currentColor" viewBox="0 0 256 256"><path d="M184,28H72A20,20,0,0,0,52,48V224a12,12,0,0,0,18.36,10.18l57.63-36,57.65,36A12,12,0,0,0,204,224V48A20,20,0,0,0,184,28Zm-4,174.35-45.65-28.53a12,12,0,0,0-12.72,0L76,202.35V52H180Z"></path></svg>
                            <div class="span d-none d-lg-flex">Confirmed</div>
                            </button>
                            <button class="btn bg-light-subtle btn-sm border-dark-subtle rounded-pill px-lg-3 d-flex flex-direction-column align-items-center gap-1 text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" class="status-tag" fill="currentColor" viewBox="0 0 256 256"><path d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z"></path></svg>                                
                                <div class="span d-none d-lg-flex">Cancelled</div>
                            </button>
                            <button class="btn bg-light-subtle btn-sm border-dark-subtle rounded-pill px-lg-3 d-flex flex-direction-column align-items-center gap-1 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="status-tag" fill="currentColor" viewBox="0 0 256 256"><path d="M232.49,80.49l-128,128a12,12,0,0,1-17,0l-56-56a12,12,0,1,1,17-17L96,183,215.51,63.51a12,12,0,0,1,17,17Z"></path></svg>
                                <div class="span d-none d-lg-flex">Completed</div>
                            </button>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-valign-middle">
                            <thead>
                                <tr class="text-start">
                                    <th style="width: 3%;">ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Car</th>
                                    <th style="width: 12%;">Pickup</th>
                                    <th style="width: 12%;">Dropoff</th>
                                    <th>Total</th>
                                    <th >Status</th>
                                    <th style="width: 5%;" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                               if(!empty($bookings))
                               {
                                 foreach ($bookings as $booking)  
                                 {  
                                  $date = new DateTime($booking['pickup_date']); // or any date field
                              ?>
                              <tr class="text-start" style="font-size: 14px">
                                <td><?= $booking['booking_id']?></td>
                                <td><?= $booking['renter_fname'].' '.$booking['renter_lname']?></td>
                                <td><?= $booking['renter_email']?></td>
                                <td><?= $booking['brand'].' '.$booking['model']?></td>
                                <td><?= date('F j, Y', strtotime($booking['pickup_date'])); ?></td>
                                <td><?= date('F j, Y', strtotime($booking['dropoff_date'])); ?></td>
                                <td>₱<?= number_format($booking['total_amount'], 0, '.', ',') ?></td>
                                <td>
                                  <?php
                                    if($booking['status'] == 'pending')
                                    {
                                      echo '<span class="badge bg-warning-subtle text-warning px-2">Pending</span>';
                                    }
                                    elseif($booking['status'] == 'confirmed')
                                    {
                                      echo '<span class="badge bg-success-subtle text-success">Confirmed</span>';
                                    }
                                    elseif($booking['status'] == 'cancelled')
                                    {
                                      echo '<span class="badge bg-danger-subtle text-danger">Cancelled</span>';
                                    }
                                    elseif($booking['status'] == 'completed')
                                    {
                                      echo '<span class="badge bg-primary-subtle text-primary">Completed</span>';
                                    }
                                  ?>
                                </td>
                                <td class="align-middle">
                                  <a href="#" class="link-icon txt-pri">
                                    <i class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#bookingDetailsModal_<?= $booking['booking_id'];?>"></i>
                                  </a>
                                </td>
                                <td class="align-middle">
                                  <a href="#" class="link-icon text-warning">
                                    <i class="fas fa-edit" data-bs-toggle="modal" data-bs-target="#updateStatusModal_<?= $booking['booking_id'];?>"></i>
                                  </a>
                                </td>
                              </tr>
                                <!-- Booking Details Modal -->
                                <div class="modal fade" tabindex="-1" id="bookingDetailsModal_<?= $booking['booking_id'];?>" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content rounded-4 shadow">
                                      <div class="modal-header px-5 pt-5 pb-0 border-bottom-0">
                                      <div class="px-2 fs-small">
                                          Booking ID: <?= $booking['booking_id']?>
                                      </div>                                        
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body px-5 pt-0 pb-5">
                                        
                                        <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                                          <h2 class="p-0 mb-3"><?= $booking['brand'].' '.$booking['model']?></h2>
                                          <?php 
                                            switch($booking['status'])
                                            {
                                              case 'pending':
                                                echo '<span class="fs-5 badge bg-warning-subtle text-warning px-3 rounded-3">Pending</span>';
                                                break;
                                              case 'confirmed':
                                                echo '<span class="fs-5 badge bg-success-subtle text-success px-3 rounded-3">Confirmed</span>';
                                                break;
                                              case 'cancelled':
                                                echo '<span class="fs-5 badge bg-danger-subtle text-danger px-3 rounded-3">Cancelled</span>';
                                                break;
                                              case 'completed':
                                                echo '<span class="fs-5 badge bg-primary-subtle text-primary px-3 rounded-3">Completed</span>';
                                                break;
                                            }
                                          ?>
                                        </div>
                                        <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                                        <span class="fw-light text-muted">
                                          <em>
                                            From <?= date('F j, Y', strtotime($booking['pickup_date'])); ?> 
                                            to <?= date('F j, Y', strtotime($booking['dropoff_date'])); ?> • 
                                            <?= $booking['total_days'] ?> <?= ($booking['total_days'] == 1) ? 'day' : 'days' ?>
                                          </em>
                                        </span>
                                        <span class="text-end">Booking total: <span class="txt-pri">₱<?= number_format($booking['total_amount'], 0, '.', ',') ?></span></span>
                                        </div>
                                       
                                        <div class="row p-0 mt-5 flex-md-nowrap gap-2">
                                          <div class="col-md-6 d-flex flex-column bg-light rounded-3 p-3">
                                            <label class="w-100" for="">Client Information</label>
                                            <span class="w-100 border-bottom py-1 m-0 align-middle">Name: <?= $booking['renter_fname'].' '.$booking['renter_lname']?></span>
                                            <span class="w-100 border-bottom py-1 m-0 align-middle">Email: <?= $booking['renter_email']?></span>
                                            <span class="w-100 border-bottom py-1 m-0 align-middle">Account ID: <?= $booking['user_id']?></span>
                                            <span class="w-100 border-bottom py-1 m-0 align-middle">Address: <?= $booking['address']?></span>
                                            <span class="w-100 py-1 m-0 align-middle">Mobile: <?= $booking['contact_number']?></span>
                                          </div>
                                          <div class="col-md-6 d-flex flex-column bg-light rounded-3 p-3">
                                            <label class="w-100" for="">Payment Details</label>
                                            <span class="w-100 border-bottom py-1 m-0 align-middle">Payment Method: <?= $booking['payment_method']?></span>
                                            <span class="w-100 border-bottom py-1 m-0 align-middle">Card Name: <?= $booking['card_name']?></span>
                                            <span class="w-100 border-bottom py-1 m-0 align-middle">Card No.: <?= $booking['card_no']?></span>
                                            <span class="w-100 border-bottom py-1 m-0 align-middle">Expiry: <?= $booking['card_expiry']?></span>
                                            <span class="w-100 py-1 m-0 align-middle">CVV: <?= $booking['card_cvv']?></span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Edit Status Modal -->
                                  </div>
                                </div>
                                
                                <!-- Edit Status Modal -->
                                <div class="modal fade modal-sheet" tabindex="-1" aria-hidden="true"role="dialog" id="updateStatusModal_<?php echo $booking['booking_id'];?>">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content rounded-4 shadow">
                                      <div class="modal-body p-5 text-center">
                                        <h4 class="mb-3">Booking Status</h4>
                                        <?= form_open('admin/updateStatus/'.$booking['booking_id'])?>
                                          <input type="hidden" name="update_user" value="<?php echo $booking['booking_id']; ?>">
                                          <select name="status" class="form-select form-select-lg mb-3 rounded-3 h-100 m-0" aria-label=".form-select-lg example">
                                              <option class="d-none" disabled>Status</option>
                                              <option class="text-warning" value="Pending" <?= $booking['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                                              <option class="text-success" value="Confirmed" <?= $booking['status'] == 'confirmed' ? 'selected' : '' ?>>Confirmed</option>
                                              <option class="text-danger" value="Cancelled" <?= $booking['status'] == 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                              <option class="text-primary"value="Completed" <?= $booking['status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
                                          </select>
                                          <button type="submit" class="btn btn-lg bg-dark rounded-4 w-100">Update</button>
                                        <?= form_close()?>
                                      </div>
                                      <!-- <div class="modal-footer flex-nowrap p-0">
                                      </div> -->
                                    </div>
                                  </div>
                                </div>

                              <?php
                                  }
                                } 
                                else
                                {
                              ?>
                                  <tr>
                                    <td colspan="8" class="text-center">Wow, such empty.</td> 
                                  </tr>
                                  <?php
                                } 
                              ?>
                            </tbody>
                        <table>
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
 


  