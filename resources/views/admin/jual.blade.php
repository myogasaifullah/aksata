@extends('layouts.master')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Jual</h6>
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
                        <h6 class="text-white text-capitalize ps-3">Daftar Jual</h6>
                    </div>
                </div>

                <div class="card-body px-0 pb-2">
                    <div class="col-6 text-start ps-3 mb-5">
                        <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#addJualModal">
                            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Jual
                        </button>
                    </div>

                    @foreach ($jualsGrouped as $gameName => $jualsByGame)
                    <div class="card my-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <h5 class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <small class="text-white text-capitalize ps-3">game: {{ $gameName }}</small>
                            </h5>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Game</th>
                                                <th>Jumlah</th>
                                                <th class="text-center">Harga</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jualsByGame as $jual)
                                            <tr>
                                                <td>{{ $jual->game->nama ?? 'N/A' }}</td>
                                                <td>{{ $jual->jumlah }}</td>
                                                <td class="text-center">Rp {{ number_format($jual->harga, 0, ',', '.') }}</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-link text-dark px-3 mb-0 edit-jual-btn"
                                                        data-bs-toggle="modal" data-bs-target="#editJualModal"
                                                        data-id="{{ $jual->id }}"
                                                        data-game_id="{{ $jual->game_id }}"
                                                        data-jumlah="{{ $jual->jumlah }}"
                                                        data-harga="{{ $jual->harga }}">
                                                        <i class="material-icons text-sm me-2">edit</i>Edit
                                                    </button>

                                                    <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0 delete-jual-btn"
                                                        data-id="{{ $jual->id }}">
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

        <!-- Add Jual Modal -->
        <div class="modal fade" id="addJualModal" tabindex="-1" aria-labelledby="addJualModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('admin.jual.store') }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="addJualModalLabel">Tambah Jual</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <select name="game_id" class="form-control mb-3" required>
                                <option value="">Pilih Game</option>
                                @foreach ($games as $game)
                                <option value="{{ $game->id }}">{{ $game->nama }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="jumlah" class="form-control mb-3" placeholder="Jumlah" required>
                            <input type="number" name="harga" class="form-control mb-3" placeholder="Harga" min="0" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Jual Modal -->
        <div class="modal fade" id="editJualModal" tabindex="-1" aria-labelledby="editJualModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editJualForm" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title" id="editJualModalLabel">Edit Jual</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <select name="game_id" id="edit_game_id" class="form-control mb-3" required>
                                @foreach ($games as $game)
                                <option value="{{ $game->id }}">{{ $game->nama }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="jumlah" id="edit_jumlah" class="form-control mb-3" required>
                            <input type="number" name="harga" id="edit_harga" class="form-control mb-3" min="0" required>
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
        <div class="modal fade" id="deleteJualModal" tabindex="-1" aria-labelledby="deleteJualModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="deleteJualForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteJualModalLabel">Konfirmasi Hapus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus data ini?
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
        document.addEventListener('DOMContentLoaded', function() {
            const editJualForm = document.getElementById('editJualForm');
            const deleteJualForm = document.getElementById('deleteJualForm');
            const deleteJualModal = new bootstrap.Modal(document.getElementById('deleteJualModal'));

            // Isi data ke modal edit saat tombol edit diklik
            document.querySelectorAll('.edit-jual-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.dataset.id;
                    const gameId = this.dataset.game_id;
                    const jumlah = this.dataset.jumlah;
                    const harga = this.dataset.harga;

                    // Update action form menggunakan route name
                    editJualForm.action = `/jual-admin/${id}`;
                    document.getElementById('edit_game_id').value = gameId;
                    document.getElementById('edit_jumlah').value = jumlah;
                    document.getElementById('edit_harga').value = harga;
                });
            });

            // Konfirmasi hapus
            document.querySelectorAll('.delete-jual-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.dataset.id;
                    deleteJualForm.action = `/jual-admin/${id}`;
                    deleteJualModal.show();
                });
            });
        });
    </script>
    @endsection
