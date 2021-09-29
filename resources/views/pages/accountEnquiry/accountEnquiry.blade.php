@extends('layouts.master')
@section('styles')
<style>
    @media print {
        .hide_on_print {
            display: none
        }
    }

    @font-face {
        font-family: 'password';
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
    }

    input.key {
        font-family: 'password';
        width: 300px;
        height: 80px;
        font-size: 100px;
    }

    .table_over_flow {
        overflow-y: hidden;

    }
</style>

@include("extras.datatables")

@endsection

@section('content')

<div>

    @php
    $currentPath = "Account Statement" ;
    $basePath = "Account";
    $pageTitle = "account statement"; @endphp
    @include("snippets.pageHeader")

    <div class="col-12">
        <div class="___class_+?12___">
            <div class="card-body">
                <div class="row" style="zoom: 0.9">
                    <div class="col-md-12">

                        <div class="row card-box div-card  justify-content-md-around" id="transaction_form">

                            <div class="col-md-6 align-self-center">
                                {{-- <p>Select Acount</p> --}}
                                <div class="form-group row ">
                                    <b class="col-md-3 text-primary align-self-center">Select Account :</b>
                                    <select class="form-control col-md-9" id="from_account" required>
                                        <option value="" disabled selected> -- Select Your Account --
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <b class="col-md-3 text-primary align-self-center">Start Date :</b>
                                    <input type="date" id="startDate" class=" col-md-9 form-control ">
                                </div>
                                <div class="form-group row">
                                    <b class="col-md-3 text-primary align-self-center">End Date :</b>
                                    <input type="date" id="endDate" class=" col-md-9 form-control ">
                                </div>
                                <div class="form-group row justify-content-end">
                                    <button class="btn btn-primary mt-1 waves-effect waves-light"
                                        id="search_transaction">Search</button>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="text-bold text-center"> <b>Account Details</b> </h4>
                                    </div>
                                    <div class="col-5">
                                        <h4>Name:&nbsp; </h4>
                                    </div>
                                    <div class="col-7">
                                        <h4>
                                            <b class="account_description"></b>
                                        </h4>
                                    </div>
                                    <div class="col-5">
                                        <h4>Account No:&nbsp; </h4>
                                    </div>
                                    <div class="col-7">
                                        <h4>
                                            <b class="account_number"></b>
                                        </h4>
                                    </div>
                                    <div class="col-5">

                                        <h4>Product:&nbsp; </h4>

                                    </div>
                                    <div class="col-7">
                                        <h4>
                                            <b class="account_product"></b>
                                        </h4>
                                    </div>
                                    <div class="col-5">

                                        <h4>Currency:&nbsp;
                                        </h4>
                                    </div>
                                    <div class="col-7">
                                        <h4>
                                            <b class="account_currency"></b>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="customize_card col-12 div-card" id="transaction_summary">
                        <div class=" p-3 mt-4 mt-lg-0 rounded">
                            <div class="alert alert-secondary" id="account_balance_info_display" role="alert">
                                <div class="row">

                                    <div class="col-md-6">
                                        <h5>Account Number: <strong class="display_account_number"></strong>
                                        </h5>
                                        <h5> Date Range: <strong class="display_search_date_range"></strong>
                                        </h5>
                                    </div>

                                    <div class="col-md-4">
                                        <select class="form-control col-md-8" id="filter" required>

                                            <option value="all" selected> ALL</option>
                                            <option value="credit"> CREDIT </option>
                                            <option value="debit"> DEBIT </option>
                                        </select>

                                        {{-- </div> --}}
                                    </div>

                                    <div class="col-md-2">
                                        <span style="float: right">
                                            &nbsp;&nbsp;
                                            <span id="pdf_print">
                                                <a href="{{ url('print-account-statement') }}">
                                                    <img src="{{ asset('assets/images/pdf.png') }}" alt=""
                                                        style="width: 22px; height: 25px;">
                                                </a>
                                            </span>

                                            &nbsp;&nbsp;&nbsp;
                                        </span>
                                        <span style="float: right">
                                            <span id="excel_print">
                                                <a href="{{ url('print-account-statement') }}">
                                                    <img src="{{ asset('assets/images/excel.png') }}" alt=""
                                                        style="width: 22px; height: 25px;">
                                                </a>
                                            </span>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <table role="table" id="table-view"
                                class="table table-responsive table-bordered table-striped account_transaction_display_table">
                                <thead>

                                    <tr class="bg-primary text-white ">
                                        <th scope="col">Document Ref</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount <span class="account_number_display_"></span>
                                        </th>
                                        <th scope="col">Balance<span class="account_description_display_"></span>
                                        </th>
                                        <th scope="col">Purpose of Transfer <span
                                                class="account_currency_display_"></span>
                                        </th>
                                        <th scope="col">Credit Account</th>
                                        <th scope="col">Transaction ID <span class="___class_+?59___"></span> </th>
                                        <th scope="col">Batch No</th>
                                    </tr>
                                </thead>

                                <tbody role="rowgroup" id="table-body-display">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('scripts')


<script src="{{ asset('assets/js/pages/accounts/datatables.init.js') }}" defer></script>
<script src="{{ asset("assets/js/pages/accounts/accountEnquiry.js") }}"></script>

@endsection