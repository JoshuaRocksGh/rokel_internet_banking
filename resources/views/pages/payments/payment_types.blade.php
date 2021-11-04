@extends('layouts.master')
@section('styles')
{{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"> --}}
<style>
    .payments-text {
        font-size: 0.825rem !important;
        font-weight: bold !important;
    }

    .current-type .box-circle {
        background-color: white !important
    }

    .display-card {
        height: 4rem;
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(5px);
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 0.25rem;
        display: flex !important;
        justify-content: center;
        align-items: center;
        cursor: pointer;

    }

    .box-circle {
        position: absolute;
        top: 5px;
        right: 5px;
        border-radius: 50%;
        height: 0.8rem;
        width: 0.8rem;
        border: solid white 2px;
    }
</style>
<style>
    .tab-pane {
        animation: slide-right 300ms ease-out;
    }

    @keyframes slide-right {
        0% {
            opacity: 0;
            transform: translateX(100%);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    label {
        align-self: center;
        margin-bottom: 0;
        /* font-weight: 400; */
        /* font-size: 1rem */
    }

    input {
        align-self: center !important;
    }

    form-control {
        align-self: center !important;
    }

    .switch-text {
        position: absolute;
        left: 70%;
        transform: translate(-50%, -50%);
    }

    .switch {
        border-radius: 33px !important;
        height: 2rem;
        border: 1px solid #dbdee0 !important;
        font-size: 0.75rem;
        line-height: normal;
        /* left: 2px; */
        background-color: white;
        color: #6c757d;
        animation: fadein 1000ms;
        font-weight: bold
    }

    .switch:hover {
        border-color: #00bdf3 !important
    }

    .switch .leftbtn {
        border-radius: 0 50% 50% 0
    }

    .switch.active {
        background-color: #00bdf3 !important;
        color: white;
    }


    .next-button {
        height: 2rem !important;
        font-size: 0.9rem !important;
        margin-top: 2rem !important;
        line-height: normal !important;
    }
</style>
@endsection
@section('content')
@php
$pageTitle = "payment type";
$basePath = "Payment";
$currentPath = "Make Payment";
@endphp

@include('snippets.pageHeader')

<div class="row">
    <div class="col-12 py-3 px-5">
        <div class="site-card justify-content-center">

            {{-- ============================================= --}}
            {{-- SELECT PAYMENT TYPE --}}
            {{-- ============================================= --}}

            <div class=" mb-1 px-3 row justify-content-center ">
                <div class="col-3 col-lg-4">
                    <label class="mb-2 d-block text-center font-weight-bold text-primary">Select Payment Type</label>
                    <div class="payments-carousel mx-auto" style="max-width: 20rem">
                    </div>
                    <hr class="col-md-8">

                </div>
                <div class="col-9 col-lg-8">
                    {{-- =================================== --}}
                    {{-- Select Account  --}}
                    {{-- =================================== --}}
                    <div class=" mb-1 mx-auto px-5" style="max-width: 45rem">
                        <label class="d-block text-center font-weight-bold mb-1 text-primary"> Select Account To
                            Transfer
                            From</label>

                        <select data-style="" data-style-base="form-control select-control" class="form-control"
                            id="from_account" required>
                            <option disabled selected value=""> --- Select Account ---
                            </option>
                            @include("snippets.accounts")
                        </select>

                        <hr class="">
                        {{-- </div> --}}
                        {{-- <div class="px-5"> --}}
                        <div style="position: relative">
                            <ul class="nav w-100 active nav-fill nav-pills" id="onetime_bene_tab" role="tablist">
                                <li class="nav-item w-50" role="presentation" style="position: absolute">
                                    <button class="switch w-100  nav-link active" id="beneficiary_tab"
                                        data-toggle="pill" href="#beneficiary_view" type="button" role="tab"
                                        aria-controls="beneficiary_view" aria-selected="false">
                                        Beneficiary</button>
                                </li>
                                <li class="nav-item w-50" role="presentation">
                                    <button class=" switch leftbtn w-100 nav-link " id="onetime_tab" data-toggle="pill"
                                        href="#onetime_view" type="button" role="tab" aria-controls="onetime_view"
                                        aria-selected="true">
                                        <div class="switch-text">Onetime</div>
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content mx-2" id="onetime_bene_tabContent">

                            {{-- ============================================= --}}
                            {{-- beneficiary toggle --}}
                            {{-- ============================================= --}}
                            <div class="tab-pane fade  show active" id="beneficiary_view" role="tabpanel"
                                aria-labelledby="beneficiary_tab">
                                <div class="row mb-1">
                                    <label class="text-primary col-md-4 bene_details">Select Beneficiary
                                    </label>
                                    <select data-style="" data-style-base="form-control select-control"
                                        class="form-control text-capitalize col-md-8 bene_details" id="to_account"
                                        required>
                                        <option value="">--- Select Beneficiary ---</option>

                                    </select>
                                </div>
                            </div>
                            {{-- ============================================= --}}
                            {{-- Onetime toggle --}}
                            {{-- ============================================= --}}
                            <div class="tab-pane fade" id="onetime_view" role="tabpanel" aria-labelledby="onetime_tab">
                                <div class="row mb-1 text-capitalize" id="subtype_div" style="display: none">
                                    <label class="text-primary text-capitalize col-md-4 " id="subtype_label">
                                    </label>
                                    <select data-style="" data-style-base="form-control select-control"
                                        class="form-control text-capitalize col-md-8 " id="subtype_select" required>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 text-capitalize text-primary" id="payment_label"></label>
                                    <input type="text" class="form-control text-capitalize col-md-8 "
                                        id="payment_label_input" placeholder="Enter Account Number"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 text-capitalize text-primary">Enter Amount</label>
                                <input type="text" class="form-control text-capitalize col-md-8 " id="amount"
                                    placeholder="Enter Amount To Transfer"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </div>
                        </div>
                        <button
                            class="btn mt-5 font-weight-bold float-right font-11 btn-primary next-button btn-rounded"
                            id="next_button">
                            &nbsp; Proceed &nbsp; <i class="fe-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
</script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js" defer></script>
<script src="{{ asset('assets/js/pages/payments/paymentTypes.js')  }}" @endsection