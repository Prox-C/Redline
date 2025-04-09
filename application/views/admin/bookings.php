
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
                                <tr>
                                    <th>ID</th>
                                    <th>Email Address</th>
                                    <th>Full Name</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th colspan="2" style="width: 5%;">Actions</th>
                                </tr>
                            </thead>
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
 


  