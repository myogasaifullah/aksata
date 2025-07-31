
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
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                    <label class="form-label">Type here...</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
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
                        <input type="string" name="jumlah" class="form-control mb-3" placeholder="Jumlah" >
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
                        <input type="string" name="jumlah" id="edit_jumlah" class="form-control mb-3">
                        <input type="string" name="harga" id="edit_harga" class="form-control mb-3" >
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
            editJualForm.action = {{ url('/jual-admin') }}/${id};
            document.getElementById('edit_game_id').value = gameId;
            document.getElementById('edit_jumlah').value = jumlah;
            document.getElementById('edit_harga').value = harga;
        });
    });

    // Konfirmasi hapus
    document.querySelectorAll('.delete-jual-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            deleteJualForm.action = {{ url('/jual-admin') }}/${id};
            deleteJualModal.show();
        });
    });
});
</script>
@endsection