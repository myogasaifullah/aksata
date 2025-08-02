@extends('layouts.master')

@section('page-title', 'Ewalet CRUD')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Ewalet</h6>
        </nav>
       
        <ul class="navbar-nav justify-content-end">
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
                <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                    <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="javascript:;">
                            <div class="d-flex py-1">
                                <div class="my-auto">
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
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
                                    <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3">
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
                                <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
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
</nav>

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
                  <td>
                    <div class="d-flex px-2 py-1">
                      <img src="{{ asset('storage/' . $ewalet->gambar) }}" width="50" class="border-radius-lg shadow">
                    </div>
                  </td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $ewalet->nama }}</p></td>
                  <td><p class="text-xs mb-0">{{ $ewalet->atasnama }}</p></td>
                  <td><p class="text-xs mb-0">{{ Str::limit($ewalet->deskripsi, 50) }}</p></td>
                  <td class="align-middle text-center">
                    <button type="button" class="btn btn-link text-dark px-3 mb-0 edit-ewalet-btn"
                      data-bs-toggle="modal" data-bs-target="#editModal"
                      data-id="{{ $ewalet->id }}"
                      data-nama="{{ $ewalet->nama }}"
                      data-atasnama="{{ $ewalet->atasnama }}"
                      data-deskripsi="{{ $ewalet->deskripsi }}">
                      <i class="material-icons text-sm me-2">edit</i>Edit
                    </button>
                    <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0 delete-ewalet-btn"
                      data-bs-toggle="modal" data-bs-target="#deleteModal"
                      data-id="{{ $ewalet->id }}"
                      data-nama="{{ $ewalet->nama }}">
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

  <!-- Create Modal -->
  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form method="POST" action="{{ route('admin.ewalet.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="createModalLabel">Tambah Ewalet</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="atasnama" class="form-label">Atas Nama</label>
              <input type="text" name="atasnama" id="atasnama" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="file" name="gambar" id="gambar" class="form-control" required>
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

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form id="editEwaletForm" method="POST" action="" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Ewalet</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="editNama" class="form-label">Nama</label>
              <input type="text" name="nama" id="editNama" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="editAtasnama" class="form-label">Atas Nama</label>
              <input type="text" name="atasnama" id="editAtasnama" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="editDeskripsi" class="form-label">Deskripsi</label>
              <textarea name="deskripsi" id="editDeskripsi" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="editGambar" class="form-label">Gambar</label>
              <input type="file" name="gambar" id="editGambar" class="form-control">
              <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="deleteEwaletForm" method="POST" action="">
          @csrf
          @method('DELETE')
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Yakin ingin menghapus ewalet "<span id="deleteEwaletName"></span>"?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editEwaletForm = document.getElementById('editEwaletForm');
    const deleteEwaletForm = document.getElementById('deleteEwaletForm');

    // Handle edit button clicks
    document.querySelectorAll('.edit-ewalet-btn').forEach(button => {
        button.addEventListener('click', function () {
            const ewaletId = this.getAttribute('data-id');
            const ewaletNama = this.getAttribute('data-nama');
            const ewaletAtasnama = this.getAttribute('data-atasnama');
            const ewaletDeskripsi = this.getAttribute('data-deskripsi');

            editEwaletForm.action = `{{ route('admin.ewalet.index') }}/${ewaletId}`;
            editEwaletForm.querySelector('#editNama').value = ewaletNama;
            editEwaletForm.querySelector('#editAtasnama').value = ewaletAtasnama;
            editEwaletForm.querySelector('#editDeskripsi').value = ewaletDeskripsi;
            editEwaletForm.querySelector('#editGambar').value = '';
        });
    });

    // Handle delete button clicks
    document.querySelectorAll('.delete-ewalet-btn').forEach(button => {
        button.addEventListener('click', function () {
            const ewaletId = this.getAttribute('data-id');
            const ewaletNama = this.getAttribute('data-nama');
            
            deleteEwaletForm.action = `{{ route('admin.ewalet.index') }}/${ewaletId}`;
            document.getElementById('deleteEwaletName').textContent = ewaletNama;
        });
    });
});
</script>

@endsection