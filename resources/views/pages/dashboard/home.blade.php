@extends('layouts.master')

@section('styles')
    <style>

    </style>
@endsection

@section('content')



    <!-- Start Content-->
    <div class="container-fluid">
    <legend></legend>
        <!-- start page title -->
        {{-- <div class="row" style="zoom: 0.8;">
            <div class="col-12">
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
                    <h5 class="page-title">MY ACCOUNTS</h5>
                    <h6 class="page-title">QUICK TRANSACTIONS</h6>
                </div>
            </div>
        </div> --}}
        <!-- end page title -->

        <div class="row">

            <div class="col-md-5 col-xl-5">
                <h5 class="page-title">MY ACCOUNTS</h5>
                <div class="widget-rounded-circle card-box">
                    <div class="row">

                        <canvas id="myChart" width="400" height="300"></canvas>

                    </div> <!-- end row-->
                    <h4 class="text-center">TOTAL: GHS 90,000,000.00</h4>
                </div> <!-- end widget-rounded-circle-->

                <div class="col-md-13 col-xl-13">
                    <div class="card-box" style="zoom: 0.90;">
                        {{-- <h4 class="header-title mb-4">Tabs Justified</h4> --}}
{{--
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
                            <li class="nav-item">
                                                <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    Messages
                                                </a>
                                            </li>
                        </ul> --}}
                        <div class=" ">
                            <div class="" id="" >


                                <div class="border mt-0 rounded"  >
                                    <h4 class="header-title p-2 mb-0 text-success">I HAVE</h4>

                                    <div class="table-responsive" style="height: 275px;">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="avatar-sm rounded bg-soft-info">
                                                            <i class="dripicons-wallet font-4 avatar-title text-info"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('account-enquiry') }}"
                                                            class="text-body font-weight-semibold">Savings Account</a>
                                                        <small class="d-block">01024499300101</small>
                                                    </td>

                                                    <td class="">
                                                        GHS 90,039.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="avatar-sm rounded bg-soft-info">
                                                            <i class="dripicons-wallet font-4 avatar-title text-info"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"
                                                            class="text-body font-weight-semibold">Savings Account</a>
                                                        <small class="d-block">01024499300101</small>
                                                    </td>

                                                    <td class="">
                                                        GHS 90,039.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="avatar-sm rounded bg-soft-info">
                                                            <i class="dripicons-wallet font-4 avatar-title text-info"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"
                                                            class="text-body font-weight-semibold">Savings Account</a>
                                                        <small class="d-block">01024499300101</small>
                                                    </td>

                                                    <td class="">
                                                        GHS 90,039.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="avatar-sm rounded bg-soft-info">
                                                            <i class="dripicons-wallet font-4 avatar-title text-info"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"
                                                            class="text-body font-weight-semibold">Savings Account</a>
                                                        <small class="d-block">01024499300101</small>
                                                    </td>

                                                    <td class="">
                                                        GHS 90,039.00
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div> <!-- end .border-->

                            </div>
                            <br><br>
                            <div class="  " id="">



                                <div class="border mt-0 rounded">
                                    <h4 class="header-title p-2 mb-0 text-danger">I OWE</h4>

                                    <div class="table-responsive" style="height: 275px;">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="avatar-sm rounded bg-soft-danger">
                                                            <i class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"
                                                            class="text-body font-weight-semibold">Savings Account</a>
                                                        <small class="d-block">01024499300101</small>
                                                    </td>

                                                    <td class="">
                                                        GHS 90,039.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="avatar-sm rounded bg-soft-danger">
                                                            <i class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="ecommerce-product-detail.html"
                                                            class="text-body font-weight-semibold">Red Hoodie for men</a>
                                                        <small class="d-block">01024499300101</small>
                                                    </td>
                                                    <td class="">
                                                        USD 5,700.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="avatar-sm rounded bg-soft-danger">
                                                            <i class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="ecommerce-product-detail.html"
                                                            class="text-body font-weight-semibold">Designer Awesome T-Shirt</a>
                                                        <small class="d-block">01024499300101</small>
                                                    </td>
                                                    <td class="">
                                                        SLL 888.00
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div> <!-- end .border-->


                            </div>

                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
            </div> <!-- end col-->


            <div class="col-md-7 col-xl-7">
                <h5 class="page-title">QUICK TRANSACTIONS</h5>
                <div class="row">

                    <div class="col-md-6 col-xl-6">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-4">
                                    <div class="avatar-md rounded-circle bg-soft-info border-info border">
                                        <i class="fe-smartphone font-20 avatar-title text-info"></i>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="text-right">
                                        <h3 class="mt-1"><span >&nbsp; Mobile Money</span></h3>
                                        {{--  <p class="text-muted mb-1 text-truncate">Total Revenue</p>  --}}
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div>

                <div class="col-md-6 col-xl-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-md rounded-circle bg-soft-primary border-primary border">
                                    <i class="fe-log-out font-20 avatar-title text-primary"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="mt-1"><span >Funds Transactions</span></h3>
                                    {{--  <p class="text-muted mb-1 text-truncate">Todays Sales</p>  --}}
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-md rounded-circle bg-soft-info border-info border">
                                    <i class="fe-send font-20 avatar-title text-info"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                   <h3 class="mt-1"><span > &nbsp; All Payments</span></h3>
                                    {{--  <p class="text-muted mb-1 text-truncate">Conversion</p>  --}}
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-6">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-md rounded-circle bg-soft-primary border-primary border">
                                    <i class="fe-rss font-20 avatar-title text-primary"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="mt-3"><span > &nbsp;&nbsp; Cardless</span></h3>
                                    {{--  <p class="text-muted mb-1 text-truncate">Todays Visits</p>  --}}
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>



            </div> <!-- end col-->
            </div>



        </div>
        <!-- end row-->




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
                    label: 'MY ACCOUNTS',
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
            {{-- options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            } --}}
        });

    </script>



    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>



@endsection
