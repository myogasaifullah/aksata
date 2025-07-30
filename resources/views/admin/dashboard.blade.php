@extends('layouts.master')

@section('page-title', 'Admin Dashboard')

@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <!-- Summary Cards -->
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card bg-gradient-primary shadow-primary border-radius-lg">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Payments</p>
                <h5 class="font-weight-bolder mb-0">
                  {{ $payments->count() }}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <i class="material-icons opacity-10" style="font-size: 36px;">payment</i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card bg-gradient-success shadow-success border-radius-lg">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Games</p>
                <h5 class="font-weight-bolder mb-0">
                  {{ $games->count() }}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <i class="material-icons opacity-10" style="font-size: 36px;">sports_esports</i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card bg-gradient-info shadow-info border-radius-lg">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Hargas</p>
                <h5 class="font-weight-bolder mb-0">
                  {{ $hargas->count() }}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <i class="material-icons opacity-10" style="font-size: 36px;">attach_money</i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
      <div class="card bg-gradient-warning shadow-warning border-radius-lg">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">QR Codes</p>
                <h5 class="font-weight-bolder mb-0">
                  {{ $qrs->count() }}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <i class="material-icons opacity-10" style="font-size: 36px;">qr_code</i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tables for recent entries -->
  <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Recent Orders</h6>
        </div>
        <div class="card-body pt-2 p-3">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Game</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders->take(5) as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->user_id }}</td>
                  <td>{{ $order->game->nama ?? 'N/A' }}</td>
                  <td>{{ $order->amount ?? 'N/A' }}</td>
                  <td>{{ $order->status ?? 'N/A' }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-4">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Recent Payments</h6>
        </div>
        <div class="card-body pt-2 p-3">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Method</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($payments->take(5) as $payment)
                <tr>
                  <td>{{ $payment->id }}</td>
                  <td>{{ $payment->method ?? 'N/A' }}</td>
                  <td>{{ $payment->amount ?? 'N/A' }}</td>
                  <td>{{ $payment->status ?? 'N/A' }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Additional tables for Rates and Ewalets -->
  <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Rates</h6>
        </div>
        <div class="card-body pt-2 p-3">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rate ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Game</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rates->take(5) as $rate)
                <tr>
                  <td>{{ $rate->id }}</td>
                  <td>{{ $rate->game->nama ?? 'N/A' }}</td>
                  <td>{{ $rate->price ?? 'N/A' }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-4">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Ewalets</h6>
        </div>
        <div class="card-body pt-2 p-3">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ewalet ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ewalets->take(5) as $ewalet)
                <tr>
                  <td>{{ $ewalet->id }}</td>
                  <td>{{ $ewalet->nama }}</td>
                  <td>{{ $ewalet->deskripsi }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
