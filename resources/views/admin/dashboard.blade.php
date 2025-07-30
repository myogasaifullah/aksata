@extends('layouts.master')

@section('page-title', 'Admin Dashboard')

@section('content')


<div class="container-fluid py-4">
    
    <!-- Charts Section -->
    <div class="row mt-4">
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0">Monthly Payments</h6>
                    <p class="text-sm">Payment performance overview</p>
                    <hr class="dark horizontal">
                    <div class="d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm">Updated just now</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0">Daily Orders</h6>
                    <p class="text-sm">Order trends overview</p>
                    <hr class="dark horizontal">
                    <div class="d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm">Updated 4 min ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Order Status Chart -->
    <div class="row mt-4">
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-warning shadow-warning border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <canvas id="chart-pie" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0">Order Status Distribution</h6>
                    <p class="text-sm">Overview of orders by status</p>
                    <hr class="dark horizontal">
                    <div class="d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm">Updated just now</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Use preprocessed data passed from controller
        const monthlyLabels = @json($monthlyLabels);
        const monthlyData = @json($monthlyPayments->pluck('total_amount'));

        const dailyLabels = @json($dailyOrders->pluck('date'));
        const dailyData = @json($dailyOrders->pluck('count'));

        const orderStatusLabels = @json($orderStatusCounts->pluck('status'));
        const orderStatusData = @json($orderStatusCounts->pluck('count'));

        // Monthly Payments Bar Chart
        const ctxBar = document.getElementById('chart-bars').getContext('2d');
        new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: monthlyLabels,
                datasets: [{
                    label: 'Payments',
                    data: monthlyData,
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });

        // Daily Orders Line Chart
        const ctxLine = document.getElementById('chart-line').getContext('2d');
        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: dailyLabels,
                datasets: [{
                    label: 'Orders',
                    data: dailyData,
                    fill: false,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });

        // Order Status Pie Chart
        const ctxPie = document.getElementById('chart-pie').getContext('2d');
        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: orderStatusLabels,
                datasets: [{
                    label: 'Order Status',
                    data: orderStatusData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            }
        });
    });
</script>
 
@endsection
