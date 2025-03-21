<!-- Login Modal -->
<div class="modal fade" tabindex="-1" id="loginModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Sign in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form>
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Password</label>
          </div>
          <a role="button" href="admin-panel/dashboard.php" class="w-100 mb-2 btn btn-lg rounded-3 btn-bd-primary" type="submit">Login</a>
          <small class="text-body-secondary text-center d-block">
            Don't have an account? 
            <a class="txt-pri" data-bs-target="#registerModal" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Sign up</a>
          </small>
        </form> 
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" tabindex="-1" id="registerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Create an account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form>
          <label class="form-label">Personal Information</label>
          <div class="row">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput"placeholder="First name" required>
                <label for="floatingInput">First name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Last name</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="date" class="form-control rounded-3" id="pickupDate" name="rentStart" required>
                <label for="pickupDate" class="text-muted-subtle">Date of Birth</label>
              </div>
            </div>
            <div class="col-md-6 pb-3">
              <select class="form-select form-select-md mb-3 rounded-3 h-100 m-0" aria-label=".form-select-lg example">
                <option class="d-none" selected>Sex<span class="text-muted-subtle"></span></option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Prefer not to say</option>
              </select>
            </div>
          </div>
          <label for="" class="form-label">Contact Details</label>
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="Email" required>
            <label for="floatingPassword">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Password</label>
          </div>
          <!-- <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Confirm Password</label>
          </div> -->
          <a role="button" href="admin-panel/dashboard.php" class="w-100 mb-2 btn btn-lg rounded-3 btn-bd-primary" type="submit">Register</a>
          <small class="text-body-secondary text-center d-block">
            Already have an account? 
            <a class="txt-pri" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Sign in</a>
          </small>
        </form> 
      </div>
    </div>
  </div>
</div>

<!-- Add Client Modal -->
<div class="modal fade" tabindex="-1" id="addClientModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header px-5 pt-5 pb-0 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Register a client</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <form method="POST" action="../admin-panel/clients.php">
          <label class="form-label">Personal Information</label>
          <div class="row">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input name="fname" type="text" class="form-control rounded-3" id="floatingInput"placeholder="First name" required>
                <label for="floatingInput">First name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input name="lname" type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Last name</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input name="bday" type="date" class="form-control rounded-3" id="pickupDate" required>
                <label for="pickupDate" class="text-muted-subtle">Date of Birth</label>
              </div>
            </div>
            <div class="col-md-6 pb-3">
              <select name="sex" class="form-select form-select-md mb-3 rounded-3 h-100 m-0" aria-label=".form-select-lg example" required>
                <option value="" class="d-none" disabled selected>Sex<span class="text-muted-subtle"></span></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Prefer not to say">Prefer not to say</option>
              </select>
            </div>
          </div>
          <label for="" class="form-label">Contact Details</label>
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control rounded-3" id="floatingInput" placeholder="Email" required>
            <label for="floatingPassword">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input name="password" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Password</label>
          </div>
          <!-- <div class="form-floating mb-3">
            <input name="password2" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Confirm Password</label>
          </div> -->
          <input name="register" role="button" href="admin-panel/dashboard.php" class="w-100 mb-2 btn btn-lg rounded-4 btn-danger" type="submit" value="Create account">
        </form> 
      </div>
    </div>
  </div>
</div>



