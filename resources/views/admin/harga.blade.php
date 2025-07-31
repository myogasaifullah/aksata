@extends('layouts.master')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Harga</h6>
        </nav>
        
            <ul class="navbar-nav  justify-content-end">
                

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
                        <h6 class="text-white text-capitalize ps-3">Daftar Harga</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <!-- Add Margin Bottom to the button for spacing -->
                    <div class="col-6 text-start ps-3 mb-5"> <!-- Increased mb-5 here for more space between button and table -->
                        <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#addHargaModal">
                            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Harga
                        </button>
                    </div>

                    <!-- Loop through grouped harga data with more space between each table -->
                    @foreach ($hargasGrouped as $gameName => $hargasByGame)
                    <div class="card my-5"> <!-- Increased my-5 here for more margin-top and margin-bottom for each table -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Game</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hargasByGame as $harga)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $harga->game->nama ?? 'N/A' }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $harga->jumlah }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Rp {{ number_format($harga->harga, 0, ',', '.') }}</span>
                                            </td>
                                            <td class="align-middle d-flex justify-content-center align-items-center">
                                                <button type="button" class="btn btn-link text-dark px-3 mb-0 edit-harga-btn"
                                                    data-bs-toggle="modal" data-bs-target="#editHargaModal"
                                                    data-id="{{ $harga->id }}"
                                                    data-game_id="{{ $harga->game_id }}"
                                                    data-jumlah="{{ $harga->jumlah }}"
                                                    data-harga="{{ $harga->harga }}">
                                                    <i class="material-icons text-sm me-2">edit</i>Edit
                                                </button>
                                                <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0 delete-harga-btn"
                                                    data-id="{{ $harga->id }}">
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Add Harga Modal -->
    <div class="modal fade" id="addHargaModal" tabindex="-1" aria-labelledby="addHargaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.harga.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addHargaModalLabel">Tambah Harga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label" for="game_id">Game</label>
                            <select name="game_id" id="game_id" class="form-control">
                                <option value="">Pilih Game</option>
                                @foreach ($games as $game)
                                <option value="{{ $game->id }}" {{ old('game_id') == $game->id ? 'selected' : '' }}>{{ $game->nama }}</option>
                                @endforeach
                            </select>
                            @error('game_id')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label" for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah') }}" class="form-control" min="1" required>
                            @error('jumlah')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label" for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" value="{{ old('harga') }}" class="form-control" min="0" required>
                            @error('harga')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                            @enderror
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

    <!-- Edit Harga Modal -->
    <div class="modal fade" id="editHargaModal" tabindex="-1" aria-labelledby="editHargaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editHargaForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editHargaModalLabel">Edit Harga</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label" for="edit_game_id">Game</label>
                            <select name="game_id" id="edit_game_id" class="form-control">
                                <option value="">Pilih Game</option>
                                @foreach ($games as $game)
                                <option value="{{ $game->id }}">{{ $game->nama }}</option>
                                @endforeach
                            </select>
                            <p id="edit_game_id_error" class="text-danger text-sm mt-1 d-none"></p>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label" for="edit_jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="edit_jumlah" class="form-control" min="1" required>
                            <p id="edit_jumlah_error" class="text-danger text-sm mt-1 d-none"></p>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label" for="edit_harga">Harga</label>
                            <input type="number" name="harga" id="edit_harga" class="form-control" min="0" required>
                            <p id="edit_harga_error" class="text-danger text-sm mt-1 d-none"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteHargaModal" tabindex="-1" aria-labelledby="deleteHargaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteHargaModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <form id="deleteHargaForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editHargaModal = document.getElementById('editHargaModal');
        const editHargaForm = document.getElementById('editHargaForm');
        const deleteHargaModal = new bootstrap.Modal(document.getElementById('deleteHargaModal'));
        const deleteHargaForm = document.getElementById('deleteHargaForm');
        let hargaIdToDelete = null;

        document.querySelectorAll('.edit-harga-btn').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const gameId = this.getAttribute('data-game_id');
                const jumlah = this.getAttribute('data-jumlah');
                const harga = this.getAttribute('data-harga');

                editHargaForm.action = `/harga/${id}`;
                document.getElementById('edit_game_id').value = gameId;
                document.getElementById('edit_jumlah').value = jumlah;
                document.getElementById('edit_harga').value = harga;

                var modal = new bootstrap.Modal(editHargaModal);
                modal.show();
            });
        });

        document.querySelectorAll('.delete-harga-btn').forEach(button => {
            button.addEventListener('click', function() {
                hargaIdToDelete = this.getAttribute('data-id');
                deleteHargaForm.action = `/harga/${hargaIdToDelete}`;
                deleteHargaModal.show();
            });
        });
    });
</script>

@endsection