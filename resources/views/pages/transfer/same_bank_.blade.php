@extends('layouts.master')


@section('styles')

<style>
    @media print {
        .hide_on_print {
            display: none;
        }

        ;
    }

    @page {
        size: A4;

            {
                {
                -- margin: 10px;
                --
            }
        }
    }

    @media print {

        html,
        body {
            width: 210mm;
            height: 297mm;
        }
    }


    @font-face {
        font-family: 'password';
        font-style: normal;
        font-weight: 400;
        src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
    }
</style>


@endsection


@section('content')
@php
$pageTitle = "SAME BANK TRANSFER";
$basePath = "Transfer";
$currentPath ="Same Bank";
@endphp

@include("snippets.pageHeader")

<div class="row">
    <div class="col-12 py-2 px-5">
        <div class="row">
            <div class="col-md-12">

                {{-- RECEIPT --}}
                @include("snippets.receipt")
                @include("snippets.pinCodeModal")

                <div class="form_process">

                    <div class="row">
                        @include('snippets.transactionSummary')

                        {{-- SUMMARY FORM GOES HERE --}}
                        <div class=" col-md-7 site-card m-2" id="transaction_form"> <br>
                            <div class="container">
                                <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="none">
                                    @csrf
                                    <div class="row px-2 justify-content-center">
                                        <div class="col">
                                            <div class=" mb-2 row ">
                                                <b class="col-md-12 text-primary">Account from which the money will
                                                    be
                                                    tansfered &nbsp <span class="text-danger">*</span></b>

                                                <select class="form-control col-md-12" id="from_account" required>
                                                    <option disabled selected value=""> -- Select Account --
                                                    </option>
                                                    @include("snippets.accounts")
                                                </select>

                                            </div>
                                            <hr>

                                            {{-- <input type="text" id="hidden_currency" > --}}
                                            <div class="form-group no_beneficiary" style="display: none">
                                                <div class="alert alert-warning" role="alert">
                                                    <i class="mdi mdi-alert-outline mr-2"></i>
                                                    <strong>No
                                                        beneficiary found
                                                    </strong>

                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="onetime_beneficiary_type" id="onetime_toggle">
                                                        <label class="custom-control-label " for="onetime_toggle">
                                                            <b class="text-primary">Onetime ?</b> </label>
                                                    </div>

                                                </div>

                                                {{-- <div class=""> --}}
                                                <select class="form-control col-md-8 select_beneficiary" id="to_account"
                                                    required>
                                                    <option disabled selected value=""> -- Select
                                                        Beneficiary --</option>
                                                </select>
                                                <div class="col-md-8">
                                                    <span class="badge badge-primary float-right"
                                                        style="cursor: pointer; display:none"><a
                                                            href="{{ url('add-local-bank-beneficiary') }}"
                                                            class="text-white" id="add_beneficiary_badge">Create
                                                            Beneficiary</a>
                                                    </span>

                                                </div>
                                            </div>
                                            <div class="row" id="saved_beneficiary_form">

                                                <div class="col-md-12">

                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary"> Beneficiary A/C
                                                            Number</b>
                                                        <input type="text" class="form-control col-md-8 readOnly"
                                                            id="saved_beneficiary_account_number" readonly>
                                                    </div>

                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary"> Beneficiary Name</b>
                                                        <input type="text" class="form-control col-md-8 readOnly "
                                                            id="saved_beneficiary_name" readonly>
                                                    </div>



                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary"> Beneficiary Email</b>
                                                        <input type="text" class="form-control col-md-8 readOnly"
                                                            id="saved_beneficiary_email" readonly>
                                                    </div>




                                                    <div class="form-group row">

                                                        <b class="col-md-4 text-primary">Actual Amount &nbsp; <span
                                                                class="text-danger">*</span></b>

                                                        <div class="input-group mb-1 col-8" style="padding: 0px;">
                                                            <div class="input-group-prepend">
                                                                <input type="text"
                                                                    class="input-group-text account_currency "
                                                                    style="width: 80px;" readonly>
                                                            </div>

                                                            &nbsp;&nbsp;
                                                            <input type="text" class="form-control " id="amount"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>
                                                        </div>


                                                    </div>

                                                    <div class="form-group row">

                                                        <b class="col-4 text-primary"> Cur / Rate / Amount</b>

                                                        <div class="input-group mb-1 col-8" style="padding: 0px;">
                                                            <div class="input-group-prepend">
                                                                <select name=""
                                                                    class="input-group-text select_conversion_currency"
                                                                    id="conversion_currency">

                                                                </select>
                                                            </div>
                                                            &nbsp;&nbsp;
                                                            <div class="input-group-prepend">
                                                                <input type="text" class="form-control readOnly "
                                                                    id="convertor_rate" value="1.00"
                                                                    style="width: 100px;" readonly>
                                                            </div>
                                                            &nbsp;&nbsp;
                                                            <input type="text" class="form-control"
                                                                id="converted_amount" placeholder="Converted Amount"
                                                                aria-label="converted_amount"
                                                                aria-describedby="basic-addon1" readonly>
                                                        </div>


                                                    </div>


                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary">Purpose of Transfer
                                                            <span class="text-danger">*</span>
                                                        </b>

                                                        <input type="text" class="form-control col-md-8" id="purpose"
                                                            placeholder="Enter purpose of transaction"
                                                            class="form-group row mb-3">


                                                    </div>



                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary">Expense Category &nbsp;
                                                        </b>
                                                        <input type="hidden" value="Others" id="category_">


                                                        <select class="form-control col-md-8" id="category" required>
                                                            <option disabled selected value="">-- Select expense
                                                                category --
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" row form-group" id="onetime_beneficiary_form"
                                                style="display: none">
                                                <div class="col-md-12">

                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary"> Beneficiary A/C
                                                            Number</b>
                                                        <input type="text" class="form-control col-md-8 "
                                                            id="onetime_account_number"
                                                            placeholder="Enter Account Number"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                    </div>

                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary"> Beneficiary A/C Name</b>
                                                        <input type="text" class="form-control col-md-8 readOnly"
                                                            id="onetime_beneficiary_name" readonly>
                                                    </div>



                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary"> Beneficiary Email</b>
                                                        <input type="text" class="form-control col-md-8 "
                                                            id="onetime_beneficiary_email"
                                                            placeholder="Enter Beneficiary Email">
                                                    </div>




                                                    <div class="form-group row">

                                                        <b class="col-md-4 text-primary">Actual Amount &nbsp; <span
                                                                class="text-danger">*</span></b>

                                                        <div class="input-group mb-3 col-8" style="padding: 0px;">
                                                            <div class="input-group-prepend">
                                                                <input type="text"
                                                                    class="input-group-text account_currency"
                                                                    style="width: 80px;" readonly>
                                                            </div>

                                                            &nbsp;&nbsp;
                                                            <input type="text" class="form-control " id="onetime_amount"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>
                                                        </div>


                                                    </div>

                                                    <div class="form-group row">

                                                        <b class="col-4 text-primary"> Cur / Rate / Amount</b>

                                                        <div class="input-group mb-3 col-8" style="padding: 0px;">
                                                            <div class="input-group-prepend">
                                                                <select name=""
                                                                    class="input-group-text select_conversion_currency"
                                                                    id="onetime_conversion_currency">
                                                                </select>
                                                            </div>
                                                            &nbsp;&nbsp;
                                                            <div class="input-group-prepend">
                                                                <input type="text" class="form-control display_midrate"
                                                                    id="onetime_convertor_rate" value="1.00"
                                                                    style="width: 100px;" readonly>
                                                            </div>
                                                            &nbsp;&nbsp;
                                                            <input type="text"
                                                                class="form-control  display_converted_amount"
                                                                id="onetime_converted_amount"
                                                                placeholder="Converted Amount"
                                                                aria-label="Converted Amount"
                                                                aria-describedby="basic-addon1" readonly>
                                                        </div>


                                                    </div>
                                                    <div class="form-group row mb-3">
                                                        <b class="col-md-4 text-primary">Purpose of Transfer
                                                            &nbsp; <span class="text-danger">*</span>
                                                        </b>

                                                        <input type="text" class="form-control col-md-8"
                                                            id="onetime_purpose"
                                                            placeholder="Enter purpose of transaction">

                                                    </div>


                                                    <div class="form-group row">
                                                        <b class="col-md-4 text-primary">Expense Category &nbsp;
                                                        </b>


                                                        <select class="form-control col-md-8" id="onetime_category"
                                                            required>
                                                            <option value="" disabled selected>---Select expense
                                                                category---
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <legend></legend>

                                            <div class="form-group text-right yes_beneficiary">
                                                <button class="btn btn-primary btn-rounded" type="button"
                                                    id="next_button">
                                                    &nbsp; Next &nbsp;<i class="fe-arrow-right"></i></button>
                                            </div>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        {{-- RIGHT CARD --}}

                        <div class="col-md-4 m-2 site-card">
                            <h4 class="text-primary">Sender Acc. Info</h4>
                            <hr class="mt-0">
                            <div class="row ">
                                <p class="col-md-5">Sender Name:</p>
                                <span class="text-primary display_from_account_name col-md-7"></span>

                                <p class="col-md-5">Sender Account:</p>
                                <span class="text-primary display_from_account_no col-md-7"></span>

                                <p class="col-md-5">Available Balance:</p>
                                <span class="text-primary display_from_account_amount col-md-7"></span>

                                <p class="col-md-5">Account Currency:</p>
                                <span class="text-primary display_from_account_currency col-md-7"></span>
                            </div>

                            <h4 class="text-primary">Receiver Acc. Info</h4>
                            <hr class="mt-0">
                            <div class="row">
                                <p class="col-md-5">Receiver Name:</p>
                                <span class="text-primary display_to_account_name col-md-7"></span>

                                <p class="col-md-5">Receiver Account:</p>
                                <span class="text-primary display_to_account_no col-md-7"></span>

                                <p class="col-md-5">Account Currency:</p>
                                <span class="text-primary display_to_account_currency col-md-7"></span>
                            </div>

                            <hr>
                            <div class="row">
                                <p class="col-md-5 mt-2 text-primary">Transfer Amount:</p>
                                <h4 class="row col-md-7">
                                    <span class="text-danger display_transfer_currency col-md-4"></span>
                                    <span class="text-danger display_amount col-md-8"></span>

                                </h4>

                                <p class="col-md-5">Currency Rate:</p>
                                <span class="text-primary display_midrate col-md-7"></span>

                                <p class="col-md-5">Converted Amount:</p>
                                <span class="text-primary display_converted_amount col-md-7"></span>
                            </div>
                            <br>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>

    </div>
    @endsection


    @section('scripts')
    <script src="{{ asset('assets/js/functions/validateEmail.js') }}"></script>
    <script src="{{ asset('assets/js/functions/currencyConverter.js') }}"></script>
    <script src="{{ asset('assets/js/pages/transfer/sameBank.js') }}"></script>

    @endsection