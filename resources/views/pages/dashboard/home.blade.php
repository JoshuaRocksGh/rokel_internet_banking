@extends('layouts.master')

@section('styles')

<style>
    .display-card {
        height: 5.5rem
    }

    .dashboard-table {
        min-height: 150px
    }
</style>
@endsection
@include("extras.datatables")
@section('content')

<!-- Start Content-->
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-12">
            <marquee behavior="" direction="">
                <span>
                    <img src="{{ asset('assets/images/flags/EUR.png') }}" class="img-fluid" width='40px' height='20px'
                        style='border-radius:5px;'>
                    /
                    <img src="{{ asset('assets/images/flags/GBP.png') }}" class="img-fluid" width='40px' height='20px'
                        style='border-radius:5px;'>

                    <span> <strong> 9.000 / 1.00</strong> </span>
                </span>

                &nbsp; &nbsp;

                <span>
                    <img src="{{ asset('assets/images/flags/EUR.png') }}" class="img-fluid" width='40px' height='20px'
                        style='border-radius:5px;'>
                    /
                    <img src="{{ asset('assets/images/flags/GBP.png') }}" class="img-fluid" width='40px' height='20px'
                        style='border-radius:5px;'>

                    <span> <strong> 9.000 / 1.00</strong> </span>
                </span>


            </marquee>
            <legend></legend>
        </div>
    </div>


    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url('payment-type') }}">
                    <div class="widget-rounded-circle card-box display-card bg-info"
                        style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-sm rounded-circle bg-white ">
                                    <i class="fe-log-out font-5 avatar-title text-info"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="mt-1 text-white "><span><b>Payments</b></span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('account-enquiry') }}">
                    <div class="widget-rounded-circle card-box  display-card bg-warning"
                        style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-sm rounded-circle bg-white">
                                    <i class="fe-send font-20 avatar-title text-white text-warning"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="mt-1 text-white "><span> &nbsp;<b>Account Enquiry</b> </span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </a>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <div class="widget-rounded-circle card-box display-card custom-color-gold bg-success"
                        style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-sm rounded-circle bg-white">
                                    <i class="fe-rss font-20 avatar-title custom-text-color-gold text-success"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="mt-1 text-white"><span> &nbsp;<b>Transfers</b> </span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('e-korpor') }}">
                    <div class="widget-rounded-circle card-box display-card bg-danger"
                        style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class=" row">
                            <div class="col-4">
                                <div class="avatar-sm rounded-circle bg-white ">
                                    <i class="fe-smartphone text-white font-20 avatar-title text-danger"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="mt-1 text-white"><span>&nbsp;<b>E-Korpor</b> </span></h3>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="card-box dashboard-table"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <strong class="text-success">CURRENT & SAVINGS</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                <strong class="text-warning">INVESTMENTS</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <strong class="text-danger">LOANS</strong>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <p>

                                <div class="table-responsive table-bordered accounts_display_area">
                                    <table id="" class="table mb-0 ">
                                        <thead>
                                            <tr class="bg-info text-white ">
                                                <td> <b> Account No </b> </td>
                                                <td> <b> Description </b> </td>
                                                <td> <b> Product </b> </td>
                                                <td> <b> Currency </b> </td>
                                                <td> <b> Balance </b> </td>
                                            </tr>
                                        </thead>
                                        <tbody class="casa_list_display">
                                            @foreach($accounts as $i => $account)
                                            <tr>
                                                <td> <a
                                                        href="{{ url('account-enquiry?accountNumber='.$account->accountNumber)}}">
                                                        <b class="text-primary">{{$account->accountNumber}}</b> </a>
                                                </td>
                                                <td> <b> {{ $account->accountDesc }} </b> </td>
                                                <td> <b> {{ $account->accountType}} </b> </td>
                                                <td> <b> {{ $account->currency}} </b> </td>
                                                <td> <b> {{ $account->availableBalance}} </b> </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->

                            </p>

                        </div>

                        <div class="tab-pane show " id="profile">

                            <p id="fixed_deposit_account">

                                <div class="table-responsive table-bordered my_investment_display_area">
                                    <table id="" class="table mb-0 ">
                                        <thead>
                                            <tr class="bg-info text-white ">
                                                <td> <b> Account No </b> </td>
                                                <td> <b> Deal Amount </b> </td>
                                                <td> <b> Tunure </b> </td>
                                                <td> <b> FixedInterestRate </b> </td>
                                                <td> <b> Rollover </b> </td>

                                            </tr>
                                        </thead>
                                        <tbody class="fixed_deposit_account">


                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->

                            </p>

                        </div>

                        <div class="tab-pane" id="messages">
                            <p id="p_loans_display">

                                <div class="table-responsive table-bordered loans_display_area">
                                    <table id="" class="table mb-0 ">
                                        <thead>
                                            <tr class="bg-info text-white ">
                                                <td> <b> Facility No </b> </td>
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

                            </p>

                        </div>
                    </div>
                </div> <!-- end card-box-->
                {{-- <br> --}}
                {{-- <div class="card " style="border-radius: 20px;"> --}}
                <div class="border mt-0 dashboard-table rounded p-2"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="container-fluid">
                        <div class="row">
                            <h4 class="header-title p-2 mb-0 text-primary col-md-4 " style="font-weight: bolder">
                                Latest
                                Transactions</h4>

                            <div class="col-md-8">
                                <select name="" class="form-control" id="account_transaction">
                                    {{-- <option value=""> -- Select Account -- </option> --}}
                                    @foreach($accounts as $i => $account)
                                    <option value={{$account->accountNumber}}>
                                        {{$account->accountDesc ." ~ " .$account->accountNumber }}</option>
                                    @endforeach
                                </select> </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">



                    </div>

                    <legend></legend>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <tbody id="transaction_history">


                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div> <!-- end .border-->

                {{-- </div> --}}

            </div>
            <div class="col-md-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('assets/images/ads/sim_korpor_ad_2.jpeg') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/images/ads/rcb_cashless.jpeg') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/images/ads/transfer.jpeg') }}"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
