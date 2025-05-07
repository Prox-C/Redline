 
<header class="sticky-top d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom bg-white px-4">
        <a href="<?= base_url()?>" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="assets/images/system/logo.png" alt="" class="header-logo m-0 p-0 rounded-4">
            <h3 style="font-family: 'NikkyouSans';" class="text-white fw-normal align-middle h-100 m-0 ms-1 p-0 py-1">レッドライン</h3>
        </a>


        <?php if($this->session->userdata('logged_in')) 
            {
        ?>
        
        <div class="d-flex align-items-center gap-3">
            <!-- Navigation Links -->
            <div class="d-none d-md-flex gap-3">
                <a href="<?= base_url('bookings/'.$this->session->userdata('user_id')) ?>" class="nav-link px-2 align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon me-1" fill="currentColor" viewBox="0 0 256 256"><path d="M240,104H229.2L201.42,41.5A16,16,0,0,0,186.8,32H69.2a16,16,0,0,0-14.62,9.5L26.8,104H16a8,8,0,0,0,0,16h8v80a16,16,0,0,0,16,16H64a16,16,0,0,0,16-16v-8h96v8a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16V120h8a8,8,0,0,0,0-16ZM80,152H56a8,8,0,0,1,0-16H80a8,8,0,0,1,0,16Zm120,0H176a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16ZM44.31,104,69.2,48H186.8l24.89,56Z"></path></svg>
                    Bookings
                </a>
                <a href="<?= base_url('admin/history') ?>" class="nav-link px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon me-1" fill="currentColor" viewBox="0 0 256 256"><path d="M240,102c0,70-103.79,126.66-108.21,129a8,8,0,0,1-7.58,0C119.79,228.66,16,172,16,102A62.07,62.07,0,0,1,78,40c20.65,0,38.73,8.88,50,23.89C139.27,48.88,157.35,40,178,40A62.07,62.07,0,0,1,240,102Z"></path></svg>                    
                    Liked
                </a>
                <a href="<?= base_url('admin/notifications') ?>" class="nav-link px-2 align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" class="nav-icon me-1" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216Z"></path>
                </svg>
                    Notifications <span class="badge rounded-circle align-middle" style="background: #1DB954; font-size: 10px"><span class="fw-medium" style="font-family: 'space grotesk';">7</span></span>
                </a>

            </div>


            <!-- Dropdown -->
            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url('/assets/images/users/profile.png') ?>" alt="mdo" height="30" class="rounded-circle bg-dark">
                </a>
                <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#">Notifications</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li> 
                <li><hr class="dropdown-divider"></li>
                <li><button class="dropdown-item text-danger btn-white btn" data-bs-toggle="modal" data-bs-target="#logoutModal">Sign out</button></li>
                </ul>
            </div>
        </div>

        <?php 
            } else {
        ?>
            <button type="button" class="btn btn-dark rounded-4 px-4" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in</button>
        <?php }?>
        

        
    
    </header>
