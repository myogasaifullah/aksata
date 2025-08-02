@extends('layouts.master')

@section('page-title', 'Ewalet CRUD')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Data Ewalet</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          @if(session('success'))
          <div class="alert alert-success mx-3">
            {{ session('success') }}
          </div>
          @endif

          <div class="col-6 text-start ps-3">
            <button type="button" class="btn bg-gradient-dark mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
              <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Ewalet
            </button>
          </div>

          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Atas Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ewalets as $ewalet)
                <tr>
                  <td><img src="{{ asset('storage/' . $ewalet->gambar) }}" width="50"></td>
                  <td>{{ $ewalet->nama }}</td>
                  <td>{{ $ewalet->atasnama }}</td>
                  <td>{{ $ewalet->deskripsi }}</td>
                  <td class="text-center">
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $ewalet->id }}">Edit</button>
                    <form action="{{ route('admin.ewalet.destroy', $ewalet->id) }}" method="POST" class="d-inline">
                      @csrf @method('DELETE')
                      <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                  </td>
                </tr>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal{{ $ewalet->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $ewalet->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <form method="POST" action="{{ route('admin.ewalet.update', $ewalet->id) }}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="modal-header">
                          <h5 class="modal-title" id="editModalLabel{{ $ewalet->id }}">Edit Ewalet</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                          <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" value="{{ $ewalet->nama }}" class="form-control" required>
                          </div>
                          <div class="mb-3">
                            <label>Atas Nama</label>
                            <input type="text" name="atasnama" value="{{ $ewalet->atasnama }}" class="form-control" required>
                          </div>
                          <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" required>{{ $ewalet->deskripsi }}</textarea>
                          </div>
                          <div class="mb-3">
                            <label>Gambar Baru (opsional)</label>
                            <input type="file" name="gambar" class="form-control">
                            <div class="mt-2">
                              <small>Gambar saat ini:</small><br>
                              <img src="{{ asset('storage/' . $ewalet->gambar) }}" width="100">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
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

  <!-- Modal Tambah -->
  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form method="POST" action="{{ route('admin.ewalet.store') }}" enctype="multipart/form-data" class="modal-content">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel">Tambah Ewalet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Atas Nama</label>
            <input type="text" name="atasnama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
          </div>
          <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
