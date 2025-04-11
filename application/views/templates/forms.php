<!-- Login Modal -->
<div class="modal fade" tabindex="-1" id="loginModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Sign in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <?= form_open('login'); ?>
          <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control rounded-3 fw-light" placeholder="Email" value="<?= set_value('email'); ?>">
            <label>Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input name="password" type="password" class="form-control rounded-3 fw-light" placeholder="Password" minlength="8">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-bd-primary" type="submit">Login</button>
          <small class="text-body-secondary text-center d-block mt-2">
            Don't have an account? 
            <a class="txt-pri" data-bs-target="#registerModal" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Sign up</a>
          </small>
        <?= form_close(); ?>
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
      <?= form_open('register'); ?>
        <label class="form-label">Personal Information</label>
        <div class="row">
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input name="fname" type="text" class="form-control rounded-3" placeholder="First name" value="<?= set_value('fname'); ?>">
              <label>First name</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input name="lname" type="text" class="form-control rounded-3" placeholder="Last name" value="<?= set_value('lname'); ?>">
              <label>Last name</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 pb-3">
            <div class="form-floating position-relative">
              <input name="bday" type="text" class="form-control rounded-3 pe-5" id="bday" placeholder="Date of Birth" required>
              <label for="birthday" class="text-muted-subtle fw-normal">Date of Birth</label>
              <span class="position-absolute end-0 top-50 translate-middle-y me-3">
                <i class="bi bi-calendar"></i>
              </span>
            </div>
          </div>
          <div class="col-md-6 pb-3">
            <select name="sex" class="form-select form-select-md mb-3 rounded-3 h-100 m-0" aria-label=".form-select-lg example">
              <option class="d-none" value="" <?= set_select('sex', '', TRUE); ?>>Sex</option>
              <option value="Male" <?= set_select('sex', 'Male'); ?>>Male</option>
              <option value="Female" <?= set_select('sex', 'Female'); ?>>Female</option>
              <option value="Prefer not to say" <?= set_select('Prefer not to say', '3'); ?>>Prefer not to say</option>
            </select>
          </div>
        </div>
        <label for="" class="form-label">Contact Details</label>
        <div class="form-floating mb-3">
          <input name="email" type="email" class="form-control rounded-3" placeholder="Email" value="<?= set_value('email'); ?>">
          <label for="floatingPassword">Email</label>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control rounded-3" placeholder="Password">
              <label>Password</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating mb-3">
              <input name="password2" type="password" class="form-control rounded-3" placeholder="Confirm Password">
              <label>Confirm Password</label>
            </div>
          </div>
        </div>
        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-bd-primary" type="submit">Register</button>
        <small class="text-body-secondary text-center d-block mt-2">
          Already have an account? 
          <a class="txt-pri" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Sign in</a>
        </small>
      <?= form_close(); ?>

      </div>
    </div>
  </div>
</div>

<!-- Add Client Modal -->
<div class="modal fade" tabindex="-1" id="addClientModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header px-5 pt-5 pb-0 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Client Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
      <?= form_open('admin/registerClient'); ?>
          <label class="form-label">Personal Information</label>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-floating mb-3">
                      <input name="fname" type="text" class="form-control rounded-3" placeholder="First name" autocomplete="off" value="<?= set_value('fname'); ?>">
                      <label for="firstname">First name</label>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-floating mb-3">
                      <input name="lname" type="text" class="form-control rounded-3" placeholder="Last name" autocomplete="off" value="<?= set_value('lname'); ?>">
                      <label for="lastname">Last name</label>
                  </div>
              </div>
          </div>
          
          <div class="row">
              <div class="col-md-6">
                  <div class="form-floating mb-3">
                      <input name="bday" type="date" class="form-control rounded-3" id="pickupDate" value="<?= set_value('bday'); ?>">
                      <label for="birthday" class="text-muted-subtle">Date of Birth</label>
                  </div>
              </div>
              <div class="col-md-6 pb-3">
                  <select name="sex" class="form-select form-select-md mb-3 rounded-3 h-100 m-0" aria-label=".form-select-lg example">
                      <option value="" class="d-none" disabled <?= set_select('sex', '', TRUE); ?>>Sex</option>
                      <option value="Male" <?= set_select('sex', 'Male'); ?>>Male</option>
                      <option value="Female" <?= set_select('sex', 'Female'); ?>>Female</option>
                      <option value="Prefer not to say" <?= set_select('sex', 'Prefer not to say'); ?>>Prefer not to say</option>
                  </select>
              </div>
          </div>

          <label for="" class="form-label">Contact Details</label>
          <div class="form-floating mb-3">
              <input name="email" type="email" class="form-control rounded-3" placeholder="Email" autocomplete="off" value="<?= set_value('email'); ?>">
              <label for="floatingEmail">Email</label>
          </div>
          <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8">
              <label for="floatingPassword">Password</label>
          </div>

          <input name="register" role="button" class="w-100 mb-2 btn btn-lg rounded-4 btn-danger" type="submit" value="Create account">
      <?= form_close(); ?>

      </div>
    </div>
  </div>
