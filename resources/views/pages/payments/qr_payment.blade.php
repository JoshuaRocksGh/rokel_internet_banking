@extends('layouts.master')

@section("styles")
<style>
    .subHeader {
        padding: 0.825rem;
        font-size: 1rem;
        font-weight: 600;
        background-color: #037dc2;
        color: white;
        margin-bottom: 2rem;
        border-radius: 0.5rem;
    }

    #qr_image_div {
        animation: slide-right 300ms ease-out;
    }
</style>
@endsection
@section('content')
@php
$pageTitle = "Generate QR";
$currentPath = "Generate QR";
$basePath = "Payment"
@endphp
@include("snippets.pageHeader")
<div class="m-4 site-card row">
    <div class="col-md-7" id="qr_form">
        <h2 class="subHeader">QR Content</h2>
        <form role="form" class="container">
            <div>
                <ul class="nav w-100 active nav-fill nav-pills" id="onetime_bene_tab" role="tablist">
                    <li class="nav-item w-50" role="presentation" style="position: absolute">
                        <button class="switch w-100  nav-link active" id="beneficiary_tab" data-toggle="pill"
                            href="#beneficiary_view" type="button" role="tab" aria-controls="beneficiary_view"
                            aria-selected="false">
                            Recieve Payment</button>
                    </li>
                    <li class="nav-item w-50" role="presentation">
                        <button class=" switch leftbtn w-100 nav-link " id="onetime_tab" data-toggle="pill"
                            href="#onetime_view" type="button" role="tab" aria-controls="onetime_view"
                            aria-selected="true">
                            <div class="switch-text">Cash in</div>
                        </button>
                    </li>

                </ul>
            </div>
            <div class="form-group mt-3 row">
                <label for="accounts" class="text-primary col-form-label col-md-4">Select Account
                </label>
                <select class="form-control col-md-8" id="accounts">
                    <option selected disabled value="">Select Account</option>
                    @include("snippets.accounts")
                </select>
            </div>

            <div class="form-group row">
                <label for="pin" class="col-4 col-form-label text-primary">
                    Enter Amount </label>
                <input type="text" class="form-control col-8" placeholder="Enter a fixed amount to receive" id="amount"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
            </div>

            <div class="form-group row float-right mt-2">
                <button type="button" class="btn btn-primary btn-rounded" id="generate_qr">
                    Generate QR Photo
                </button>
            </div>
        </form>
    </div>

    <div class="col-md-5 text-center" id="qr_image_div">
        <h2 class="subHeader">QR Image</h2>
        <p id="qrcode"> </p>
    </div> <!-- end col -->
</div>
@endsection

@section("scripts")
<script src="assets/plugins/easy-qr-code-js/easy.qrcode.min.js" defer></script>
<script src="assets/js/pages/payments/qr_payment.js"></script>
@endsection