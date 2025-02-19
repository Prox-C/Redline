<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Sign in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="">
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8" required>
            <label for="floatingPassword">Password</label>
          </div>
          <a role="button" href="admin-panel/dashboard.php" class="w-100 mb-2 btn btn-lg rounded-3 btn-bd-primary" type="submit">Login</a>
          <small class="text-body-secondary text-center d-block">Don't have an account? <a href="">Sign up</a></small>
        </form> 
      </div>
    </div>
  </div>
</div>