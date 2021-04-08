@extends('layouts.master')

@section('styles')
    <style>

    </style>
@endsection

@section('content')



    <!-- Start Content-->
    <div class="container-fluid card-background-image">
    <legend></legend>
        <!-- start page title -->

        <!-- end page title -->

        <div class="row">

            <div class="col-md-5 col-xl-5">
                <h5 class="page-title">MY ACCOUNTS</h5>
                <div class="widget-rounded-circle card-box">
                    <div class="row">

                        <canvas id="myChart" width="400" height="250"></canvas>

                    </div> <!-- end row-->
                    <h4 class="text-center">TOTAL: GHS 90,000,000.00</h4>
                </div> <!-- end widget-rounded-circle-->

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



            </div>






        </div>
        <!-- end row-->


        <div class=" container-fluid">
            <div class="">
                <div class="row">
                    <div class="col-xl-12">
                        <div id="accordion" class="mb-3">
                            <div class="card mb-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                          <span class="text-primary">  I HAVE</span>
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably havent heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                            <span class="text-danger">  I OWE</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end #accordions-->
                    </div> <!-- end col -->


                </div> <!-- end row -->

            </div>
        </div>


        <div class="row ">


            <div class="card-body col-md-6 col-xl-6 col-sm-6 col-xs-12">

                <div class="card border mt-0 rounded"  >
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




            </div> <!-- end col -->

            <div  class="card-body col-md-6 col-xl-6 col-sm-6 col-xs-12">



                <div class=" card border mt-0 rounded">
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
