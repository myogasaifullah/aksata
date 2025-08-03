@extends('layouts.master')

@section('page-title', 'Admin Dashboard')

@section('content')
<div class="container-fluid py-4">
    <!-- Summary Cards - Improved Layout -->
    <div class="row g-4">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-hover border-0 shadow-sm rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                            <i class="fas fa-money-bill-wave text-primary fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-muted">Total Payments</h6>
                            <h3 class="mb-0">{{ $payments->count() }}</h3>
                        </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-sm-6">
            <div class="card card-hover border-0 shadow-sm rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-success bg-opacity-10 p-3 rounded me-3">
                            <i class="fas fa-gamepad text-success fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-muted">Total Games</h6>
                            <h3 class="mb-0">{{ $games->count() }}</h3>
                        </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-sm-6">
            <div class="card card-hover border-0 shadow-sm rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-info bg-opacity-10 p-3 rounded me-3">
                            <i class="fas fa-box-open text-info fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-muted">Harga Packages</h6>
                            <h3 class="mb-0">{{ $hargas->count() }}</h3>
                        </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-sm-6">
            <div class="card card-hover border-0 shadow-sm rounded-lg overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-warning bg-opacity-10 p-3 rounded me-3">
                            <i class="fas fa-qrcode text-warning fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-muted">QR Codes</h6>
                            <h3 class="mb-0">{{ $qrs->count() }}</h3>
                        </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section - Modern Design -->
    <div class="row mt-4 g-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">Monthly Order Count</h5>
                            <p class="text-muted mb-0 small">Order volume by month</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link text-muted" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Export</a></li>
                                <li><a class="dropdown-item" href="#">Refresh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="chart-container" style="height: 250px;">
                        <canvas id="monthlyOrderChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">Order Status Distribution</h5>
                            <p class="text-muted mb-0 small">Current order status breakdown</p>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-link text-muted" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Export</a></li>
                                <li><a class="dropdown-item" href="#">Refresh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="chart-container" style="height: 250px;">
                        <canvas id="statusPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders Table - Modern Design -->
    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">Recent Orders</h5>
                            <p class="text-muted mb-0 small">{{ $orders->count() }} total orders</p>
                        </div>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th class="border-0">ID Transaksi</th>
                                    <th class="border-0">No Telp</th>
                                    <th class="border-0">ID Game</th>
                                    <th class="border-0 text-end">Total</th>
                                    <th class="border-0 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders->take(5) as $order)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary bg-opacity-10 p-2 rounded me-2">
                                                <i class="fas fa-receipt text-primary"></i>
                                            </div>
                                            <span class="fw-medium">{{ $order->id_transaksi }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $order->no_telp }}</td>
                                    <td>{{ $order->game_id }}</td>
                                    <td class="text-end fw-medium">{{ $order->total }}</td>
                                    <td class="text-center">
                                        <span class="badge bg-{{ $order->status == 'completed' ? 'success' : 'warning' }}-subtle text-{{ $order->status == 'completed' ? 'success' : 'warning' }} rounded-pill">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Payments - Card Design -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">Recent Payments</h5>
                            <p class="text-muted mb-0 small">{{ round($payments->count() / max(1, $payments->count() - 5) * 100) }}% increase</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="vstack gap-3">
                        @foreach ($payments->take(5) as $payment)
                        <div class="d-flex align-items-center p-3 bg-light rounded">
                            <div class="bg-{{ $payment->status == 'completed' ? 'success' : 'warning' }}-subtle p-2 rounded me-3">
                                <i class="fas fa-{{ $payment->method == 'credit_card' ? 'credit-card' : 'money-bill-wave' }} text-{{ $payment->status == 'completed' ? 'success' : 'warning' }}"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0">Payment #{{ $payment->id }}</h6>
                                <small class="text-muted">{{ ucfirst($payment->method) }} - {{ $payment->amount }}</small>
                            </div>
                            <span class="badge bg-{{ $payment->status == 'completed' ? 'success' : 'warning' }}-subtle text-{{ $payment->status == 'completed' ? 'success' : 'warning' }} rounded-pill">
                                {{ ucfirst($payment->status) }}
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Data Tables -->
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 pb-0">
                    <h5 class="mb-0">Recent Rates</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th class="border-0">Stars</th>
                                    <th class="border-0">Game</th>
                                    <th class="border-0">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rates->take(5) as $rate)
                                <tr>
                                    <td>
                                        <div class="star-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fas fa-star{{ $i > $rate->stars ? '-empty' : '' }} text-warning"></i>
                                            @endfor
                                        </div>
                                    </td>
                                    <td>{{ $rate->name }}</td>
                                    <td class="text-truncate" style="max-width: 200px;">{{ $rate->description }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 pb-0">
                    <h5 class="mb-0">Ewallet Services</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th class="border-0">ID</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ewalets->take(5) as $ewalet)
                                <tr>
                                    <td>{{ $ewalet->id }}</td>
                                    <td>{{ $ewalet->nama }}</td>
                                    <td class="text-truncate" style="max-width: 200px;">{{ $ewalet->deskripsi }}</td>
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

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Monthly Order Count Bar Chart - Modern Style
    const monthlyOrderCtx = document.getElementById("monthlyOrderChart").getContext("2d");
    new Chart(monthlyOrderCtx, {
        type: "bar",
        data: {
            labels: @json($monthlyLabels),
            datasets: [{
                label: "Orders",
                backgroundColor: "rgba(13, 110, 253, 0.7)",
                borderColor: "rgba(13, 110, 253, 1)",
                borderWidth: 1,
                borderRadius: 6,
                data: @json($monthlyCounts),
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: "#2c3e50",
                    titleFont: { size: 14, weight: 'bold' },
                    bodyFont: { size: 12 },
                    padding: 12,
                    cornerRadius: 6,
                    displayColors: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: "rgba(0, 0, 0, 0.05)" },
                    ticks: { color: "#6c757d" }
                },
                x: {
                    grid: { display: false },
                    ticks: { color: "#6c757d" }
                }
            }
        }
    });

    // Order Status Pie Chart - Modern Style
    const statusPieCtx = document.getElementById("statusPieChart").getContext("2d");
    new Chart(statusPieCtx, {
        type: "doughnut",
        data: {
            labels: @json($statusCounts->pluck('status')),
            datasets: [{
                data: @json($statusCounts->pluck('count')),
                backgroundColor: [
                    'rgba(40, 167, 69, 0.7)',
                    'rgba(13, 110, 253, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(220, 53, 69, 0.7)',
                    'rgba(108, 117, 125, 0.7)'
                ],
                borderColor: '#fff',
                borderWidth: 2
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        color: '#495057',
                        font: { size: 12 },
                        padding: 20,
                        usePointStyle: true,
                        pointStyle: 'circle'
                    }
                },
                tooltip: {
                    backgroundColor: "#2c3e50",
                    titleFont: { size: 14, weight: 'bold' },
                    bodyFont: { size: 12 },
                    padding: 12,
                    cornerRadius: 6
                }
            }
        }
    });
});
</script>

<style>
    .card-hover:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .star-rating {
        color: #ffc107;
        font-size: 0.9rem;
    }
    
    .chart-container {
        position: relative;
        min-height: 250px;
    }
    
    .table-hover tbody tr:hover {
        background-color: rgba(13, 110, 253, 0.05);
    }
</style>
@endsection