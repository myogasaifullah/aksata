@extends('layouts.master')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Order</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                    <label class="form-label">Type here...</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <!-- Jika sudah login, ubah fungsi Sign In menjadi Log Out -->
                    @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link text-body font-weight-bold px-0 border-0 bg-transparent">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span> <!-- Tetap menggunakan "Sign In" text -->
                        </button>
                    </form>
                    @endauth

                    <!-- Jika belum login, tampilkan Sign In biasa -->
                    @guest
                    <a href="{{ route('login') }}" class="nav-link text-body font-weight-bold px-0 border-0 bg-transparent">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Sign In</span>
                    </a>
                    @endguest
                </li>

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
                        <!-- notifications here -->
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
            <h6 class="text-white text-capitalize ps-3">Daftar Transaksi</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <!-- Tombol Tambah Order -->
          <div class="col-6 text-start ps-3">
            <button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#createModal">
              <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Order
            </button>
          </div>

          <!-- Table Order -->
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Transaksi</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No Telp</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Produk</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID Game</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Metode</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                <tr>
                  <td>{{ $order->id_transaksi }}</td>
                  <td>{{ $order->no_telp }}</td>
                  <td>{{ $order->produk }}</td>
                  <td>{{ $order->game_id }}</td>
                  <td>{{ $order->tanggal }}</td>
                  <td>{{ $order->metode }}</td>
                  <td>{{ $order->total }}</td>
                  <td>{{ $order->status }}</td>
                  <td class="text-center">
                    <!-- Verifikasi Button -->
                    <form action="{{ route('admin.orders.verify', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin memverifikasi?')">
                      @csrf @method('PUT')
                      <button type="submit" class="btn btn-success btn-sm">
                        Verifikasi
                      </button>
                    </form>

                    <!-- Edit Button -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $order->id }}">
                      Edit
                    </button>

                    <!-- Delete Button -->
                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                      @csrf @method('DELETE')
                      <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                  </td>
                </tr>

                <!-- Edit Modal -->
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
                          <input type="text" name="game_id" value="{{ $order->game_id }}" class="form-control mb-2" required>
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
      </div>
    </div>
  </div>

  <!-- Create Order Modal -->
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
            <input type="text" name="no_telp" placeholder="No Telepon" class="form-control mb-2" required>
            <input type="text" name="produk" placeholder="Produk" class="form-control mb-2" required>
            <input type="text" name="game_id" placeholder="ID Game" class="form-control mb-2" required>
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
</div>

@endsection
