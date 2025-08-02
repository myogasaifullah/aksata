@extends('layouts.master')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">Games</h6>
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
            <h6 class="text-white text-capitalize ps-3">Games Table</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="col-6 text-start ps-3">
            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#addGameModal">
              <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Game
            </button>
          </div>
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cara Bermain</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($games as $game)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <img src="{{ $game->gambar }}" alt="{{ $game->nama }}" width="50" class="border-radius-lg shadow">
                    </div>
                  </td>
                  <td><p class="text-xs font-weight-bold mb-0">{{ $game->nama }}</p></td>
                  <td><p class="text-xs mb-0">{{ Str::limit($game->deskripsi, 50) }}</p></td>
                  <td><p class="text-xs mb-0">{{ Str::limit($game->cara_bermain, 50) }}</p></td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $game->created_at->format('d/m/Y') }}</span>
                  </td>
                  <td class="align-middle d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-link text-dark px-3 mb-0 edit-game-btn"
                      data-bs-toggle="modal" data-bs-target="#editGameModal"
                      data-id="{{ $game->id }}"
                      data-nama="{{ $game->nama }}"
                      data-deskripsi="{{ $game->deskripsi }}"
                      data-gambar="{{ $game->gambar }}"
                      data-cara_bermain="{{ $game->cara_bermain }}">
                      <i class="material-icons text-sm me-2">edit</i>Edit
                    </button>
                    <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0 delete-game-btn"
                      data-bs-toggle="modal" data-bs-target="#deleteGameModal"
                      data-id="{{ $game->id }}"
                      data-nama="{{ $game->nama }}">
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

  <!-- Add Game Modal -->
  <div class="modal fade" id="addGameModal" tabindex="-1" aria-labelledby="addGameModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="{{ route('admin.games.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="addGameModalLabel">Tambah Game</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="addGameName"></label>
              <input type="text" class="form-control" id="addGameName" name="nama" placeholder="Nama" required autofocus>
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="addGameImage"></label>
              <input type="file" class="form-control" id="addGameImage" name="gambar" required>
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="addGameDesc"></label>
              <textarea class="form-control" id="addGameDesc" name="deskripsi" rows="3" placeholder="Tulis deskripsi game..."></textarea>
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="addGameCaraBermain"></label>
              <textarea class="form-control" id="addGameCaraBermain" name="cara_bermain" rows="3" placeholder="Tulis cara bermain..."></textarea>
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

  <!-- Edit Game Modal -->
  <div class="modal fade" id="editGameModal" tabindex="-1" aria-labelledby="editGameModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="editGameForm" method="POST" action="" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-header">
            <h5 class="modal-title" id="editGameModalLabel">Edit Game</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="editGameName"></label>
              <input type="text" class="form-control" id="editGameName" name="nama" placeholder="nama" required autofocus>
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="editGameImage"></label>
              <input type="file" class="form-control" id="editGameImage" placeholder="gambar" name="gambar">
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="editGameDesc"></label>
              <textarea class="form-control" id="editGameDesc" name="deskripsi" placeholder="deskripsi" rows="3"></textarea>
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label" for="editGameCaraBermain"></label>
              <textarea class="form-control" id="editGameCaraBermain" name="cara_bermain" placeholder="cara bermain" rows="3"></textarea>
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

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteGameModal" tabindex="-1" aria-labelledby="deleteGameModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="deleteGameForm" method="POST" action="">
          @csrf
          @method('DELETE')
          <div class="modal-header">
            <h5 class="modal-title" id="deleteGameModalLabel">Konfirmasi Hapus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Yakin ingin menghapus game "<span id="deleteGameName"></span>"?</p>
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
    const editGameForm = document.getElementById('editGameForm');
    const deleteGameForm = document.getElementById('deleteGameForm');

    // Handle edit button clicks
    document.querySelectorAll('.edit-game-btn').forEach(button => {
      button.addEventListener('click', function () {
        const gameId = this.getAttribute('data-id');
        const gameName = this.getAttribute('data-nama');
        const gameDeskripsi = this.getAttribute('data-deskripsi');
        const gameCaraBermain = this.getAttribute('data-cara_bermain');

        editGameForm.action = `{{ route('admin.games.index') }}/${gameId}`;
        editGameForm.querySelector('#editGameName').value = gameName;
        editGameForm.querySelector('#editGameImage').value = '';
        editGameForm.querySelector('#editGameDesc').value = gameDeskripsi || '';
        editGameForm.querySelector('#editGameCaraBermain').value = gameCaraBermain || '';
      });
    });

    // Handle delete button clicks
    document.querySelectorAll('.delete-game-btn').forEach(button => {
      button.addEventListener('click', function () {
        const gameId = this.getAttribute('data-id');
        const gameName = this.getAttribute('data-nama');
        
        deleteGameForm.action = `{{ route('admin.games.index') }}/${gameId}`;
        document.getElementById('deleteGameName').textContent = gameName;
      });
    });
  });
</script>
@endsection