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


@endsection


@section('content')

<div>

    <div class="container-fluid">
        <br>
        <!-- start page title -->
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-primary">
                    <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                    INTERNATIONAL BANK TRANSFER
                </h4>
            </div>

            <div class="col-md-6 text-right">
                <h6>

                    <span class="flaot-right">
                        <b class="text-primary"> Transfer </b> &nbsp; > &nbsp; <b class="text-danger">International Bank Transfer</b>


                    </span>

                </h6>

            </div>

            <div class="col-md-12 ">
                <hr class="text-primary" style="margin: 0px;">
            </div>

        </div>
    </div>


    <div class="col-12">
        <div class="card-body">
            <div class="row">

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-7 rtgs_card m-2" id="transaction_form"
                        style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                        <br><br><br>

                        <form action="#" class="select_beneficiary" id="payment_details_form" autocomplete="off"
                            aria-autocomplete="none">
                            @csrf
                            <div class="row container">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">

                                    <div class="row mb-2">
                                        <b class="col-md-12 text-primary mb-1">Account from which the money will
                                            be tansfered
                                            &nbsp; <span class="text-danger">*</span> </b>

                                        <select class="form-control" id="from_account" required>
                                            <option value=""> -- Select Your Account --
                                            </option>


                                        </select>


                                    </div>
                                    <hr>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            {{--  <label class="custom-control-label " for="customCheck1"><b class="text-primary">Onetime Transfer </b> </label>
                                            <input type="checkbox" class="custom-control-input"
                                                name="onetime_beneficiary_type" id="customCheck1">  --}}


                                                <div class="form-group mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="checkmeout0" name="onetime_check" value="CHECKED">
                                                        <label class="custom-control-label" for="checkmeout0"><b class="text-primary">Onetime Transfer </b> </label>
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <b class="text-primary col-md-4 bene_details">Beneficiary
                                                    &nbsp;<span class="text-danger">*</span></b>
                                                <select class="form-control col-md-8 bene_details"
                                                    id="to_account" required>
                                                    <option value=""><b>-- Select Beneficiary --</b> </option>
                                                    {{-- <option value="Standard Chartered Bank~Joshua Amarfio~004004110449140121~GHS~800">
                                                Currenct Account ~ 004004110449140121 </option> --}}
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                    <div id="saved_benefciary_form">
                                        <div class="row mb-2">
                                            <b class="text-primary col-md-4">Country</b>
                                            <input class="form-control col-md-8 " type="text"
                                                id="beneficiary_country_name" readonly>
                                        </div>

                                        <div class="row mb-2">
                                            <b class="text-primary col-md-4">Bank Name</b>
                                            <input class="form-control col-md-8 " type="text"
                                                id="beneficiary_bank_name" readonly>
                                        </div>

                                        <div class="row mb-2">
                                            <b class="text-primary col-md-4">Swift Code</b>
                                            <input class="form-control col-md-8 " type="text"
                                                id="beneficiary_swift_code" readonly>
                                        </div>

                                        <div class="row mb-2">
                                            <b class="text-primary col-md-4">Beneficiary Name</b>
                                            <input class="form-control col-md-8 " type="text"
                                                id="beneficiary_account_name" readonly>
                                        </div>

                                        <div class="row mb-2">
                                            <b class="text-primary col-md-4">Beneficiary Address</b>
                                            <input class="form-control col-md-8 " type="text"
                                                id="beneficiary_address" readonly>
                                        </div>

                                        <div class="row mb-2">
                                            <b class="text-primary col-md-4">Beneficiary Email</b>
                                            <input class="form-control col-md-8 " type="text"
                                                id="beneficiary_email" readonly>
                                        </div>

                                        <div class="row mb-2">
                                            <b class="text-primary col-md-4">Beneficiary Telephone</b>
                                            <input class="form-control col-md-8 " type="text"
                                                id="beneficiary_telephone" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>


                        </form>
                        </div>


                        <div class="col-md-4 m-2 rtgs_card_right d-none d-sm-block" id="related_information_display"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                    <br><br>

                                    <div class=" col-md-12 card card-body ach_transfer_summary">
                                        {{-- <br><br> --}}
                                        <div class="row">
                                            <h6 class="col-md-5">Account Description:</h6>
                                            <span class="text-primary display_from_account_name col-md-7"></span>

                                            <h6 class="col-md-5">Account Number:</h6>
                                            <span class="text-primary display_from_account_no col-md-7"></span>

                                            <h6 class="col-md-5">Available Balance:</h6>

                                            <span class="text-primary display_from_account_amount col-md-7"></span>


                                            <h6 class="col-md-5">Account Currency:</h6>
                                            <span class="text-primary display_from_account_currency col-md-7"></span>

                                            {{-- <h6 class="col-md-5">Account Currency:</h6>
                                            <span class="text-primary display_from_account_currency col-md-7"></span> --}}

                                        </div>

                                        <hr>
                                        <div class="row">
                                            <h6 class="col-md-5">Receiver Name:</h6>
                                            <h6 class="text-primary display_to_account_name col-md-7"></h6>

                                            <h6 class="col-md-5">Bank Name:</h6>
                                            <h6 class="text-primary display_to_bank_name col-md-7"></h6>

                                            <h6 class="col-md-5">Receiver Account:</h6>
                                            <h6 class="text-primary display_to_account_no col-md-7"></h6>

                                            <h6 class="col-md-5">Account Currency:</h6>
                                            <h6 class="text-primary display_to_account_currency col-md-7"></h6>
                                        </div>
                                        <br>
                                        {{--  <button type="button"
                                            class="btn btn-warning btn-xs waves-effect waves-light beneficiary_details col-md-3 text-primary"
                                            data-toggle="modal" data-target="#standard-modal">
                                            More Info</button>  --}}
                                        <hr style="margin-top: 2px; margin-bottom: 5px; ">

                                        <div class="row">
                                            <h6 class="text-primary col-md-5">Transfer Amount:</h6>
                                            <h6 class="text-danger text-bold col-md-7 ">
                                                <span class="display_currency"></span>
                                                &nbsp;
                                                <span class="display_transfer_amount"></span>
                                            </h6>
                                        </div>
                                        <hr style="margin-top: 2px; margin-bottom: 5px; ">

                                        <div class="row">
                                            <h6 class="text-primary col-md-5">Transaction Fee:</h6>
                                            {{--  <h6 class="text-danger text-bold col-md-7">0.08% of transfer amount</h6>  --}}
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <h6 class="text-primary col-md-5">Please Note:</h6>
                                            {{--  <h6 class="text-danger col-md-7">ACH Tranfers should be above (SLL
                                                30,000,000.00)</h6>  --}}
                                        </div>


                                    </div>

                                </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
