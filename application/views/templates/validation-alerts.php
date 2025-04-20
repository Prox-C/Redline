<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end', // Top-right corner
        showConfirmButton: false,
        timer: 4000
    });

    <?php if ($this->session->flashdata('validation-error')): ?>
        Toast.fire({
        icon: 'warning',
        title: 'Please fill up all the fields.'
        });

        var modalID = '<?= $this->session->flashdata('validation-error'); ?>';
        var modal = new bootstrap.Modal(document.getElementById(modalID));
        modal.show();
    <?php endif; ?>
    
    // Check for flash data success
    <?php if ($this->session->flashdata('success')): ?>
        Toast.fire({
        icon: 'success',
        title: '<?= $this->session->flashdata('success'); ?>'
        });
    <?php endif; ?>

    // Check for flash data error
    <?php if ($this->session->flashdata('error')): ?>
        Toast.fire({
        icon: 'error',
        title: '<?= $this->session->flashdata('error'); ?>'
        });
    <?php endif; ?>

  </script>