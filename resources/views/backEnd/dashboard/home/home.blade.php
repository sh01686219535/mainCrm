@extends('backEnd.dashboard.home.master')
@section('title', 'Dashboard')
@section('content')
    @push('css')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
    @endpush

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Stat boxes -->
                <div class="row">
                    <!-- Customer count -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xl-6 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $customerCount }}</h3>
                                <p>Customers</p>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Lead count -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xl-6 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $leadCount }}</h3>
                                <p>Leads</p>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Today's payments -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xl-6 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $todaysPayment }}</h3>
                                <p>Payments - Today</p>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Monthly payments -->
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xl-6 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $MonthlyPayment }}</h3>
                                <p>Payments - Monthly</p>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Monthly payments Chart -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
                        <div id="Container" class="chart"></div>
                    </div>
                    <br>
                    <!-- Lead Chart -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12 m-chart">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 col-12">
                            <section class="chart">
                                <canvas id="myChart"></canvas>
                            </section>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 col-12">
                            <!-- Customer Chart -->
                            <section class="chart">
                                <div id="chart_div"></div>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
@push('js')
    {{-- monthly charts --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var userChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($labels) !!},
                    datasets: {!! json_encode($dataSets) !!}
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: true
                        }
                    }
                }
            });
        });
    </script>
    {{-- pie charts --}}
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                <?php echo $charr; ?>
            ]);
            var options = {
                'title': 'Customer',
            };
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
    {{-- line charts --}}
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var userDataString = @json($paymentData);
            var userData = JSON.parse(userDataString);
            Highcharts.chart('Container', {
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'Monthly Payment ' + new Date().getFullYear()
                },
                xAxis: {
                    categories: ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"
                    ],
                },
                yAxis: {
                    title: {
                        text: 'Number of New Payments',

                    }
                },
                series: [{
                    name: 'New Payments',
                    data: userData
                }]
            });
        });
    </script>
@endpush
