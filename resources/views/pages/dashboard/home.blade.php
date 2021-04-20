@extends('layouts.master')

@section('styles')

<!-- third party css -->
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<!-- third party css end -->
    <style>

    </style>
@endsection

@section('content')



    <!-- Start Content-->
    <div class="container-fluid ">
    <legend></legend>
        <!-- start page title -->

        <!-- end page title -->

        <div class="row">

            <div class="col-md-5 col-xl-5">
                <h5 class="page-title">MY ACCOUNTS </h5>
                <div class="widget-rounded-circle card-box">
                    <div class="row">

                        <canvas id="myChart" width="400" height="250"></canvas>

                    </div> <!-- end row-->
                    <h4 class="text-center">TOTAL: GHS 90,000,000.00</h4>
                </div> <!-- end widget-rounded-circle-->

            </div> <!-- end col-->


            <div class="col-md-7 col-xl-7">
                <h5 class="page-title element">QUICK TRANSACTIONS</h5>
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
                                        <h3 class="mt-1" id="mobile-money"><span >&nbsp; Mobile Money</span></h3>
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
                    <div class="col-xl-12" style="zoom:0.8;">
                        <div id="accordion" class="mb-3">
                            <div class="card mb-1">
                                <a class="text-dark" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                <div class="card-header" id="headingOne">
                                    <h5 class="m-0">

                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                          <span class="text-primary"> <b>  I HAVE  ( Currenct & Savings) </b></span>

                                    </h5>
                                </div>
                            </a>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">

                                            <div class="table-responsive table-bordered">
                                                <table id="" class="table mb-0 ">
                                                    <thead>
                                                        <tr class="bg-secondary text-white ">
                                                            <td> <b> Account Number </b> </td>
                                                            <td> <b> Account Description </b> </td>
                                                            <td> <b> Product </b> </td>
                                                            <td> <b> Currency </b> </td>
                                                            <td> <b> Available Balance </b> </td>
                                                            <td> <b> Ledger Balance </b> </td>
                                                            <td> <b> Overdrawn Limit </b> </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="casa_list_display">


                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->


                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <a class="text-dark" data-toggle="collapse " href="#collapseTwo" aria-expanded="true">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="m-0">

                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                            <span class="text-danger"> <b>I OWE (Loans)</b> </span>

                                    </h5>
                                </div>
                            </a>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="table-responsive table-bordered">
                                            <table id="datatable-buttons" class="table mb-0">
                                                <thead>
                                                    <tr class="bg-secondary text-white ">
                                                        <td> <b> Facility Number </b> </td>
                                                        <td> <b> Description </b> </td>
                                                        <td> <b> Currency </b> </td>
                                                        <td> <b> Amount Granted </b> </td>
                                                        <td> <b> Loan Balance </b> </td>
                                                    </tr>
                                                </thead>
                                                <tbody class="loans_display">

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->

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



        // Start the tour - note, no call to .init() is required
        // tour.start();

    </script>



    <script>

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['I HAVE', 'I OWE'],
                datasets: [{
                    label: 'MY ACCOUNTS',
                    data: [19, 12],
                    backgroundColor: [

                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [

                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
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

        {{-- function get_accounts() {
            $.ajax({
                'type': 'GET',
                'url': 'get-accounts-api',
                "datatype": "application/json",
                success: function(response) {
                    console.log(response.data);
                    let data = response.data
                    $.each(data, function(index) {

                        $('#security_questions').append($('<option>', {
                            value: data[index].Q_CODE
                        }).text(data[index].Q_DESCRIPTION));

                    });

                },

            })
        }; --}}


        function get_accounts(){

            $.ajax({
                "type": "GET",
                "url" : "get-accounts-api",
                "datatype" : "application/json",

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:
                function(response){
                    console.log(response);
                    if(response.responseCode == '000'){

                        let data = response.data;



                        $.each(data, function(index) {
                            $('.casa_list_display').append(`<tr>
                                <td>  <a href="{{ url('account-enquiry?accountNumber=${data[index].accountNumber}') }}"> <b class="text-primary">${data[index].accountNumber} </b> </a></td>
                                <td> <b> ${data[index].accountDesc} </b>  </td>
                                <td> <b> ${data[index].accountType}  </b>  </td>
                                <td> <b> ${data[index].currency}  </b>  </td>
                                <td> <b> ${data[index].availableBalance}   </b> </b></td>
                                <td> <b> ${data[index].ledgerBalance}   </b>  </td>
                                <td>  <b> 0.00  </b> </td>
                            </tr>`)

                        })



                    }else{

                    }

                }
            })
        }




        function get_loans(){

            $.ajax({
                "type": "GET",
                "url" : "get-loan-accounts-api",
                "datatype" : "application/json",

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:
                function(response){
                    console.log(response);
                    if(response.responseCode == '000'){

                        let data = response.data;



                        $.each(data, function(index) {
                            $('.loans_display').append(`
                            <tr>
                                <td>  <a href="{{ url('account-enquiry?accountNumber=${data[index].facilityNo}') }}"> <b class="text-danger">${data[index].facilityNo} </b> </a></td>
                                <td> <b> ${data[index].description} </b>  </td>
                                <td> <b> ${data[index].isoCode}  </b>  </td>
                                <td> <b> ${data[index].amountGranted}   </b> </b></td>
                                <td> <b> ${data[index].loanBalance}   </b>  </td>
                            </tr>`)

                        })



                    }else{

                    }

                }
            })
        }



        function get_fx_rate(rate_type){

            $.ajax({
                "type": "GET",
                "url" : "get-fx-rate-api?rateType=" + rate_type,
                "datatype" : "application/json",

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:
                function(response){
                    console.log(response);
                    if(response.responseCode == '000'){

                        let data = response.data;


{{--
                        $.each(data, function(index) {
                            $('.casa_list_display').append(`<tr>
                                <td>  <a href="{{ url('account-enquiry?accountNumber=${data[index].accountNumber}') }}"> <b class="text-primary">${data[index].accountNumber} </b> </a></td>
                                <td> <b> ${data[index].accountDesc} </b>  </td>
                                <td> <b> ${data[index].accountType}  </b>  </td>
                                <td> <b> ${data[index].currency}  </b>  </td>
                                <td> <b> ${data[index].availableBalance}   </b> </b></td>
                                <td> <b> ${data[index].ledgerBalance}   </b>  </td>
                                <td>  <b> 0.00  </b> </td>
                            </tr>`)

                        })  --}}



                    }else{

                    }

                }
            })
        }






        $(document).ready(function() {


        var tour = new Tour({
            framework: 'bootstrap4',   // or "bootstrap4" depending on your version of bootstrap
            steps: [
                {
                    element: '#mobile-money',
                    title: 'Title of my step',
                    content: 'Content of my step'
                },
                {
                    element: '#my-other-element',
                    title: 'Title of my step',
                    content: 'Content of my step'
                }
            ]
        });

        tour.init();
         tour.start();

        $('.element').click(function(){
            alert(tour.framework)
});
            console.log('kjhlksdfs')

            setTimeout(function() {
                get_fx_rate("Transfer rate")
                get_fx_rate("Note rate")
                get_fx_rate("Cross rate")
                get_accounts();
                get_loans()
            }, 2000);
        })




    </script>


{{--
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>  --}}



    <!-- third party js -->
    {{--  <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">  --}}
    </script>

    {{-- <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script> --}}
    <!-- third party js ends -->

    <!-- Datatables init -->
    {{--  <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>  --}}


@endsection



@section('scripts')
    <script>

        function get_accounts_() {
            $.ajax({
                'type': 'GET',
                'url': 'get-accounts-api',
                "datatype": "application/json",
                success: function(response) {
                    console.log(response.data);
                    let data = response.data
                    $.each(data, function(index) {

                        $('#security_questions').append($('<option>', {
                            value: data[index].Q_CODE
                        }).text(data[index].Q_DESCRIPTION));

                    });

                },

            })
        };




    </script>


@endsection

