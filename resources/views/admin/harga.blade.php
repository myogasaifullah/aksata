@extends('layouts.master')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Daftar Harga</h1>

    @if(session('success'))
    <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
        {{ session('success') }}
    </div>
    @endif

    <button id="openModalBtn" class="mb-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tambah Harga</button>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Game</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Jumlah</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hargas as $harga)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $harga->game->nama ?? 'N/A' }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $harga->jumlah }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">Rp {{ number_format($harga->harga, 0, ',', '.') }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <button class="editBtn px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500"
                            data-id="{{ $harga->id }}"
                            data-game_id="{{ $harga->game_id }}"
                            data-jumlah="{{ $harga->jumlah }}"
                            data-harga="{{ $harga->harga }}">
                            Edit
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div id="tambahHargaModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <h2 class="text-xl font-bold mb-4">Tambah Harga</h2>
        <form action="{{ route('admin.harga.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="game_id" class="block mb-1 font-semibold">Game</label>
                <select name="game_id" id="game_id" class="w-full border border-gray-300 rounded px-3 py-2">
                    <option value="">Pilih Game</option>
                    @foreach ($games as $game)
                    <option value="{{ $game->id }}" {{ old('game_id') == $game->id ? 'selected' : '' }}>{{ $game->nama }}</option>
                    @endforeach
                </select>
                @error('game_id')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jumlah" class="block mb-1 font-semibold">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah') }}" class="w-full border border-gray-300 rounded px-3 py-2" min="1" required>
                @error('jumlah')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="harga" class="block mb-1 font-semibold">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ old('harga') }}" class="w-full border border-gray-300 rounded px-3 py-2" min="0" required>
                @error('harga')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="button" id="closeModalBtn" class="mr-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const modal = document.getElementById('tambahHargaModal');

    openModalBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>

<!-- Edit Modal -->
<div id="editHargaModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <h2 class="text-xl font-bold mb-4">Edit Harga</h2>
        <form id="editHargaForm" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="edit_game_id" class="block mb-1 font-semibold">Game</label>
                <select name="game_id" id="edit_game_id" class="w-full border border-gray-300 rounded px-3 py-2">
                    <option value="">Pilih Game</option>
                    @foreach ($games as $game)
                    <option value="{{ $game->id }}">{{ $game->nama }}</option>
                    @endforeach
                </select>
                <p id="edit_game_id_error" class="text-red-600 text-sm mt-1 hidden"></p>
            </div>
            <div class="mb-4">
                <label for="edit_jumlah" class="block mb-1 font-semibold">Jumlah</label>
                <input type="number" name="jumlah" id="edit_jumlah" class="w-full border border-gray-300 rounded px-3 py-2" min="1" required>
                <p id="edit_jumlah_error" class="text-red-600 text-sm mt-1 hidden"></p>
            </div>
            <div class="mb-4">
                <label for="edit_harga" class="block mb-1 font-semibold">Harga</label>
                <input type="number" name="harga" id="edit_harga" class="w-full border border-gray-300 rounded px-3 py-2" min="0" required>
                <p id="edit_harga_error" class="text-red-600 text-sm mt-1 hidden"></p>
            </div>
            <div class="flex justify-end">
                <button type="button" id="closeEditModalBtn" class="mr-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                <button type="submit" class="px-4 py-2 bg-yellow-400 text-white rounded hover:bg-yellow-500">Update</button>
            </div>
        </form>
    </div>
</div>

<script>
    const editModal = document.getElementById('editHargaModal');
    const closeEditModalBtn = document.getElementById('closeEditModalBtn');
    const editHargaForm = document.getElementById('editHargaForm');

    document.querySelectorAll('.editBtn').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const gameId = button.getAttribute('data-game_id');
            const jumlah = button.getAttribute('data-jumlah');
            const harga = button.getAttribute('data-harga');

            editHargaForm.action = `/harga/${id}`;
            document.getElementById('edit_game_id').value = gameId;
            document.getElementById('edit_jumlah').value = jumlah;
            document.getElementById('edit_harga').value = harga;

            editModal.classList.remove('hidden');
        });
    });

    closeEditModalBtn.addEventListener('click', () => {
        editModal.classList.add('hidden');
    });
</script>

@endsection