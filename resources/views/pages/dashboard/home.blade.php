@extends('layouts.master')

@section('styles', )
    <style>

    </style>
@endsection

@section('content')



    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" style="zoom: 0.8;">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control border" id="dash-daterange">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-blue border-blue text-white">
                                            <i class="mdi mdi-calendar-range"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                                <i class="mdi mdi-autorenew"></i>
                            </a>
                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a>
                        </form>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-md-6 col-xl-6">
                <div class="widget-rounded-circle card-box">
                    <div class="row">

                        <canvas id="myChart" width="400" height="270"></canvas>

                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-6">
                                <div class="card-box">
                                    {{--  <h4 class="header-title mb-4">Tabs Justified</h4>  --}}

                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                        <li class="nav-item">
                                            <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                I HAVE
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                                I OWE
                                            </a>
                                        </li>
                                        {{--  <li class="nav-item">
                                            <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Messages
                                            </a>
                                        </li>  --}}
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="home1" style="max-height: 400px;">


                                                <div class="border mt-0 rounded" >
                                                    {{--  <h4 class="header-title p-2 mb-0">Order Summary</h4>  --}}

                                                    <div class="table-responsive" >
                                                        <table class="table table-centered table-nowrap mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    {{--  <td style="width: 90px;">
                                                                        <img src="../assets/images/products/product-1.png" alt="product-img"
                                                                            title="product-img" class="rounded" height="48" />
                                                                    </td>  --}}
                                                                    <td>
                                                                        <a href="ecommerce-product-detail.html" class="text-body font-weight-semibold">Polo Navy blue T-shirt</a>
                                                                        <small class="d-block">1 x $39</small>
                                                                    </td>

                                                                    <td class="text-right">
                                                                        $39
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    {{--  <td>
                                                                        <img src="../assets/images/products/product-2.png" alt="product-img"
                                                                            title="product-img" class="rounded" height="48" />
                                                                    </td>  --}}

                                                                    <td>
                                                                        <a href="ecommerce-product-detail.html" class="text-body font-weight-semibold">Red Hoodie for men</a>
                                                                        <small class="d-block">2 x $46</small>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        $92
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    {{--  <td>
                                                                        <img src="../assets/images/products/product-3.png" alt="product-img"
                                                                            title="product-img" class="rounded mr-2" height="48" />
                                                                    </td>  --}}
                                                                    <td>
                                                                        <a href="ecommerce-product-detail.html" class="text-body font-weight-semibold">Designer Awesome T-Shirt</a>
                                                                        <small class="d-block">1 x $26</small>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        $26
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end table-responsive -->
                                                </div> <!-- end .border-->

                                        </div>
                                        <div class="tab-pane  " id="profile1">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                            <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                        </div>
                                        {{--  <div class="tab-pane" id="messages1">
                                            <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                            <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        </div>  --}}
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fe-heart font-22 avatar-title text-info"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                <i class="fe-shopping-cart font-22 avatar-title text-primary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                <p class="text-muted mb-1 text-truncate">Todays Sales</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                <p class="text-muted mb-1 text-truncate">Conversion</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                <i class="fe-eye font-22 avatar-title text-primary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k</h3>
                                <p class="text-muted mb-1 text-truncate">Todays Visits</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-lg-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>

                    <h4 class="header-title mb-0">Total Revenue</h4>

                    <div class="widget-chart text-center" dir="ltr">

                        <div id="total-revenue" class="mt-0" data-colors="#4fc6e1"></div>

                        <h5 class="text-muted mt-0">Total sales made today</h5>
                        <h2>$178</h2>

                        <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading elements are designed to work best
                            in the meat of your page content.</p>

                        <div class="row mt-4">
                            <div class="col-4">
                                <p class="text-muted font-13 mb-1 text-truncate">Target</p>
                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-13 mb-1 text-truncate">Last week</p>
                                <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-13 mb-1 text-truncate">Last Month</p>
                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$15k</h4>
                            </div>
                        </div>

                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->

            <div class="col-lg-8">
                <div class="card-box pb-2">
                    <div class="float-right d-none d-md-inline-block">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-xs btn-light">Today</button>
                            <button type="button" class="btn btn-xs btn-light">Weekly</button>
                            <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Sales Analytics</h4>

                    <div dir="ltr">
                        <div id="sales-analytics" class="mt-4" data-colors="#7e57c2,#4fc6e1"></div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Top 5 Users Balances</h4>

                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                            <thead class="thead-light">
                                <tr>
                                    <th colspan="2">Profile</th>
                                    <th>Currency</th>
                                    <th>Balance</th>
                                    <th>Reserved in orders</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 36px;">
                                        <img src="{{ asset('assets/images/users/user-2.jpg') }}" alt="contact-img" title="contact-img"
                                            class="rounded-circle avatar-sm" />
                                    </td>

                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Tomaslau</h5>
                                        <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                    </td>

                                    <td>
                                        <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                    </td>

                                    <td>
                                        0.00816117 BTC
                                    </td>

                                    <td>
                                        0.00097036 BTC
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-plus"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                class="mdi mdi-minus"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 36px;">
                                        <img src="{{ asset('assets/images/users/user-3.jpg') }}" alt="contact-img" title="contact-img"
                                            class="rounded-circle avatar-sm" />
                                    </td>

                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Erwin E. Brown</h5>
                                        <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                    </td>

                                    <td>
                                        <i class="mdi mdi-currency-eth text-primary"></i> ETH
                                    </td>

                                    <td>
                                        3.16117008 ETH
                                    </td>

                                    <td>
                                        1.70360009 ETH
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-plus"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                class="mdi mdi-minus"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 36px;">
                                        <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="contact-img" title="contact-img"
                                            class="rounded-circle avatar-sm" />
                                    </td>

                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Margeret V. Ligon</h5>
                                        <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                    </td>

                                    <td>
                                        <i class="mdi mdi-currency-eur text-primary"></i> EUR
                                    </td>

                                    <td>
                                        25.08 EUR
                                    </td>

                                    <td>
                                        12.58 EUR
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-plus"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                class="mdi mdi-minus"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 36px;">
                                        <img src="{{ asset('assets/images/users/user-5.jpg') }}" alt="contact-img" title="contact-img"
                                            class="rounded-circle avatar-sm" />
                                    </td>

                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Jose D. Delacruz</h5>
                                        <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                    </td>

                                    <td>
                                        <i class="mdi mdi-currency-cny text-primary"></i> CNY
                                    </td>

                                    <td>
                                        82.00 CNY
                                    </td>

                                    <td>
                                        30.83 CNY
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-plus"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                class="mdi mdi-minus"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 36px;">
                                        <img src="{{ asset('assets/images/users/user-6.jpg') }}" alt="contact-img" title="contact-img"
                                            class="rounded-circle avatar-sm" />
                                    </td>

                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Luke J. Sain</h5>
                                        <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                    </td>

                                    <td>
                                        <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                    </td>

                                    <td>
                                        2.00816117 BTC
                                    </td>

                                    <td>
                                        1.00097036 BTC
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-plus"></i></a>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                class="mdi mdi-minus"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Revenue History</h4>

                    <div class="table-responsive">
                        <table class="table table-borderless table-nowrap table-hover table-centered m-0">

                            <thead class="thead-light">
                                <tr>
                                    <th>Marketplaces</th>
                                    <th>Date</th>
                                    <th>Payouts</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Themes Market</h5>
                                    </td>

                                    <td>
                                        Oct 15, 2018
                                    </td>

                                    <td>
                                        $5848.68
                                    </td>

                                    <td>
                                        <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-pencil"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Freelance</h5>
                                    </td>

                                    <td>
                                        Oct 12, 2018
                                    </td>

                                    <td>
                                        $1247.25
                                    </td>

                                    <td>
                                        <span class="badge bg-soft-success text-success">Paid</span>
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-pencil"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Share Holding</h5>
                                    </td>

                                    <td>
                                        Oct 10, 2018
                                    </td>

                                    <td>
                                        $815.89
                                    </td>

                                    <td>
                                        <span class="badge bg-soft-success text-success">Paid</span>
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-pencil"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Envatos Affiliates</h5>
                                    </td>

                                    <td>
                                        Oct 03, 2018
                                    </td>

                                    <td>
                                        $248.75
                                    </td>

                                    <td>
                                        <span class="badge bg-soft-danger text-danger">Overdue</span>
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-pencil"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Marketing Revenue</h5>
                                    </td>

                                    <td>
                                        Sep 21, 2018
                                    </td>

                                    <td>
                                        $978.21
                                    </td>

                                    <td>
                                        <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-pencil"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="m-0 font-weight-normal font-13">Advertise Revenue</h5>
                                    </td>

                                    <td>
                                        Sep 15, 2018
                                    </td>

                                    <td>
                                        $358.10
                                    </td>

                                    <td>
                                        <span class="badge bg-soft-success text-success">Paid</span>
                                    </td>

                                    <td>
                                        <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                                class="mdi mdi-pencil"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->




@endsection


@section('scripts')
<!-- Plugins js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['I HAVE', 'I OWE'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
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
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>



    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>



@endsection
