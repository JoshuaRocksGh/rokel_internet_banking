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
                {{-- @include("snippets.receipt") --}}
                @include("snippets.pinCodeModal")

                <div class="form_process">

                    <div class="row">
                        @include('snippets.transactionSummary')
                        @include('snippets.transfer.same_bank')
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