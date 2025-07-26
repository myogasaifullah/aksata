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
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $game->created_at->format('d/m/Y') }}</span>
                  </td>
                  <td class="align-middle d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-link text-dark px-3 mb-0 edit-game-btn"
                      data-bs-toggle="modal" data-bs-target="#editGameModal"
                      data-id="{{ $game->id }}"
                      data-nama="{{ $game->nama }}"
                      data-deskripsi="{{ $game->deskripsi }}"
                      data-gambar="{{ $game->gambar }}">
                      <i class="material-icons text-sm me-2">edit</i>Edit
                    </button>
                    <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0 delete-game-btn"
                      data-id="{{ $game->id }}">
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
        <div class="modal-header">
          <h5 class="modal-title" id="deleteGameModalLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus game inii?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger" id="confirmDeleteGameBtn">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const editGameForm = document.getElementById('editGameForm');
    const deleteGameModal = new bootstrap.Modal(document.getElementById('deleteGameModal'));
    let gameIdToDelete = null;

    document.querySelectorAll('.edit-game-btn').forEach(button => {
      button.addEventListener('click', function () {
        const gameId = this.getAttribute('data-id');
        const gameName = this.getAttribute('data-nama');
        const gameDeskripsi = this.getAttribute('data-deskripsi');

        editGameForm.action = `/games/${gameId}`;
        editGameForm.querySelector('#editGameName').value = gameName;
        editGameForm.querySelector('#editGameImage').value = '';
        editGameForm.querySelector('#editGameDesc').value = gameDeskripsi || '';
      });
    });

    document.querySelectorAll('.delete-game-btn').forEach(button => {
      button.addEventListener('click', function () {
        gameIdToDelete = this.getAttribute('data-id');
        deleteGameModal.show();
      });
    });

    document.getElementById('confirmDeleteGameBtn').addEventListener('click', async function () {
      if (!gameIdToDelete) return;
      try {
        const response = await fetch(`/games/${gameIdToDelete}`, {
          method: 'DELETE',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          }
        });
        if (response.status >= 200 && response.status < 400) {
          window.location.reload();
        }
      } catch (error) {
        // Optional: handle error
      }
      deleteGameModal.hide();
      gameIdToDelete = null;
    });
  });
  
</script>
@endsection
