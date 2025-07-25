@extends('layouts.master')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">📦 Data Transaksi</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tombol Tambah Order -->
    <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createModal">
        + Tambah Order
    </button>

    <!-- Table Order -->
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID Transaksi</th>
                    <th>No Telp</th>
                    <th>Produk</th>
                    <th>Tanggal</th>
                    <th>Metode</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id_transaksi }}</td>
                    <td>{{ $order->no_telp }}</td>
                    <td>{{ $order->produk }}</td>
                    <td>{{ $order->tanggal }}</td>
                    <td>{{ $order->metode }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $order->id }}">Edit</button>

                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <div class="modal fade" id="editModal{{ $order->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $order->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('admin.orders.update', $order->id) }}">
                                @csrf @method('PUT')
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Order: {{ $order->id_transaksi }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="id_transaksi" value="{{ $order->id_transaksi }}" class="form-control mb-2" required>
                                    <input type="text" name="no_telp" value="{{ $order->no_telp }}" class="form-control mb-2" required>
                                    <input type="text" name="produk" value="{{ $order->produk }}" class="form-control mb-2" required>
                                    <input type="date" name="tanggal" value="{{ $order->tanggal }}" class="form-control mb-2" required>
                                    <input type="text" name="metode" value="{{ $order->metode }}" class="form-control mb-2" required>
                                    <input type="number" name="total" value="{{ $order->total }}" class="form-control mb-2" required>
                                    <input type="text" name="status" value="{{ $order->status }}" class="form-control mb-2" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
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

<!-- Modal Tambah Order -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.orders.store') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambah Order Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="id_transaksi" placeholder="ID Transaksi" class="form-control mb-2" required>
                    <input type="text" name="no_telp" placeholder="No Telepon" class="form-control mb-2" required>
                    <input type="text" name="produk" placeholder="Produk" class="form-control mb-2" required>
                    <input type="date" name="tanggal" class="form-control mb-2" required>
                    <input type="text" name="metode" placeholder="Metode Pembayaran" class="form-control mb-2" required>
                    <input type="number" name="total" placeholder="Total" class="form-control mb-2" required>
                    <input type="text" name="status" placeholder="Status" class="form-control mb-2" required>
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
sdvsvs