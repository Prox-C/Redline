  <div class="content-wrapper">
      
      <!-- Header -->
      <section class="content-header">
        <div class="container-fluid pt-5 px-5">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="fw-semibold">Fleet Management</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Admin</li>
                <li class="breadcrumb-item">Cars</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <!-- Main -->
      <section class="content px-4 px-lg-5">
        <div class="row">
            <!-- Search Bar -->
            <div class="col-12">
                <form action="">
                    <div class="input-group rounded-3 overflow-hidden px-2">
                        <input type="search" class="form-control form-control b rounded-3" placeholder="Search">
                </form>
            </div>
        </div>

        <div class="row m-0 mt-3 px-2 gap-0">

            <div class="col-12 col-sm-6 col-lg-4 mb-3">
                <button onclick="window.location='new-car'" class="car btn btn-lg bg-dark-subtle rounded-4 h-100 w-100 elevation-1">
                    <span class="text-dark fw-bold">New<svg xmlns="http://www.w3.org/2000/svg" class="big-cta-icon" fill="currentColor" viewBox="0 0 256 256"><path d="M208,28H48A20,20,0,0,0,28,48V208a20,20,0,0,0,20,20H208a20,20,0,0,0,20-20V48A20,20,0,0,0,208,28Zm-4,176H52V52H204ZM76,128a12,12,0,0,1,12-12h28V88a12,12,0,0,1,24,0v28h28a12,12,0,0,1,0,24H140v28a12,12,0,0,1-24,0V140H88A12,12,0,0,1,76,128Z"></path></svg></span>
                </button>
            </div>

            <?php if(!empty($cars))
          {
            foreach ($cars as $car) 
            { 
          ?>
          
          <div class="col-12 col-sm-6 col-lg-4 mx-0 px-2" onclick="window.location='view'">
            <div class="car card rounded-4 p-0 overflow-hidden mx-0">
              <div class="card-body px-4">
                <div class="row d-flex align-items-center justify-content-between p-0 mb-2">
                  <div class="col-12 m-0 p-0 d-flex align-items-center">

                    <p class="my-0">
                      <span class="badge text-bg-light fw-normal mx-1"><?php echo $car['power'];?>hp</span>
                      <span class="badge text-bg-light fw-normal"><?php echo $car['speed'];?>km/h</span>
                      <span class="badge text-bg-light fw-normal"><?php echo $car['transmission'];?></span>
                    </p>

                    <p class="my-0 ml-auto d-flex align-items-center gap-1"> 
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

          <div class="col12 col-sm-6 col-lg-4 mt-3" style="height: 260px;">

          </div>
          <?php
          }
          ?>

            

            

            

        </div>
      </section>

    </div>

