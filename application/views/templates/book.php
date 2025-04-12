<!-- Login Modal -->
<div class="modal fade" tabindex="-1" id="bookModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h4 class="fw-bold mb-0 text-center">Pick Your Dates</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5 pt-0">
        <?= form_open('login'); ?>
          <div class="form-floating position-relative mb-3">
            <input type="text" class="form-control rounded-3 pe-5" id="pickupDate" name="rentStart" placeholder="Pickup" required>
            <label for="pickupDate" class="text-muted-subtle fw-normal">Pickup</label>
            <span class="position-absolute end-0 top-50 translate-middle-y me-3">
              <i class="bi bi-calendar"></i>
            </span>
          </div>
          <div class="form-floating position-relative mb-3">
            <input type="text" class="form-control rounded-3 pe-5" id="dropoffDate" name="rentStart" placeholder="Pickup" required>
            <label for="pickupDate" class="text-muted-subtle fw-normal">Dropoff</label>
            <span class="position-absolute end-0 top-50 translate-middle-y me-3">
              <i class="bi bi-calendar"></i>
            </span>
          </div>
          <button class="w-100 btn btn-lg rounded-4 btn-bd-primary" type="submit">Login</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>