<!-- Plugins js-->
{{-- <script src="{{ asset('assets/js/chart.js') }}"></script> --}}


<!-- Tour page js -->
{{-- <script src="{{ asset('assets/libs/hopscotch/js/hopscotch.min.js') }}"></script> --}}
<!-- Tour init js-->
{{-- <script src="{{ asset('assets/js/pages/tour.init.js') }}"></script> --}}

<!-- Chart JS -->
{{-- <script src="{{ asset('assets/libs/chart.js/Chart.bundle.min.js') }}"></script> --}}

{{-- <script src="{{ asset('assets/libs/moment/min/moment.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/libs/jquery.scrollto/jquery.scrollTo.min.js') }}"></script> --}}

<!-- Chat app -->
{{-- <script src="{{ asset('assets/js/pages/jquery.chat.js') }}"></script> --}}

<!-- Todo app -->
{{-- <script src="{{ asset('assets/js/pages/jquery.todo.js') }}"></script> --}}

<!-- Dashboard init JS -->
{{-- <script src="{{ asset('assets/js/pages/dashboard-3.init.js') }}"></script> --}}

<!-- App js-->
{{-- <script src="{{ asset('assets/js/app.min.js') }}"></script> --}}
{{-- 
<script type="text/javascript">
    var i_have = 0
                var i_owe = 0
                var i_invest_total = 0

                function show_chart(i_have, i_owe, i_invest_total) {

                    console.log(i_have)
                    console.log(i_owe)
                    console.log(i_invest_total)
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ['I HAVE', 'Investments', 'I OWE'],
                            datasets: [{
                                label: 'MY ACCOUNTS',
                                data: [i_have, i_owe, i_invest_total],
                                backgroundColor: [

                                    'rgb(75,192,192)',
                                    'rgba(231, 223, 10, 1)',
                                    'rgb(233,55,93)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [

                                    'rgb(75,192,192)',
                                    'rgba(231, 223, 10, 1)',
                                    'rgb(233,55,93)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },

                    });
                }
</script> --}}

<script src="{{ asset("assets/js/pages/home/home.js") }}">
</script>

{{-- <script src="{{ asset('assets/customjs/currency_converter.js') }}"></script> --}}



{{-- <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('assets/libs/selectize/js/standalone/selectize.min.js') }}"></script> --}}



<!-- third party js -->
{{-- <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    --}}
            {{-- 
</script> --}}

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
{{-- <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script> --}}
<!-- Vendor js -->


@endsection