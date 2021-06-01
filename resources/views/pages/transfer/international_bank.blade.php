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

                        <form action=""></form>
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
