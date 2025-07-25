@extends('layouts.master')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Pembayaran</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                    <label class="form-label">Type here...</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <!-- Jika sudah login, ubah fungsi Sign In menjadi Log Out -->
                    @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link text-body font-weight-bold px-0 border-0 bg-transparent">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span> <!-- Tetap menggunakan "Sign In" text -->
                        </button>
                    </form>
                    @endauth

                    <!-- Jika belum login, tampilkan Sign In biasa -->
                    @guest
                    <a href="{{ route('login') }}" class="nav-link text-body font-weight-bold px-0 border-0 bg-transparent">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Sign In</span>
                    </a>
                    @endguest
                </li>

                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            Payment successfully completed
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Daftar Pembayaran</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="col-6 text-start ps-3">
                        <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#addPaymentModal">
                            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Pembayaran
                        </button>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Metode</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Rekening</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                <tr>
                                    <td class="py-2 px-4 border-b">
                                        <img src="{{ asset('storage/' . $payment->image) }}" alt="Payment Image" class="h-16 w-16 object-cover">
                                    </td>
                                    <td class="py-2 px-4 border-b">{{ $payment->method }}</td>
                                    <td class="py-2 px-4 border-b">{{ $payment->account_number }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <button type="button" class="btn btn-link text-dark px-3 mb-0 editPaymentBtn" data-id="{{ $payment->id }}" data-bs-toggle="modal" data-bs-target="#editPaymentModal">
                                            <i class="material-icons text-sm me-2">edit</i>Edit
                                        </button>
                                        <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0 deletePaymentBtn" data-id="{{ $payment->id }}" data-bs-toggle="modal" data-bs-target="#deletePaymentModal">
                                            <i class="material-icons text-sm me-2">delete</i>Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Payment Modal -->
<!-- Add Payment Modal -->
<div class="modal fade" id="addPaymentModal" tabindex="-1" aria-labelledby="addPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('admin.pembayaran.store') }}" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="addPaymentModalLabel">Tambah Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="method" class="form-label">Metode</label>
                    <input type="text" name="method" id="method" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="account_number" class="form-label">Nomor Rekening</label>
                    <input type="text" name="account_number" id="account_number" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

    <!-- Edit Payment Modal -->
    <div class="modal fade" id="editPaymentModal" tabindex="-1" aria-labelledby="editPaymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="editPaymentForm" method="POST" enctype="multipart/form-data" class="modal-content">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editPaymentModalLabel">Edit Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="payment_id" id="editPaymentId">
                    <div class="mb-3">
                        <label for="editImage" class="form-label">Gambar</label>
                        <input type="file" name="image" id="editImage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="editMethod" class="form-label">Metode</label>
                        <input type="text" name="method" id="editMethod" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="editAccountNumber" class="form-label">Nomor Rekening</label>
                        <input type="text" name="account_number" id="editAccountNumber" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Payment Modal -->
    <div class="modal fade" id="deletePaymentModal" tabindex="-1" aria-labelledby="deletePaymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePaymentModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus pembayaran ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="confirmDeletePaymentBtn" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const editPaymentModal = document.getElementById('editPaymentModal');
     const deletePaymentModal = document.getElementById('deletePaymentModal');
    const confirmDeletePaymentBtn = document.getElementById('confirmDeletePaymentBtn');


    document.addEventListener('DOMContentLoaded', function() {
    // Menangani tombol untuk menambah pembayaran
    document.getElementById('addPaymentBtn').addEventListener('click', function() {
        // Set modal untuk Tambah Pembayaran
        const modalTitle = document.getElementById('addPaymentModalLabel');
        modalTitle.textContent = 'Tambah Pembayaran';
        document.getElementById('addPaymentModal').classList.remove('hidden');
    });
});

    // Handle Edit button click
    document.querySelectorAll('.editPaymentBtn').forEach(button => {
        button.addEventListener('click', function() {
            const paymentId = this.getAttribute('data-id');
            fetch(`/pembayaran/${paymentId}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('editPaymentId').value = data.id;
                    document.getElementById('editMethod').value = data.method;
                    document.getElementById('editAccountNumber').value = data.account_number;
                    document.getElementById('editImage').value = '';
                    document.getElementById('editPaymentForm').action = `/pembayaran/${data.id}`;
                    new bootstrap.Modal(editPaymentModal).show();
                });
        });
    });

     // Handle Delete button click
    document.querySelectorAll('.deletePaymentBtn').forEach(button => {
        button.addEventListener('click', function() {
            const paymentId = this.getAttribute('data-id');
            document.getElementById('confirmDeletePaymentBtn').setAttribute('data-id', paymentId);
            new bootstrap.Modal(deletePaymentModal).show();
        });
    });

    // Handle Confirm Delete and reload the page after deletion
    confirmDeletePaymentBtn.addEventListener('click', function() {
        const paymentId = this.getAttribute('data-id');
        fetch(`/pembayaran/${paymentId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                // Setelah penghapusan berhasil, reload halaman
                location.reload(); // Reload the page to show updated list
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
</script>
@endsection
