@extends('layouts.master')

@section('styles')
<style>
    .page-item.active .page-link {

        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .table_over_flow {
        overflow-y: hidden;

    }


    .bg-MOM {
        background-color: #dc3545 !important;
    }

    .bg-AIR {
        background-color: #1abc9c !important;
    }

    .bg-UTL {
        background-color: #17a2b8 !important;
    }

    .bg-EDU {
        background-color: #c122e0 !important;
    }

    .bg-GVT {
        background-color: #e08926 !important;
    }

    .current-type .box-circle {
        background-color: white !important;
    }

    .current-type .beneficiary-text {
        font-weight: bold !important;
        color: white !important;
    }

    .beneficiary-text {
        color: rgb(216, 216, 216)
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
        width: 150px;
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

    .payment_icon {
        height: 25px;
        width: 40px;
        border-radius: 3px;
        margin-right: 1rem;
    }
</style>

@endsection

@section('content')

@php
$pageTitle = "payment BENEFICIARY";
$basePath = "payment";
$currentPath = "payment Beneficiary";
@endphp
@include("snippets.pageHeader")

<div class="p-3">
    <div class="site-card ">
        <div class="row">
            <div class="col-md-3">
                <h2 class="font-17 text-left font-weight-bold text-capitalize mb-3 text-primary">select Beneficiary type
                </h2>
                <div class="row mb-4 justify-content-center mx-auto" style="max-width: 750px;">
                    <div class="col-12 mb-2 mx-2 mx-lg-3  beneficiary-type current-type display-card bg-MOM"
                        data-value="MOM" data-title="Mobile Money" id=''>
                        <span class="box-circle"></span>
                        <span class="beneficiary-text" id=''>Mobile Money</span>
                    </div>

                    <div class="col-12 mb-2 mx-2 mx-lg-3 beneficiary-type display-card bg-AIR  " data-value="AIR"
                        data-title="Airtime" id=''>
                        <span class="box-circle"></span>
                        <span class="beneficiary-text" id=''>Airtime</span>
                    </div>
                    <div class="col-12 mb-2 mx-2 mx-lg-3 beneficiary-type display-card bg-UTL " data-value="UTL"
                        data-title="Utility" id=''>
                        <span class="box-circle"></span>
                        <span class="beneficiary-text" id=''>Utility </span>
                    </div>
                    <div class="col-12 mb-2 mx-2 mx-lg-3 beneficiary-type display-card bg-EDU  " data-value="EDU"
                        data-title="Education" id=''>
                        <span class="box-circle"></span>
                        <span class="beneficiary-text" id=''>Education </span>
                    </div>
                    <div class="col-12 mb-2 mx-2 mx-lg-3 beneficiary-type display-card bg-GVT  " data-value="GVT"
                        data-title="Government tax" id=''>
                        <span class="box-circle"></span>
                        <span class="beneficiary-text" id=''>Government tax </span>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-md-9">

                <div class="row justify-content-center">
                    <h3 class="font-15 text-capitalize text-center mx-3 font-weight-bold align-self-center my-auto"><i
                            class="font-18 text-info mx-2 fa fa-user-friends"></i><span
                            id="beneficiary_type_title">Mobile Money
                        </span>Beneficiaries</h3>
                    <button type="button" class="btn px-3 btn-sm font-14 font-weight-bold btn-info btn-rounded"
                        id="add_beneficiary"><i class="pr-2 fa fa-user-plus"></i>Add</button>
                </div>

                <div class="p-3 mt-3 rounded-lg m-2 customize_card table-responsive" id="transaction_summary">
                    <table id="beneficiary_list"
                        class="table table-hover table-centered w-100 mb-0 beneficiary_list_display">
                        <thead>
                            <tr class="bg-info text-white">
                                <th> <b> Name </b> </th>
                                <th> <b> Account </b> </th>
                                <th> <b> Sub Type </b> </th>
                                {{-- <th> <b> Beneficiary Bank </b> </th> --}}
                                <th class="text-center"> <b>Actions </b> </th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div> <!-- end card body-->
        </div>
        {{-- <div class="col-md-1"></div> --}}
    </div> <!-- end card-body -->
</div> <!-- end col -->


@include("pages.payments.payment_beneficiary_form_modal")

@endsection

@section('scripts')
@include("extras.datatables")
<script>
    const noDataAvailable =   {!! json_encode($noDataAvailable) !!}
</script>
<script src="{{ asset("assets/js/pages/payments/paymentBeneficiaryList.js") }}">
</script>
@endsection