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

    closeEditModalBtn.addEventListener('click', () => {
        editModal.classList.add('hidden');
    });

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
</script>
