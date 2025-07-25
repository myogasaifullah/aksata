@extends('layouts.master')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pembayaran</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Pembayaran</h6>
        </nav>
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
