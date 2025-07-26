<!-- resources/views/layouts/sidebar.blade.php -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Aksata</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::routeIs('dashboard') ? 'active bg-gradient-primary' : '' }}" href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <!-- Orders -->
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::routeIs('admin.orders.index') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.orders.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">Order</span>
                </a>
            </li>

            <!-- Pembayaran -->
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::routeIs('admin.pembayaran.index') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.pembayaran.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Pembayaran</span>
                </a>
            </li>

            <!-- Games -->
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::routeIs('admin.games.index') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.games.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">view_in_ar</i>
                    </div>
                    <span class="nav-link-text ms-1">Games</span>
                </a>
            </li>

            <!-- Harga -->
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::routeIs('admin.harga.index') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.harga.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                    </div>
                    <span class="nav-link-text ms-1">Harga</span>
                </a>
            </li>

            <!-- QR Code -->
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::routeIs('admin.qr.index') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.qr.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">qr_code</i>
                    </div>
                    <span class="nav-link-text ms-1">QR</span>
                </a>
            </li>

            <!-- Users -->
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::routeIs('admin.users.index') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.users.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">assignment</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>

            <!-- Rate -->
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::routeIs('admin.rate.index') ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.rate.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">star</i>
                    </div>
                    <span class="nav-link-text ms-1">Rate</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
        </div>
    </div>
</aside>
