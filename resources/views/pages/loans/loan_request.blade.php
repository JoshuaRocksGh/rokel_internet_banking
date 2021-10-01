@extends('layouts.master')


@section('content')



<div>
    @php
    $currentPath = "Loan Request" ;
    $basePath = "Loans";
    $pageTitle = "Loan Request"; @endphp
    @include("snippets.pageHeader")

    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class=" col-md-7 m-2" id="request_form_div"
                                style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                <br><br><br>

                                <form action="#" class="select_beneficiary" id="payment_details_form" autocomplete="off"
                                    aria-autocomplete="none">
                                    @csrf
                                    <div class="row container">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">

                                            {{-- <br><br><br> --}}
                                            <div class="row">
                                                {{-- <div class="col-md-1"></div> --}}

                                                <div class="col-md-12">

                                                    <div class="form-group row mb-3">
                                                        <b class="col-4 align-self-center text-primary">Loan Product
                                                            &nbsp; <span class="text-danger">*</span> </b>


                                                        <select class="form-control col-8 " id="loan_product" required>
                                                            <option value="" disabled selected>Select Loan Product
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group row">

                                                        <b class="col-4 align-self-center text-primary"
                                                            for="loan_amount">
                                                            Amount
                                                            <span class="text-danger">*</span></b>

                                                        <div class="px-0 col-2">
                                                            <div class="input-group ">
                                                                <div class="input-group-prepend">
                                                                    {{-- style="margin-right:-1px;"> --}}
                                                                    <div
                                                                        class="input-group-text display_from_account_currency">
                                                                        SLL</div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="text" class="form-control col-6" id="loan_amount"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">


                                                    </div>

                                                    <div class="form-group row">

                                                        <b class="col-4 align-self-center text-primary"
                                                            for="tenure_in_months">
                                                            Tenure In Months
                                                            <span class="text-danger">*</span></b>
                                                        <input type="text" class="form-control col-8"
                                                            id="tenure_in_months" required
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">


                                                    </div>


                                                    <div class="form-group row mb-3" id="pay_from_account">

                                                        <b class="col-4 align-self-center text-primary">Interest Rate
                                                            Type &nbsp;
                                                            <span class="text-danger">*</span></b>

                                                        <select class="form-control col-8" id="interest_rate_type"
                                                            required>
                                                            <option value="" disabled selected>Select Interest Rate Type
                                                            </option>
                                                        </select>

                                                    </div>



                                                    <div class="form-group row">

                                                        <b class="col-4 align-self-center text-primary"> Principal
                                                            Repayment
                                                            &nbsp; <span class="text-danger">*</span></b>


                                                        <select class="form-control col-8 loan_frequencies"
                                                            id="principal_repay_freq"
                                                            placeholder="Select Principal Repay Frequency" required>
                                                            <option value="" disabled selected>Select Principal Repay
                                                                Frequency</option>
                                                        </select>

                                                    </div>

                                                    <div class="form-group row">

                                                        <b class="col-4 align-self-center text-primary"> Interest
                                                            Repayment
                                                            &nbsp; <span class="text-danger">*</span></b>


                                                        <select class="form-control col-8 loan_frequencies"
                                                            id="interest_repay_freq" placeholder="Select Interest Repay
                                                            Frequency" required>


                                                            <option value="" disabled selected>Select Interest Repay
                                                                Frequency</option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group row loan-detail" style="display: none">

                                                        <b class="col-4 align-self-center text-primary"> Intro Source
                                                            &nbsp; <span class="text-danger">*</span></b>


                                                        <select class="form-control col-8" id="loan_intro_source"
                                                            placeholder="Select Where You Heard About The Loan"
                                                            required>
                                                            <option value="" disabled selected>Select Where You
                                                                Heard About The Loan</option>
                                                        </select>

                                                    </div>

                                                    <div class="form-group row loan-detail" style="display: none">

                                                        <b class="col-4 align-self-center text-primary"> Sector
                                                            &nbsp; <span class="text-danger">*</span></b>


                                                        <select class="form-control col-8 " id="loan_sectors"
                                                            placeholder="Select The Sector" required>
                                                            <option value="" disabled selected>Select the sector
                                                            </option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group row loan-sub-sectors-div"
                                                        style="display: none">

                                                        <b class="col-4 align-self-center text-primary">Sub Sector
                                                            &nbsp; <span class="text-danger">*</span></b>


                                                        <select class="form-control col-8 " id="loan_sub_sectors"
                                                            placeholder="Select The Sub Sector" required>
                                                            <option value="" disabled selected>Select the sub
                                                                sector</option>
                                                        </select>
                                                        @include("snippets.loading")

                                                    </div>
                                                    <div class="form-group row loan-detail" style="display: none">

                                                        <b class="col-4 align-self-center text-primary">
                                                            Purpose
                                                            &nbsp; <span class="text-danger">*</span></b>


                                                        <select class="form-control col-8" id="loan_purpose"
                                                            placeholder="Purpose of the loan" required>
                                                            <option value="" disabled selected>Purpose
                                                                of the
                                                                loan
                                                            </option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group row loan-detail" style="display: none">

                                                        <b class="col-4 align-self-center text-primary">
                                                            Product Branch
                                                            &nbsp; <span class="text-danger">*</span></b>


                                                        <select class="form-control col-8" id="product_branch"
                                                            placeholder="Select pick up branch" required>
                                                            <option value="" disabled selected>Select pick up branch
                                                            </option>
                                                        </select>

                                                    </div>
                                                    {{-- <div class="form-group row">

                                                        <b class="col-md-4 align-self-center text-primary"
                                                            for="loan_duration">
                                                            Loan duration
                                                            <span class="text-danger">*</span></b>
                                                        <input type="text" class="form-control col-md-8"
                                                            id="loan_duration"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                        <br>
                                                    </div>
                                                    <div class="form-group row">

                                                        <b class="col-md-4 align-self-center text-primary"
                                                            for="loan_purpose">
                                                            Loan Purpose
                                                            <span class="text-danger">*</span></b>
                                                        <input type="text"
                                                            class="form-control col-md-8 loan_frequencies"
                                                            id="loan_purpose"
                                                            placeholder="Enter the purpose of the loan" required />
                                                    </div> --}}
                                                    <br>
                                                    <div class="form-group text-right yes_beneficiary">
                                                        <button type="button"
                                                            class="btn btn-primary btn-rounded waves-effect waves-light "
                                                            id="btn_loan_request">
                                                            <span class="submit-text">Proceed</span>
                                                            <span
                                                                class="spinner-border spinner-border-sm mr-1 spinner-load"
                                                                role="status" id="spinner" aria-hidden="true"
                                                                style="display: none"></span>
                                                            <span class="spinner-load" id="spinner-text"
                                                                style="display: none">Loading...</span>
                                                        </button>
                                                    </div>
                                                    {{-- <div class="form-group text-right yes_beneficiary loan-detail"
                                                        style="display:none">
                                                        <button type="button"
                                                            class="btn btn-primary btn-rounded waves-effect waves-light"
                                                            id="btn_submit_loan_request">
                                                            <span class="submit-text">Proceed</span>
                                                            <span
                                                                class="spinner-border spinner-border-sm mr-1 load-detail-submit-load"
                                                                role="status" id="spinner1" aria-hidden="true"
                                                                style="display: none"></span>
                                                            <span id="spinner-text1"
                                                                style="display: none">Loading...</span>
                                                        </button>
                                                    </div> --}}
                                                </div>
                                                {{-- <div class="col-md-1"></div> --}}
                                            </div>

                                        </div>
                                        <div class="col-md-1"></div>

                                    </div>
                                    <br><br><br>

                                </form>


                            </div> <!-- end col -->

                            <div class="col-md-4 m-2" id="atm_request_summary"
                                style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                <br><br><br>
                                <div class="card card-body">
                                    {{-- <br><br> --}}
                                    <div class="row">
                                        <h6 class="col-md-12 success-message"></h6>
                                        <h6 class="col-md-6">Loan Product:</h6>
                                        <h6 class="text-primary display_loan_product col-md-6"></h6>
                                        <br> <br>
                                        <h6 class="col-md-6">Amount(SLL):</h6>
                                        <h6 class="text-primary display_loan_amount col-md-6"></h6>

                                        <h6 class="col-md-6">Tenure In Months:</h6>
                                        <h6 class="text-primary display_tenure_in_months col-md-6"></h6>

                                        <h6 class="col-md-6">Interest Rate Type:</h6>
                                        <h6 class="text-primary display_interest_rate_type col-md-6"></h6>

                                        <h6 class="col-md-6">Principal Repay Frequency:</h6>
                                        <h6 class="text-primary display_principal_repay_freq col-md-6"></h6>

                                        <h6 class="col-md-6">Interest Repay Frequency:</h6>
                                        <h6 class="text-primary display_interest_repay_freq col-md-6"></h6>
                                        <h6 class="col-md-6 loan-detail" style="display: none">Intro Source:</h6>
                                        <h6 class="text-primary loan-detail display_loan_intro_source col-md-6"
                                            style="display: none"></h6>
                                        <h6 class="col-md-6 loan-detail" style="display: none">Sector:</h6>
                                        <h6 class="text-primary loan-detail display_loan_sectors col-md-6"
                                            style="display: none"></h6>
                                        <h6 class="col-md-6 loan-sub-sectors-div" style="display: none">Sub Sector:</h6>
                                        <h6 class="text-primary loan-sub-sectors-div display_loan_sub_sectors col-md-6"
                                            style="display: none"></h6>
                                        <h6 class="col-md-6 loan-detail" style="display: none">Purpose:</h6>
                                        <h6 class="text-primary loan-detail display_loan_purpose col-md-6"
                                            style="display: none"></h6>
                                        <h6 class="col-md-6 loan-detail" style="display: none">Product Branch:</h6>
                                        <h6 class="text-primary loan-detail product-branch display_product_branch col-md-6"
                                            style="display: none"></h6>

                                    </div>
                                </div>

                                <div class="form-group text-center display_button_print" style="display: none">

                                    <span> <button class="btn btn-secondary btn-rounded" type="button" id="back_button"
                                            onclick="window.location.reload()">Back</button> &nbsp; </span>
                                    <span>&nbsp;
                                        <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                type="button" id="print_receipt" onclick="window.print()">Print
                                                Receipt
                                            </button></span>
                                </div>
                            </div>

                            <div class="col-md-5 text-center card-body success-message "
                                style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226)); display:none">

                                <p class="display-4 text-center text-success">
                                    <img width="305px" height="505px"
                                        src="{{ asset("land_asset/images/rcb_cashless.jpeg") }}" />
                                </p>
                            </div>

                        </div>

                    </div> <!-- end card-body -->
                </div>
            </div>

            <div class="card" id="payment_schedule" style="display: none">
                <div class="show col-md-12" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4 text-left">
                                    <b class="text-primary font-20">Loan Payment Schedule</b>
                                </div>
                                <div class="form-group row">
                                    <div class="col-8 offset-4 text-right">
                                        <button type="submit" id="btn_proceed_to_loan"
                                            class="btn  btn-primary btn-sm btn-rounded waves-effect waves-light ">
                                            <b className="text-primary" style="font-size: 12px">Proceed To Request Loan
                                            </b>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive p-2 table-striped table-bordered">
                            <table class="table mb-0 loan_payment_schedule w-100">
                                <thead>
                                    <tr class="bg-primary text-white ">
                                        <td> <b> NO </b> </td>
                                        <td> <b> REPAYMENT DATE </b> </td>
                                        <td> <b> PRINCIPAL REPAYMENT AMOUNT </b> </td>
                                        <td> <b> INTEREST REPAYMENT AMOUNT </b> </td>
                                        <td> <b> TOTAL REPAYMENT AMOUNT </b> </td>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                        <!-- end table-responsive -->


                    </div>
                </div>
            </div>
        </div>



    </div>
    @endsection

    @section('scripts')

    <script src="{{ asset('assets/js/pages/loans/loan-request.js') }}"> </script>
    @endsection