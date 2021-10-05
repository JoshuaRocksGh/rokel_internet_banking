@extends('layouts.master')

@section('styles')

<style>
    .display-card {
        height: 5.5rem
    }

    table {
        font-size: 0.78rem;
        /* width: 100%; */
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
            <marquee behavior="" direction="left" id="fx_rate_marquee" style="display: flex">

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
                            <div class="table-responsive table-bordered my_investment_display_area">
                                <table id="fixed_deposit_list" class="table mb-0 ">
                                    <thead>
                                        <tr class="bg-info text-white ">
                                            <td> <b> Account No </b> </td>
                                            <td> <b> Deal Amount </b> </td>
                                            <td> <b> Tunure </b> </td>
                                            <td> <b> FixedInterestRate </b> </td>
                                            <td> <b> Rollover </b> </td>

                                        </tr>
                                    </thead>
                                    <tbody id="fixed_deposit_list_body">
                                        <td colspan="100%" class="text-center">
                                            {{-- global noDataAvailable image variable shared with all views --}}
                                            {!! $noDataAvailable !!}
                                        </td>

                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->

                            </p>

                        </div>

                        <div class="tab-pane" id="messages">
                            <div class="table-responsive table-bordered loans_display_area">
                                <table id="loans_list" class="table mb-0 ">
                                    <thead>
                                        <tr class="bg-info text-white ">
                                            <td> <b> Facility No </b> </td>
                                            <td> <b> Description </b> </td>
                                            <td> <b> Currency </b> </td>
                                            <td> <b> Amount Granted </b> </td>
                                            <td> <b> Loan Balance </b> </td>

                                        </tr>
                                    </thead>
                                    <tbody id="loans_list_body">
                                        <td colspan="100%" class="text-center">
                                            {{-- global noDataAvailable image variable shared with all views --}}
                                            {!! $noDataAvailable !!}
                                        </td>

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
                <div class="border mt-0 site-card dashboard-table rounded p-2">
                    <div class="container-fluid">
                        <div class="row">
                            <a class="col-md-4" href="{{ url('account-enquiry') }}">
                                <h4 class="header-title p-2 mb-0 text-primary  " style="font-weight: bolder">
                                    Latest
                                    Transactions </h4>
                            </a>

                            <div class="col-md-8">
                                <select name="" class="form-control" id="account_transaction">
                                    @foreach($accounts as $i => $account)
                                    <option value={{$account->accountNumber}}>
                                        {{$account->accountDesc ." ~ " .$account->accountNumber}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">



                    </div>

                    <legend></legend>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-centered mb-0" id="transaction_history">
                            <thead>
                                <tr class="bg-info text-white">
                                    <td> <b> Date</b> </td>
                                    <td> <b> Amount </b> </td>
                                    <td> <b> Balance </b> </td>
                                    <td> <b> Description </b> </td>
                                    <td> <b> Account </b> </td>
                                    <td> <b> Transaction ID </b> </td>
                                    <td> <b> Batch Number </b> </td>
                                </tr>
                            </thead>
                            <tbody id="transaction_history_body">

                                <td colspan="100%" class="text-center">
                                    {{-- global noDataAvailable image variable shared with all views --}}
                                    {!! $noDataAvailable !!}
                                </td>

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
                            <img class="d-block w-100" src="{{ asset('assets/images/rokel/sim_korpor_2.jpeg') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/images/rokel/rcb_cashless.jpeg') }}"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('assets/images/rokel/transfer.jpeg') }}"
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
<script>
    let noDataAvailable =   {!! json_encode($noDataAvailable) !!} 
</script>
<script src="{{ asset("assets/js/pages/home/home.js") }}">

</script>



@endsection