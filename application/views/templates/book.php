<!-- Login Modal -->
<div class="modal fade" tabindex="-1" id="bookModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-2 border-bottom-0">
        <div class="col-12">
          <h4 class="fw-bold mb-0 mb-3">Pick Your Dates</h4>
          <p class="text-muted">
            Confirm your rental period so we can reserve it just for you.
          </p>
        </div>
      </div>
      <div class="modal-body p-5 pt-0">
        <?= form_open('checkout'); ?>
          <div class="form-floating position-relative mb-3">
            <input type="text" class="form-control rounded-3 pe-5" id="pickupDate" name="rentStart" placeholder="Pickup" value="<?= $this->session->userdata('pickup-date')?>">
            <label for="pickupDate" class="text-muted-subtle fw-normal">Pickup</label>
            <span class="position-absolute end-0 top-50 translate-middle-y me-3">
              <i class="bi bi-calendar"></i>
            </span>
          </div>
          <div class="form-floating position-relative mb-3">
            <input type="text" class="form-control rounded-3 pe-5" id="dropoffDate" name="rentStart" placeholder="Pickup" value="<?= $this->session->userdata('dropoff-date')?>">
            <label for="pickupDate" class="text-muted-subtle fw-normal">Dropoff</label>
            <span class="position-absolute end-0 top-50 translate-middle-y me-3">
              <i class="bi bi-calendar"></i>
            </span>
          </div>
          <div class="row gap-0 px-2">
            <div class="col-md-6 g-2">
              <button type="button" data-bs-dismiss="modal" class="w-100 btn rounded-4 bg-secondary-subtle text-dark">Cancel</button>
            </div>
            <div class="col-md-6 g-2">
              <button class="w-100 btn rounded-4 btn-bd-primary">Confirm</button>
            </div>
          </div>
          <input type="hidden" name="book_car_id" value="<?php echo $car['id']; ?>">
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>