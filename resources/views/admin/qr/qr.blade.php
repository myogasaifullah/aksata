@extends('layouts.master')

@section('content')
<div class="container py-4">
    <!-- Header -->
    <div class="card shadow-lg">
        <div class="card-header bg-gradient-danger text-white rounded-top p-3">
            <h5 class="mb-0">Daftar Gambar QR</h5>
        </div>

        <div class="card-body">
            <!-- Tombol Tambah -->
            <button type="button" class="btn btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="fas fa-plus"></i> TAMBAH GAMBAR
            </button>

            <!-- Alert -->
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="text-uppercase text-secondary text-xs font-weight-bolder bg-white">
                        <tr>
                            <th>Gambar</th>
                            <th class="text-center" style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($qr as $qrs)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $qrs->gambar) }}" class="img-thumbnail" style="max-width: 100px;">
                            </td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $qrs->id }}">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <form action="{{ route('admin.qr.destroy', $qrs->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="text-center text-muted">Belum ada data gambar.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.qr.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Upload Gambar QR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <label for="gambar" class="form-label">Pilih Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control" required accept="image/*">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
@foreach($qr as $qrs)
<div class="modal fade" id="editModal{{ $qrs->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $qrs->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.qr.update', $qrs->id) }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $qrs->id }}">Edit Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <label for="gambar{{ $qrs->id }}" class="form-label">Ganti Gambar</label>
                <input type="file" name="gambar" id="gambar{{ $qrs->id }}" class="form-control" required accept="image/*">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endforeach
@endsection
