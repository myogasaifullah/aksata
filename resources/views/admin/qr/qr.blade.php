@extends('layouts.master')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <!-- ... (NAVBAR SAMA PERSIS DENGAN PUNYAMU) -->
</nav>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">QR Image Table</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="col-6 text-start ps-3">
            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#createModal">
              <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Gambar QR
            </button>
          </div>
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Atas Nama</th> <!-- Tambahan -->
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($qr as $qrs)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <img src="{{ asset('storage/' . $qrs->gambar) }}" width="80" class="rounded shadow-sm">
                    </div>
                  </td>
                  <td class="text-sm">{{ $qrs->atasnama }}</td> <!-- Tambahan -->
                  <td class="align-middle text-center">
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $qrs->id }}">
                      Edit
                    </button>
                    <form action="{{ route('admin.qr.destroy', $qrs->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
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
                          <h5 class="modal-title">Edit Gambar QR</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <label class="form-label">Atas Nama</label>
                          <input type="text" name="atasnama" class="form-control mb-3" value="{{ $qrs->atasnama }}" required>

                          <label class="form-label">Gambar</label>
                          <input type="file" name="gambar" class="form-control">
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
            <label class="form-label">Atas Nama</label>
            <input type="text" name="atasnama" class="form-control mb-3" required>

            <label class="form-label">Gambar</label>
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
</div>

@endsection
