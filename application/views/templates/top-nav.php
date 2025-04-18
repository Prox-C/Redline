
    <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom bg-dark px-4">
        <a href="<?= base_url()?>" class="d-inline-flex link-body-emphasis text-decoration-none">
            <h3 style="font-family: 'NikkyouSans';" class="text-white fw-normal">レッドライン</h3>
        </a>


        <?php if($this->session->userdata('logged_in')) 
            {
        ?>
        <div class="dropdown text-end d-flex align-items-center"> 
            <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?=base_url('/assets/images/users/profile.png')?>" alt="mdo" height="30" class="rounded-circle bg-dark border border-2 border-white">
            </a>
            <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#">Notifications</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li> 
                <li><hr class="dropdown-divider"></li>
                <li><button class="dropdown-item text-danger btn-white btn" data-bs-toggle="modal" data-bs-target="#logoutModal">Sign out</button></li>
            </ul>
        <?php 
            } else {
        ?>
            <button type="button" class="btn btn-bd-primary rounded-4 px-4" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in</button>
        <?php }?>
        </div>

        
    
    </header>
