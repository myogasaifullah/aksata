@extends('layouts.master')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <!-- Header -->
    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-tr from-pink-600 to-rose-500 shadow-soft-xl rounded-2xl mb-4 p-4">
        <h6 class="text-white text-lg font-bold">Gambar QR Table</h6>
    </div>

    <!-- Card Table -->
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl">
        <div class="p-4">
            <button type="button"
                class="inline-block px-4 py-2 text-white font-bold text-sm bg-slate-900 rounded-lg hover:shadow-md focus:outline-none mb-4"
                data-bs-toggle="modal" data-bs-target="#createModal">
                + TAMBAH GAMBAR
            </button>

            @if(session('success'))
                <div class="alert alert-success text-sm text-green-700">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-xs font-semibold text-slate-500">GAMBAR</th>
                            <th class="text-xs font-semibold text-slate-500 text-end">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($qr as $qrs)
                        <tr>
                            <td class="align-middle">
                                <img src="{{ asset('storage/' . $qrs->gambar) }}" width="80" class="rounded shadow-sm">
                            </td>
                            <td class="align-middle text-end">
                                <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $qrs->id }}">
                                    Edit
                                </button>

                                <form action="{{ route('admin.qr.destroy', $qrs->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal{{ $qrs->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $qrs->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('admin.qr.update', $qrs->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Gambar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="file" name="gambar" class="form-control" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.qr.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Upload Gambar QR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
