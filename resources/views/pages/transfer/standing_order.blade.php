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

        /* ... the rest of the rules ... */
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
<div class="___class_+?0___">

    @php
    $pageTitle = "standing order";
    $basePath = "Transfer";
    $currentPath = "Standing Order";
    @endphp
    @include("snippets.pageHeader")
    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        @include("snippets.receipt")
                        @include("snippets.pinCodeModal") <div class="form_process">
                            <div class="row">
                                @include('snippets.transactionSummary')

                                <div class="col-md-7 site-card m-2" id="transaction_form">
                                    <br>
                                    <form action="#" id="payment_details_form" autocomplete="off"
                                        aria-autocomplete="none">
                                        @csrf
                                        <div class="row container">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">

                                                <div class="form-group">
                                                    <b class="text-primary">Account from which transfered will be
                                                        made<span class="text-danger">*</span></b>

                                                    <select class="custom-select" id="from_account" required>
                                                        <option disabled selected value="">--Select Account--
                                                        </option>
                                                        @include("snippets.accounts")
                                                    </select>


                                                </div>
                                                <hr>


                                                <div class="form-group row select_saved_beneficiary">

                                                    <b class="col-md-4 text-primary">Beneficiary &nbsp; <span
                                                            class="text-danger">*</span></b>


                                                    <select class="form-control col-md-8" id="saved_beneficiary"
                                                        placeholder="Select Pick Up Branch" required>
                                                        <option disabled selected value="">--- Select Saved
                                                            Beneficiary ---</option>
                                                    </select>
                                                    <br>

                                                </div>

                                                <div class="form-group row">
                                                    <b class="col-md-4 text-primary"> Beneficiary A/C Number</b>
                                                    <input type="text" class="form-control col-md-8 readOnly"
                                                        id="saved_account_number" readonly>
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

                                                <hr>

                                                <div id="saved_beneficiary_form">


                                                    <div class="form-group row">

                                                        <b class="col-4 text-primary"> Amount &nbsp; <span
                                                                class="text-danger">*</span></b>

                                                        <div class="col-2">
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-prepend"
                                                                    style="margin-right:-1px;">
                                                                    <div
                                                                        class="input-group-text display_from_account_currency">
                                                                        CUR</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="text" class="form-control col-6" id="amount"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                            required>


                                                    </div>


                                                    <div class="form-group row mb-3">
                                                        <b class=" col-md-4 text-primary">Start Date &nbsp; <span
                                                                class="text-danger">*</span></b>


                                                        <input type="date" class="form-control col-md-8"
                                                            min="01-01-1997" max="31-12-2030" id="so_start_date"
                                                            required>


                                                    </div>

                                                    <div class="form-group row mb-3">
                                                        <b class=" col-md-4 text-primary">End Date</b>

                                                        <input type="date" class="form-control col-md-8"
                                                            id="so_end_date" required>


                                                    </div>

                                                    <div class="form-group row">

                                                        <b class="col-md-4 text-primary">Frequency &nbsp; <span
                                                                class="text-danger">*</span></b>


                                                        <select class="form-control col-md-8 so_frequency"
                                                            id="beneficiary_frequency"
                                                            placeholder="Select Pick Up Branch" required>
                                                            <option disabled selected value="">--Select Frequency--
                                                            </option>
                                                        </select>

                                                    </div>


                                                    <div class="form-group row mb-3">
                                                        <b class="col-md-4 text-primary ">Purpose of Transfer &nbsp;
                                                            <span class="text-danger">*</span></b>

                                                        <input type="text" class="form-control col-md-8" id="purpose"
                                                            placeholder="Standing Order Transfer Purpose" required>

                                                    </div>

                                                </div>

                                                <div class="form-group text-right">
                                                    <button class="btn btn-primary btn-rounded" type="submit"
                                                        id="next_button">
                                                        &nbsp; Next &nbsp; <i class="fe-arrow-right"></i></button>
                                                </div>


                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                        <hr>
                                    </form>
                                </div>



                                {{-- </div> --}}

                                <div class="col-md-4 site-card m-2" id="related_information_display">{{-- style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                <br><br> --}} {{-- <div class=" col-md-12 card card-body ach_transfer_summary"> --}}
                                    {{-- <br><br> --}}
                                    <h4 class="text-primary mt-3">Sender Acc. Info</h4>
                                    <hr class="mt-0 mb-1">

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



                                    <h4 class="text-primary mt-3">Recipient Acc. Info</h4>
                                    <hr class="mt-0 mb-1">
                                    <div class="row">
                                        <h6 class="col-md-5">Account Name:</h6>
                                        <h6 class="text-primary display_to_account_name col-md-7"></h6>

                                        <h6 class="col-md-5">Account Number:</h6>
                                        <h6 class="text-primary display_to_account_no col-md-7"></h6>

                                        <h6 class="col-md-5">Start Date:</h6>
                                        <h6 class="text-primary display_so_start_date col-md-7"></h6>

                                        <h6 class="col-md-5">End Date:</h6>
                                        <h6 class="text-primary display_so_end_date col-md-7"></h6>

                                        <h6 class="col-md-5">Frequency:</h6>
                                        <h6 class="text-primary display_frequency_so col-md-7"></h6>
                                        {{-- <h6 class="col-md-5">Account Currency:</h6>
                                            <h6 class="text-primary display_to_account_currency col-md-7"></h6> --}}

                                        {{-- <h6 class="col-md-5">Account Currency:</h6>
                                            <h6 class="text-primary display_to_account_currency col-md-7"></h6> --}}
                                    </div>
                                    <br>
                                    {{-- <button type="button"
                                            class="btn btn-warning btn-xs waves-effect waves-light beneficiary_details col-md-3 text-primary"
                                            data-toggle="modal" data-target="#standard-modal">
                                            More Info</button> --}}
                                    <hr style="margin-top: 2px; margin-bottom: 5px; ">

                                    <div class="row">
                                        <h6 class="text-primary col-md-5">Transfer Amount:</h6>
                                        <h6 class="text-danger text-bold col-md-7 ">
                                            <span class="display_currency"></span>
                                            &nbsp;
                                            <span class="display_transfer_amount"></span>
                                        </h6>
                                    </div>

                                    {{-- </div> --}}

                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-2"></div> --}}

                </div> <!-- end card-body -->

            </div> <!-- end col -->

        </div> <!-- end row -->



    </div>

    {{-- 
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
    <script src="{{ asset('assets/js/pages/transfer/standingOrder.js') }}">
    </script>
    @endsection