</div>

<!-- Add Manager Modal -->
<div class="modal fade" tabindex="-1" id="addManagerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header px-5 pt-5 pb-0 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2 text-center">Manager Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
      <?= form_open('admin/registerManager'); ?>
          <label class="form-label">Personal Information</label>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-floating mb-3">
                      <input name="fname" type="text" class="form-control rounded-3" placeholder="First name" autocomplete="off" value="<?= set_value('fname'); ?>">
                      <label for="firstname">First name</label>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-floating mb-3">
                      <input name="lname" type="text" class="form-control rounded-3" placeholder="Last name" autocomplete="off" value="<?= set_value('lname'); ?>">
                      <label for="lastname">Last name</label>
                  </div>
              </div>
          </div>
          
          <div class="row">
              <div class="col-md-6">
                  <div class="form-floating mb-3">
                      <input name="bday" type="date" class="form-control rounded-3" id="pickupDate" value="<?= set_value('bday'); ?>">
                      <label for="birthday" class="text-muted-subtle">Date of Birth</label>
                  </div>
              </div>
              <div class="col-md-6 pb-3">
                  <select name="sex" class="form-select form-select-md mb-3 rounded-3 h-100 m-0" aria-label=".form-select-lg example">
                      <option value="" class="d-none" disabled <?= set_select('sex', '', TRUE); ?>>Sex</option>
                      <option value="Male" <?= set_select('sex', 'Male'); ?>>Male</option>
                      <option value="Female" <?= set_select('sex', 'Female'); ?>>Female</option>
                      <option value="Prefer not to say" <?= set_select('sex', 'Prefer not to say'); ?>>Prefer not to say</option>
                  </select>
              </div>
          </div>

          <label for="" class="form-label">Contact Details</label>
          <div class="form-floating mb-3">
              <input name="email" type="email" class="form-control rounded-3" placeholder="Email" autocomplete="off" value="<?= set_value('email'); ?>">
              <label for="floatingEmail">Email</label>
          </div>
          <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" minlength="8">
              <label for="floatingPassword">Password</label>
          </div>

          <input name="register" role="button" class="w-100 mb-2 btn btn-lg rounded-4 btn-danger" type="submit" value="Create account">
      <?= form_close(); ?>

      </div>
    </div>
  </div>
</div>

<!-- Email Already Exists -->
<div class="modal fade modal-sheet" tabindex="-1" aria-hidden="true"role="dialog" id="emailErrorModal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-4 text-center">
        <h5 class="mb-2">Email already in-use.</h5>
        <p class="mb-0">This email is already linked to an account.<br>Would you like to sign in instead?</p>
      </div>
      <div class="modal-footer flex-nowrap p-0">
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 text-muted border-end" data-bs-dismiss="modal">Cancel</button>
        <a role="button" class="d-flex align-tems-center justify-content-center fs-6 text-decoration-none col-6 py-3 m-0 rounded-0 text-danger" data-bs-target="#loginModal" data-bs-toggle="modal">Yes</a>
      </div>
    </div>
  </div>
</div>



