<!-- Book Modal -->
<div class="modal fade" tabindex="-1" id="bookModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h2 class="fw-bold mb-0 fs-2 text-center w-100">Booking Information</h2>
      </div>
      <div class="modal-body p-5 pt-0">
        <form>
          <label for="" class="form-label">Car Selected:</label>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="Car Name" disabled>
            <label for="floatingInput">Nissan Skyline GT-R</label>
          </div>

          <div class="row">
            <div class="col-lg-6">
                <label for="" class="form-label">Pickup Date:</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="rentStart">
                    <label for="floatingInput" class="text-muted-subtle">Rent start</label>
                </div>
            </div>
            <div class="col-lg-6">
            <label for="" class="form-label">Return Date:</label>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="rentStart">
                    <label for="floatingInput" class="text-muted-subtle">Rent end</label>
                </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-12">
                <a role="button" href="../pages/checkout.php" class="w-100 mb-2 btn btn-lg rounded-4 btn-bd-primary" type="submit">Checkout</a>
            </div>
          </div>

          
        </form> 
      </div>
    </div>
  </div>
</div>