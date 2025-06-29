@extends('header')

@section('content')
         <div class="main-overview">
           <div class="overviewcard">
             <div class="overviewcard__icon">Jumlah Admin  -  <i class="fas fa-user-tie" style="font-size: 25px"></i></div>
             <div class="overviewcard__info">{{ $totalUser}}</div>
           </div>
           <div class="overviewcard">
             <div class="overviewcard__icon">Jumlah Pemohon  -  <i class="fas fa-users" style="font-size: 25px"></i>&nbsp; </div>
             <div class="overviewcard__info">{{ $totalPemohon}}</div>
           </div>
           <div class="overviewcard">
             <div class="overviewcard__icon">Purata Pendapatan  -  <i class="fas fa-money-bill" style="font-size: 25px"></i>&nbsp; </div>
             <div class="overviewcard__info">RM {{ number_format($avgGaji, 2) }} </div>
           </div>
         </div>
     
         <div class="container mt-4">
    <div class="row g-4">
        <!-- Status Chart -->
        <div class="col-md-6">
            <div class="card mt-4 shadow-sm border-0" style="background-color: #f8f9fa;">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Status Perkahwinan Pemohon</h5>
                </div>
                <div class="card-body">
                    <canvas id="statusChart" height="280"></canvas>
                </div>
            </div>
        </div>

        <!-- Gender Chart -->
        <div class="col-md-6">
            <div class="card mt-4 shadow-sm border-0" style="background-color: #f8f9fa;">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Statistik Jantina Pemohon</h5>
                </div>
                <div class="card-body">
                    <canvas id="genderChart" height="280"></canvas>
                </div>
            </div>
        </div>

        <!-- Age Group Chart -->
        <div class="col-md-6">
            <div class="card mt-4 shadow-sm border-0" style="background-color: #f8f9fa;">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Purata Umur Pemohon</h5>
                </div>
                <div class="card-body">
                    <canvas id="ageChart" height="280"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // 1. Status Perkahwinan Chart (Doughnut)
    const statusCtx = document.getElementById('statusChart').getContext('2d');
    new Chart(statusCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($statusCounts->keys()) !!},
            datasets: [{
                label: 'Jumlah Pemohon',
                data: {!! json_encode($statusCounts->values()) !!},
                backgroundColor: [
                    '#4e73df', // Blue
                    '#1cc88a', // Green
                    '#36b9cc', // Cyan
                    '#f6c23e', // Yellow
                    '#e74a3b', // Red
                    '#858796'  // Gray
                ],
                hoverOffset: 8
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'right'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed} pemohon`;
                        }
                    }
                }
            }
        }
    });

    // 2. Jantina Chart (Doughnut)
    const genderCtx = document.getElementById('genderChart').getContext('2d');
    new Chart(genderCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($genderCounts->keys()) !!},
            datasets: [{
                label: 'Jumlah Pemohon',
                data: {!! json_encode($genderCounts->values()) !!},
                backgroundColor: [
                  '#e83e8c',  // Pink
                    '#0d6efd' // Bootstrap Blue
                ],
                hoverOffset: 8
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed} pemohon`;
                        }
                    }
                }
            }
        }
    });

    // 3. Umur Chart (Bar)
    const ageCtx = document.getElementById('ageChart').getContext('2d');
    new Chart(ageCtx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_keys($ageGroups)) !!},
            datasets: [{
                label: 'Jumlah Pemohon',
                data: {!! json_encode(array_values($ageGroups)) !!},
                backgroundColor: '#20c997', // Teal
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed} pemohon`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0,
                        stepSize: 1
                    },
                    title: {
                        display: true,
                        text: 'Jumlah'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Kumpulan Umur'
                    }
                }
            }
        }
    });
</script>
@endpush
