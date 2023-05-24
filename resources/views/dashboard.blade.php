<x-app-layout>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center display-5">Search</h2>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="simple-results.html">
                            <div class="input-group">
                                <input type="search" class="form-control form-control-lg"
                                    placeholder="Type your keywords here">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <h5 class="mb-2">Info Box</h5>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Messages</span>
                        <span class="info-box-number">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Bookmarks</span>
                        <span class="info-box-number">410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Uploads</span>
                        <span class="info-box-number">13,648</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">93,139</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">
                <!-- BAR CHART -->
                <div class="card">
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            <div class="col-md-6">

                <div class="card">

                    <div class="card-header">

                        <h3 class="card-title"></h3>

                        <div class="card-tools">
                            <ul class="pagination pagination-sm float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0 table-responsive">

                        <table class="table table-sm">

                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Vehicle Number</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">

                        <h3 class="card-title">New Customer</h3>

                        <div class="card-tools">
                            <ul class="pagination pagination-sm float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0 table-responsive">

                        <table class="table table-sm">

                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Vehicle Number</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1.</td>
                                    <td>Username 1</td>
                                    <td>+91 9794445940</td>
                                    <td>Up 53 AD 7099</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-outline-success"><i
                                                class="fas fa-money-bill"></i></button>
                                    </td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
    </div>



    @section('script')
        <script>
            var areaChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                    'November', 'December'
                ],
                datasets: [{
                    label: 'Sell',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: true,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                }, ]
            }
            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            barChartData.datasets[0] = temp0

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false
            }

            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })
        </script>
    @endsection

</x-app-layout>
