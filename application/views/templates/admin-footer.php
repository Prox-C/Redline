<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Chart JS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Bootstrap 5.3 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

  <?php if ($this->session->flashdata('login-success')): ?>
    <script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        customClass: {
          popup: 'custom-toast'
        }
      });

      Toast.fire({
        html: `
          <div style="display: flex; align-items: center;">
            <img src="https://media.tenor.com/SNL9_xhZl9oAAAAj/waving-hand-joypixels.gif" width="30" height="30" style="margin-right: 10px;">
            <span><?= $this->session->flashdata('login-success');?></span>
          </div>
        `
      });
    </script>
  <?php endif; ?>
  </body>
  


</html>
