@extends('layouts.master')

@section('page-title', 'Ewalet CRUD')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Data Ewalet</h1>

    @if(session('success'))
    <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
    @endif

    <!-- Button Tambah -->
    <button onclick="document.getElementById('addModal').showModal()" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">
        Tambah Ewalet
    </button>

    <!-- Tabel -->
    <div class="overflow-x-auto bg-white shadow rounded">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-200 text-left">
                <tr>
                    <th class="p-2">Gambar</th>
                    <th class="p-2">Nama</th>
                    <th class="p-2">Deskripsi</th>
                    <th class="p-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ewalets as $ewalet)
                <tr class="border-t">
                    <td class="p-2"><img src="{{ asset('storage/' . $ewalet->gambar) }}" width="50" /></td>
                    <td class="p-2">{{ $ewalet->nama }}</td>
                    <td class="p-2">{{ $ewalet->deskripsi }}</td>
                    <td class="p-2">
                        <!-- Edit -->
                        <button onclick="document.getElementById('editModal-{{ $ewalet->id }}').showModal()" class="text-blue-600">Edit</button>

                        <!-- Delete -->
                        <form action="{{ route('admin.ewalet.destroy', $ewalet->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Hapus?')" class="text-red-600 ml-2">Hapus</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <dialog id="editModal-{{ $ewalet->id }}" class="rounded-md w-96">
                    <form method="POST" action="{{ route('admin.ewalet.update', $ewalet->id) }}" enctype="multipart/form-data" class="p-4 space-y-4">
                        @csrf @method('PUT')
                        <h2 class="text-xl font-bold">Edit Ewalet</h2>
                        <input type="text" name="nama" value="{{ $ewalet->nama }}" required class="w-full border p-2" placeholder="Nama">
                        <textarea name="deskripsi" class="w-full border p-2" placeholder="Deskripsi" required>{{ $ewalet->deskripsi }}</textarea>
                        <input type="file" name="gambar" class="w-full">
                        <div class="flex justify-end gap-2">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                            <button type="button" onclick="this.closest('dialog').close()" class="bg-gray-300 px-4 py-2 rounded">Tutup</button>
                        </div>
                    </form>
                </dialog>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah -->
<dialog id="addModal" class="rounded-md w-96">
    <form method="POST" action="{{ route('admin.ewalet.store') }}" enctype="multipart/form-data" class="p-4 space-y-4">
        @csrf
        <h2 class="text-xl font-bold">Tambah Ewalet</h2>
        <input type="text" name="nama" required class="w-full border p-2" placeholder="Nama">
        <textarea name="deskripsi" class="w-full border p-2" placeholder="Deskripsi" required></textarea>
        <input type="file" name="gambar" required class="w-full">
        <div class="flex justify-end gap-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            <button type="button" onclick="this.closest('dialog').close()" class="bg-gray-300 px-4 py-2 rounded">Tutup</button>
        </div>
    </form>
</dialog>
@endsection
