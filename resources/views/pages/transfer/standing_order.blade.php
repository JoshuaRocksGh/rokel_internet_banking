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


    <div class="container-fluid">
        <br>
        <!-- start page title -->
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-primary">
                    <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                    STANDING ORDER
                </h4>
            </div>

            <div class="col-md-6 text-right">
                <h6>

                    <span class="flaot-right">
                        <b class="text-primary"> Payment </b> &nbsp; > &nbsp; <b class="text-danger">Standing
                            Order</b>


                    </span>

                </h6>

            </div>

            <div class="col-md-12 ">
                <hr class="text-primary" style="margin: 0px;">
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <div class="receipt" style="display:none">
                            <div class="container card card-body">

                                <div class="container">
                                    <div class="___class_+?19___">
                                        <div class="col-md-12 col-md-offset-3 body-main">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 "> <img class="img " alt="InvoIce Template"
                                                            src="{{ asset('assets/images/' . env('APPLICATION_INFO_LOGO_LIGHT')) }} "
                                                            style="zoom: 0.6" /> </div>
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-4 text-right">
                                                        <h4 class="text-primary"><strong>ROKEL COMMERCIAL
                                                                BANK</strong>
                                                        </h4>
                                                        <p>25-27 Siaka Stevens St</p>
                                                        <p> Freetown, Sierra Leone</p>
                                                        <p>rokelsl@rokelbank.sl</p>
                                                        <p>(+232)-76-22-25-01</p>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="page-header">
                                                    <h2>Standing Order Receipt </h2>
                                                </div>
                                                <br>
                                                {{-- <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <h2>INVOICE</h2>
                                                            <h5>04854654101</h5>
                                                        </div>
                                                    </div> --}}
                                                <br />
                                                {{-- <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th><h5>Description</h5></th>
                                                                    <th><h5>Further Details</h5></th>
                                                                    <th><h5>Amount</h5></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="col-md-9">
                                                                        From Account Number<br>
                                                                        004004110449140121
                                                                    </td>
                                                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 50,000 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-9">
                                                                        To Account Number<br>
                                                                        004004110445350137
                                                                    </td>
                                                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 5,200 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-9">Category Type</td>
                                                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 25,000 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-9">Purpose of Transfer</td>
                                                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 2,200 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-9"> Transfer Amount</td>
                                                                    <td class="text-right">
                                                                        <p> <strong>Shipment and Taxes:</strong> </p>
                                                                        <p> <strong>Total Amount: </strong> </p>
                                                                        <p> <strong>Discount: </strong> </p>
                                                                        <p> <strong>Payable Amount: </strong> </p>
                                                                    </td>
                                                                    <td>
                                                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 500 </strong> </p>
                                                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 82,900</strong> </p>
                                                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 3,000 </strong> </p>
                                                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 79,900</strong> </p>
                                                                    </td>
                                                                </tr>
                                                                <tr style="color: #F81D2D;">
                                                                    <td class="text-right">
                                                                        <h4><strong>Total:</strong></h4>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <h4><strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 79,900 </strong></h4>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> --}}
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                {{-- <th>#</th> --}}
                                                                <th>Description</th>
                                                                <th>Further Details</th>
                                                                {{-- <th>Amount (<span id="receipt_currency"></span>)</th> --}}
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                {{-- <th scope="row">1</th> --}}
                                                                <td>Transfer From Account Number</td>
                                                                <td><span
                                                                        class="font-13 text-primary text-bold display_from_account_no"></span>
                                                                </td>
                                                                {{-- <td></td> --}}
                                                            </tr>
                                                            <tr>
                                                                {{-- <th scope="row">2</th> --}}
                                                                <td>Transfer To Account Number</td>
                                                                <td><span
                                                                        class="font-13 text-primary text-bold display_to_account_no"></span>
                                                                </td>
                                                                {{-- <td></td> --}}
                                                            </tr>
                                                            <tr>
                                                                {{-- <th scope="row">3</th> --}}
                                                                <td>Narration</td>
                                                                <td><span
                                                                        class="font-13 text-primary text-bold display_purpose"></span>
                                                                </td>
                                                                {{-- <td></td> --}}
                                                            </tr>
                                                            <tr>
                                                                <td>Start Date:</td>
                                                                <td>
                                                                    <span
                                                                        class="font-13 text-primary h3 display_so_start_date"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>End Date:</td>
                                                                <td>
                                                                    <span
                                                                        class="font-13 text-primary h3 display_so_end_date"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Frequency:</td>
                                                                <td>
                                                                    <span
                                                                        class="font-13 text-primary h3 display_frequency_so"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Transfer Date: </td>
                                                                <td>
                                                                    <span class="font-13 text-primary h3"
                                                                        id="display_transfer_date">{{ date('d F , Y') }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                {{-- <th scope="row">3</th> --}}
                                                                <td>Amount</td>
                                                                {{-- <td></td> --}}
                                                                <td><strong>(<span
                                                                            class="display_currency"></span>)<span
                                                                            class="display_transfer_amount"></span></strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                {{-- <th scope="row">3</th> --}}
                                                                <td>Transaction Fee </td>
                                                                {{-- <td></td> --}}
                                                                <td><strong>(<span
                                                                            class="display_currency"></span>)15.00</strong>
                                                                </td>
                                                            </tr>
                                                            {{-- <tr>
                                                                    <th scope="row">3</th>
                                                                    <td><strong>Total Amount</strong> </td>
                                                                    <td></td>
                                                                    <td><strong><span
                                                                                id="total_amount_receipt"></span></strong>
                                                                    </td>
                                                                </tr> --}}
                                                            <tr>
                                                                {{-- <th scope="row">3</th> --}}
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->
                                                <br>
                                                <div>
                                                    <div class="col-md-12">
                                                        <p><b>Date Posted :</b> {{ date('d F, Y') }}
                                                        </p> <br /> <br />
                                                        <p><b>Posted By : {{ session('userId') }}</b></p>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="row">
                                                    <div class="col-md-5"></div>
                                                    <div class="col-md-2">
                                                        <button
                                                            class="btn btn-light btn-rounded hide_on_print text-center"
                                                            type="button" onclick="window.print()">Print
                                                            Receipt
                                                        </button>


                                                    </div>
                                                    <div class="col-md-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form_process">
                            <div class="row">

                                <div class="col-md-7 m-2" id="transaction_form"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                    <br><br><br>

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
                                                        <option value="">--Select Account--</option>


                                                    </select>


                                                </div>
                                                <hr>


                                                <div class="form-group row select_saved_beneficiary">

                                                    <b class="col-md-4 text-primary">Beneficiary &nbsp; <span
                                                            class="text-danger">*</span></b>


                                                    <select class="form-control col-md-8" id="saved_beneficiary"
                                                        placeholder="Select Pick Up Branch" required>
                                                        <option value="">--- Select Saved Beneficiary ---</option>
                                                        {{-- <option
                                                            value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                            Saving Account~001023468976001~GHS~2000</option> --}}
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
                                                            <option value="">--Select Frequency--</option>
                                                            {{-- <option value="Joshua">Joshua </option> --}}
                                                        </select>

                                                    </div>


                                                    <div class="form-group row mb-3">
                                                        <b class="col-md-4 text-primary ">Purpose of Transfer &nbsp;
                                                            <span class="text-danger">*</span></b>

                                                        <input type="text" class="form-control col-md-8" id="purpose"
                                                            value="Standing Order Transfer" required>

                                                    </div>

                                                </div>

                                                <div class="form-group text-right">
                                                    <button class="btn btn-primary btn-rounded" type="submit"
                                                        id="next_button">
                                                        &nbsp; Next &nbsp; <i class="fe-arrow-right"></i></button>
                                                </div>


                                            </div>
                                            <div class="col-md-1"></div>
                                            {{-- LEFT SIDE COLOUMN --}}
                                            {{-- <div class="">
                                                    <div class="form-group">




                                                        <table
                                                            class="table-responsive table table-centered table-nowrap mb-0 from_account_display_info card">
                                                            <tbody class="">
                                                                <tr>

                                                                    <td>
                                                                        <a
                                                                            class="text-body font-weight-semibold display_from_account_name"></a>
                                                                        <small class="d-block display_from_account_no"></small>
                                                                    </td>

                                                                    <td class="text-right font-weight-semibold">
                                                                        <span class="display_from_account_currency"></span>
                                                                        <span class="display_from_account_amount"></span>

                                                                    </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>


                                                    </div>


                                                </div> --}}

                                            {{-- RIGHT SIDE COL0UMN --}}

                                        </div>
                                        <hr>
                                        {{-- <div class="form-group">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radio" type="radio" name="onetime"
                                                    id="inlineRadio1" value="beneficiary" checked="checked">
                                                <label class="form-check-label" for="inlineRadio1">Select
                                                    beneficiary</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radio" type="radio" name="onetime"
                                                    id="inlineRadio2" value="onetime">
                                                <label class="form-check-label" for="inlineRadio2">Onetime
                                                    beneficiary</label>
                                            </div>
                                        </div>
                                        <hr> --}}

                                        {{-- SELECTED BENEFICIARY FORM --}}
                                        {{-- <div class="form-group" id="beneficiary_selected">
                                            <div class="row">
                                                <div class="col-6">

                                                    <div class="form-group">
                                                        <label class="">Receipient Mobile Number:<span
                                                                class="text-danger">*</span></label>

                                                        <select class="custom-select receipient_number"
                                                            id="receipient_number">
                                                            <option value="">Select Receipient Number</option>
                                                            <option value="0244563254">0244563254</option>
                                                            <option value="VODAFONE">VODAFONE</option>
                                                            <option value="AIRTEL TOGO">AIRTEL TOGO</option>
                                                        </select>
                                                        <input type="text" class="form-control" id="Receipient_number"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="">Category:<span class="text-danger">*</span></label>

                                                        <select class="custom-select category" id="category">
                                                            <option value="">Select Category</option>
                                                            <option value="001~Fees">Fees</option>
                                                            <option value="002~Electronics">Electronics</option>
                                                            <option value="003~Travels">Travels</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-6">

                                                    <div class="form-group">
                                                        <label class="" for="">Receipient Network Type:<span
                                                                class="text-danger">*</span></label>
                                                        <select class="custom-select network_type" id="network_type">
                                                            <option value="">Select Network Type</option>
                                                            <option value="MTN">MTN</option>
                                                            <option value="VODAFONE">VODAFONE</option>
                                                            <option value="AIRTEL TOGO">AIRTEL TOGO</option>
                                                        </select>


                                                        <label class="">Receipient Mobile Number</label>
                                                            <input type="text" class="form-control" id="amount"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="">Enter Naration:<span
                                                                class="text-danger">*</span></label>

                                                        <input type="text" class="form-control purpose" id="purpose"
                                                            placeholder="Enter purpose / narration">

                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        {{-- ONETIME BENEFICIARY SCREEN --}}


                                        {{-- SCHEDULE PAYMENTS --}}
                                        {{-- <div class="col-6">


                                                <div class="form-group">

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Schedule
                                                            Payments</label>
                                                    </div>
                                                    <legend></legend>

                                                    <input type="text" class="form-control"
                                                        id="schedule_payment_contraint_input">

                                                    <input type="date" class="form-control" id="schedule_payment_date">

                                                </div>
                                            </div> --}}

                                        {{-- <div class="form-group">


                                        </div>
                                        <div class="form-group">



                                            <table
                                                class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info">
                                                <tbody>
                                                    <tr>

                                                        <td>
                                                            <a
                                                                class="text-body font-weight-semibold display_to_account_name"></a>
                                                            <small class="d-block display_to_account_no"></small>
                                                        </td>

                                                        <td class="text-right font-weight-semibold">
                                                            <span class="display_to_account_currency"></span>
                                                            <span class="display_to_account_amount"></span>

                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>


                                        </div> --}}



                                    </form>




                                    {{-- <div class="col-md-5 text-center" style="margin-top: 80px;">

                                        <img src="{{ asset('assets/images/payment-icon-images/mobile_money/mobile_money_logos.jpg') }}"
                                    class="img-fluid" alt="">
                                </div> <!-- end col --> --}}


                                <!-- end row -->



                            </div>

                            <div class="col-md-7 m-2" id="transaction_summary"
                                style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));display:none;">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10 ">
                                        <br><br><br>

                                        <div class="table-responsive card table_over_flow">
                                            <table class="table mb-0 table-bordered table-striped  ">

                                                <tbody>
                                                    <tr>
                                                        <td>From Account:</td>
                                                        <td>
                                                            {{-- <span class="font-13 text-primary text-bold display_from_account_type"
                                                                        id="display_from_account_type"></span> --}}
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_from_account_name"
                                                                id="display_from_account_name"> </span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_from_account_no"
                                                                id="display_from_account_no"></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>To Account:</td>
                                                        <td>

                                                            {{-- <span class="font-13 text-primary text-bold display_to_account_type"
                                                                        id="display_to_account_type"> </span> --}}
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                id="display_to_account_name"> </span>
                                                            {{-- <span class="d-block font-13 text-primary text-bold online_display_beneficiary_email"
                                                                        id="online_display_beneficiary_bank_name"></span> --}}
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                id="display_to_account_no"> </span>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Amount:</td>
                                                        <td>
                                                            <span class="font-15 text-primary h3 display_currency"
                                                                id="display_currency"> </span>
                                                            &nbsp;
                                                            <span
                                                                class="font-15 text-primary h3 display_transfer_amount"
                                                                id="display_transfer_amount"></span>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Narration:</td>
                                                        <td>
                                                            <span
                                                                class="font-13 text-primary h3 display_purpose"></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Start Date:</td>
                                                        <td>
                                                            <span
                                                                class="font-13 text-primary h3 display_so_start_date"></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>End Date:</td>
                                                        <td>
                                                            <span
                                                                class="font-13 text-primary h3 display_so_end_date"></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Frequency:</td>
                                                        <td>
                                                            <span
                                                                class="font-13 text-primary h3 display_frequency_so"></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Transfer Date: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_transfer_date">{{ date('d F, Y') }}</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Posted BY: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_posted_by">{{ session()->get('userAlias') }}</span>
                                                        </td>
                                                    </tr>

                                                    {{-- <tr>
                                                            <td>Enter Pin: </td>
                                                            <td>

                                                                <input type="text" name="user_pin"
                                                                    class="form-control key hide_on_print" id="user_pin"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                                            </td>
                                                        </tr> --}}

                                                    {{-- <tr>

                                                                <td colspan="2">

                                                                    <div class="alert alert-info form-control col-md-12"
                                                                        role="alert">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input"
                                                                                name="terms_and_conditions"
                                                                                name="terms_and_conditions"
                                                                                id="terms_and_conditions">
                                                                            <label class="custom-control-label "
                                                                                for="terms_and_conditions">
                                                                                <b>
                                                                                    By clicking, you agree with terms and
                                                                                    conditions

                                                                                </b>
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                </td>
                                                            </tr> --}}




                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->



                                        <br>
                                        <div class="form-group text-center">

                                            <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                    id="back_button"> <i class="fe-arrow-left"></i>&nbsp;Back</button>
                                                &nbsp; </span>
                                            <span>
                                                &nbsp;
                                                <button class="btn btn-primary btn-rounded" type="button">
                                                    <span id="confirm_transfer-text" data-toggle="modal"
                                                        data-target="#centermodal">Confirm</span>
                                                    <span class="spinner-border spinner-border-sm mr-1" role="status"
                                                        id="spinner" aria-hidden="true"></span>
                                                    <span id="spinner-text">Loading...</span>
                                                </button>
                                            </span>

                                            <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                    type="button" id="print_receipt" onclick="window.print()">Print
                                                    Receipt
                                                </button></span>
                                        </div>

                                        <!-- Center modal content -->
                                        <div class="modal fade" id="centermodal" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title text-primary text-center"
                                                            id="myCenterModalLabel">ENTER TRANSACTION
                                                            PIN</h3>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>

                                                    </div>
                                                    <div class="modal-body transfer_pin_modal">

                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-9  text-center">
                                                                <form action="#" autocomplete="off"
                                                                    aria-autocomplete="off">
                                                                    <input type="text" name="user_pin" maxlength="4"
                                                                        autocomplete="off" aria-autocomplete="off"
                                                                        class="form-control key hide_on_print"
                                                                        id="user_pin"
                                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                    <br>
                                                                    <button
                                                                        class="btn btn-success waves-effect waves-light"
                                                                        type="button" id="confirm_transfer"
                                                                        data-dismiss="modal">Submit</button>
                                                                </form>

                                                            </div>
                                                            <div class="col-md-1"></div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->


                                    </div>
                                    <div class="col-md-1"></div>
                                </div>

                            </div>

                            <div class="col-md-4 m-2" id="related_information_display"
                                style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                <br><br>

                                <div class=" col-md-12 card card-body ach_transfer_summary">
                                    {{-- <br><br> --}}
                                    <h4 class="text-primary">Sender Acc. Info</h4>
                                    <hr class="mt-0">

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
                                    {{-- <hr style="margin-top: 2px; margin-bottom: 5px; "> --}}

                                    {{-- <div class="row">
                                            <h6 class="text-primary col-md-5">Transaction Fee:</h6>
                                            <h6 class="text-danger text-bold col-md-7">0.08% of transfer amount</h6>
                                        </div> --}}

                                    {{-- <hr>
                                        <div class="row">
                                            <h6 class="text-primary col-md-5">Please Note:</h6>
                                            <h6 class="text-danger col-md-7">ACH Tranfers should be above (SLL
                                                30,000,000.00)</h6>
                                        </div> --}}


                                </div>

                            </div>

                        </div>
                    </div>



                </div>

                {{-- <div class="col-md-2"></div> --}}

            </div> <!-- end card-body -->

        </div> <!-- end col -->

    </div> <!-- end row -->



</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function from_account() {
                $.ajax({
                    type: 'GET',
                    url: 'get-my-account',
                    datatype: "application/json",
                    success: function(response) {
                        // console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                            $('#from_account').append($('<option>', {
                                value: data[index].accountType + '~' + data[index]
                                    .accountDesc + '~' + data[index].accountNumber + '~' +
                                    data[index].currency + '~' + data[index]
                                    .availableBalance
                            }).text(data[index].accountType + '~' + data[index].accountNumber +
                                '~' + data[index].currency + '~' + data[index].availableBalance
                            ));
                            // $('#to_account').append($('<option>', {
                            //     value: data[index].accountType + '~' + data[index]
                            //         .accountNumber + '~' + data[index].currency + '~' +
                            //         data[index].availableBalance
                            // }).text(data[index].accountType + '~' + data[index].accountNumber +
                            //     '~' + data[index].currency + '~' + data[index].availableBalance
                            // ));

                        });
                    },
                    error: function(xhr, status, error) {

                        setTimeout(function() {
                            from_account()
                        }, $.ajaxSetup().retryAfter)
                    }

                })
            }

            //function to get the loan products accessible to the customer of the bank.
            function get_so_frequencies() {
                $.ajax({
                    type: 'GET',
                    url: 'get-standing-order-frequencies-api',
                    datatype: "application/json",
                    success: function(response) {
                        // console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                            $('.so_frequency').append($('<option>', {
                                value: data[index].code
                            }).text(data[index].name));

                        });
                    },
                    error: function(xhr, status, error) {

                        setTimeout(function() {
                            get_so_frequencies()
                        }, $.ajaxSetup().retryAfter)
                    }

                })
            }


            function get_benerficiary() {
                $.ajax({
                    type: 'GET',
                    url: 'get-transfer-beneficiary-api?beneType=OTB',
                    datatype: "application/json",
                    success: function(response) {
                        // console.log(response.data);
                        let data = response.data

                        if (!response.data) {

                        } else {
                            if (response.data.length > 0) {
                                $('.yes_beneficiary').show()
                                $('.no_beneficiary').hide()

                                $.each(data, function(index) {
                                    //$('#from_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));
                                    $('#saved_beneficiary').append($('<option>', {
                                        value: data[index].BANK_NAME + '~' +
                                            data[index].NICKNAME.toUpperCase() + '~' +
                                            data[index].BEN_ACCOUNT + '~' +
                                            data[index].BEN_ACCOUNT_CURRENCY + '~' +
                                            data[index].ADDRESS_1 + '~' +
                                            data[index].BANK_SWIFT_CODE + '~' +
                                            data[index].EMAIL + '~' + JSON
                                            .stringify(data[index])
                                    }).text(data[index].NICKNAME.toUpperCase() + ' - ' +
                                        data[index]
                                        .BANK_NAME.toUpperCase() +
                                        ' - ' + data[index].BEN_ACCOUNT + ' - ' + data[
                                            index]
                                        .BEN_ACCOUNT_CURRENCY));

                                });

                            } else {
                                // $('.yes_beneficiary').hide()
                                // $('.no_beneficiary').show()
                            }
                        }

                    },
                    error: function(xhr, status, error) {

                        setTimeout(function() {
                            get_benerficiary()
                        }, $.ajaxSetup().retryAfter)
                    }

                })
            }



            $(document).ready(function() {



                setTimeout(function() {
                    from_account();
                    get_benerficiary();
                    get_so_frequencies();
                }, 200);

                $("#beneficiary_selected").show();
                $("#onetime_beneficiary").hide();
                $("#spinner").hide();
                $("#print_receipt").hide();
                $("#spinner_text").hide();
                $("#onetime_beneficiary_form").hide();
                {{-- $(".receipt").hide(); --}}


                //codes to display self or others transfer
                $("#inlineRadio1").click(function() {
                    var beneficiary_type = $('input[type="radio"][name="radioInline"]:checked').val();
                    // console.log(beneficiary_type);
                    // $(".display_beneficiary_type").text(beneficiary_type);
                    // $('.display_pick_up_branch').text("");
                    // var pickUpBranch = $("#pUBranch").val();
                    // if (pickUpBranch != "") {

                    //     let branch_info = pickUpBranch.split("~")
                    //     $(".display_pick_up_branch").text(branch_info[1]);
                    //     console.log(branch_info[1]);
                    //     console.log(pickUpBranch);
                    //     console.log(branch_info[1]);
                    // }
                    $("#saved_beneficiary_form").hide();
                    $(".select_saved_beneficiary").hide();
                    $("#onetime_beneficiary_form").show(200);

                });

                $("#inlineRadio2").click(function() {
                    var beneficiary_type = $('input[type="radio"][name="radioInline"]:checked').val();
                    // console.log(beneficiary_type);
                    // $(".display_beneficiary_type").text(destination_type);
                    // $(".display_pick_up_branch").text('');
                    $("#saved_beneficiary_form").show();
                    $(".select_saved_beneficiary").show();
                    $("#onetime_beneficiary_form").hide();

                });

                // $(".radio").click(function() {
                //     var type = $("input[type='radio']:checked").val();

                //     if (type == "beneficiary") {
                //         $("#beneficiary_selected").show();
                //         $("#onetime_beneficiary").hide();
                //     }

                //     if (type == "onetime") {
                //         $("#onetime_beneficiary").show();
                //         $("#beneficiary_selected").hide();

                //     }
                // })
                // $("#checkmeout0").click(function() {
                //     if ($(this).is(":checked")){
                //         {{-- alert("Checked!"); --}}
                // $("#onetime_beneficiary_form").toggle(500);
                // $("#saved_beneficiary_form").hide();
                // $(".bene_details").hide();



                // }else{
                // $("#saved_beneficiary_form").toggle(500);
                // $(".bene_details").toggle(500);
                // $("#onetime_beneficiary_form").hide();

                // {{-- alert("Unchecked!"); --}}
                // }
                // })

                // {
                // {
                // --hide % 20 select % 20 accounts % 20 info--
                // }
                // }
                $(".from_account_display_info").hide()
                $(".to_account_display_info").hide()
                $("#schedule_payment_date").hide()
                $('#schedule_payment_contraint_input').hide()
                $('.display_schedule_payment_date').text('N/A')

                //changes to be made after alteration
                $("#transaction_form").show()
                $("#transaction_summary").hide()
                $("#related_information_display").show();
                {{-- $(".receipt").hide() --}}




                $("#back_button").click(function(e) {
                    e.preventDefault()
                    $("#transaction_summary").hide()
                    $("#transaction_form").show()

                })

                $('#saved_beneficiary').change(function() {
                    var beneficiary_name = $('#saved_beneficiary').val().split('~');
                    // console.log(beneficiary_name);
                    $("#saved_beneficiary_name").val(beneficiary_name[1]);
                    $("#saved_account_number").val(beneficiary_name[2]);
                    $("#saved_beneficiary_email").val(beneficiary_name[6]);
                });


                $("#from_account").change(function() {
                    var from_account = $(this).val()


                    if (from_account.trim() == '' || from_account.trim() == undefined) {
                        alert('money')
                        $(".from_account_display_info").hide()

                    } else {
                        from_account_info = from_account.split("~")

                        var to_account = $('#to_account').val()


                        // set summary values for display
                        $(".display_from_account_type").text(from_account_info[0].trim())
                        $(".display_from_account_name").text(from_account_info[1].trim())
                        $(".display_from_account_no").text(from_account_info[2].trim())
                        $(".display_from_account_currency").text(from_account_info[3].trim())

                        $(".display_currency").text(from_account_info[3].trim()) // set summary currency

                        amt = from_account_info[4].trim()
                        $(".display_from_account_amount").text(formatToCurrency(parseFloat(
                            from_account_info[4]
                            .trim())))
                        // {
                        // --alert( % 26 % 2339 % 3 Band % 20 show % 20 % 26 % 2339 % 3 B % 20 % 20 %
                        // 2 B % 20 from_account_info % 5 B3 % 5 D.trim()) --
                        // }
                        // }
                        $(".from_account_display_info").show()





                        // alert(from_account_info[0]);
                    }

                })

                $("#saved_beneficiary").change(function() {
                    var to_account = $(this).val()
                    // {
                    // --console.log(to_account) % 3 B--
                    // }
                    // } {
                    // {
                    // --alert(to_account) --
                    // }
                    // }
                    if (to_account.trim() == '' || to_account.trim() == undefined) {
                        // {
                        // {
                        // --alert( % 26 % 2339 % 3 Bmoney % 26 % 2339 % 3 B) --
                        // }
                        // }
                        $(".to_account_display_info").hide()

                    } else {
                        to_account_info = to_account.split("~")
                        // console.log(to_account_info);

                        var from_account = $('#from_account').val()

                        if ((from_account.trim() == to_account.trim()) && from_account.trim() != '' &&
                            to_account.trim() != '') {
                            // {
                            // {
                            // --alert( % 26 % 2339 % 3 Bcan % 20n ot % 20 transfer % 20 to % 20 same %
                            // 20 account % 26 % 2339 % 3 B) --
                            // }
                            // }
                            $(this).val('')
                        }

                        // set summary values for display
                        $(".display_to_account_type").text(to_account_info[0])
                        $(".display_to_account_name").text(to_account_info[1])
                        $(".display_to_account_no").text(to_account_info[2])
                        $(".display_to_account_amount").text(to_account_info[4])
                        $(".display_to_account_currency").text(to_account_info[3])
                        // alert(to_account_info[0].trim())
                        //$(".display_to_account_amount").text(formatToCurrency(parseFloat(to_account_info[4].trim())))

                        $(".to_account_display_info").show()
                    }




                    // {
                    // {
                    // --alert(to_account_info % 5 B0 % 5 D) % 3 B--
                    // }
                    // }
                });

                // $("#saved_beneficiary").change(function() {
                // let saved_beneficiary = $(this).val()

                // if (saved_beneficiary.trim() == '' || saved_beneficiary.trim() == undefined) {
                // alert('money')
                // $(".saved_beneficiary_display_info").hide()

                // } else {
                // saved_beneficiary_info = saved_beneficiary.split("~")

                // // var to_account = $('#to_account').val()


                // // set summary values for display
                // $(".display_to_account_name").text(saved_beneficiary_info[0].trim())
                // $(".display_to_account_no").text(saved_beneficiary_info[1].trim())
                // $(".display_saved_beneficiary_no").text(saved_beneficiary_info[2].trim())
                // // $(".display_from_account_currency").text(from_account_info[3].trim())

                // // $(".display_currency").text(from_account_info[3].trim()) // set summary currency

                // amt = saved_beneficiary_info[4].trim()
                // // $(".display_saved_beneficiary_amount").text(formatToCurrency(parseFloat(
                // // from_account_info[4]
                // // .trim())))
                // {{-- alert('and show '  + from_account_info[3].trim()) --}}
                // $(".from_account_display_info").show()





                // // alert(from_account_info[0]);
                // }

                // })

                $("#saved_beneficiary").change(function() {
                    let saved_beneficiary = $(this).val()

                    if (saved_beneficiary.trim() == '' || saved_beneficiary.trim() == undefined) {
                        alert('money')
                        $(".saved_beneficiary_display_info").hide()

                    } else {
                        saved_beneficiary_info = saved_beneficiary.split("~")

                        // var to_account = $('#to_account').val()


                        // set summary values for display
                        // console.log(saved_beneficiary_info);
                    }
                });

                $("#so_start_date").change(function() {
                    var display_start_date = $("#so_start_date").val();
                    $(".display_so_start_date").text(display_start_date);
                    // console.log(display_start_date);
                });

                $("#so_end_date").change(function() {
                    var display_end_date = $("#so_end_date").val();
                    $(".display_so_end_date").text(display_end_date);
                    // console.log(display_end_date);
                });

                $("#amount").keyup(function() {
                    var amount = $("#amount").val();
                    $(".display_transfer_amount").text(formatToCurrency(parseFloat(amount)));
                    // console.log(amount);
                });

                $("#beneficiary_frequency").change(function() {
                    var frequency = $("#beneficiary_frequency").val();
                    var optionText = $("#beneficiary_frequency option:selected").text();
                    $(".display_frequency_so").text(optionText);
                    // console.log(frequency);
                })

                $("#purpose").change(function() {
                    var purpose = $("#purpose").val();
                    $(".display_purpose").text(purpose);
                    // console.log(purpose);
                });

                // $("#loan_product").change(function(){
                // var loan_product = $("#loan_product").val();
                // var optionText = $("#loan_product option:selected").text();
                // $(".display_loan_product").text(optionText);
                // console.log(loan_product);
                // });

                // $(".display_transfer_amount").text(formatToCurrency(parseFloat(transfer_amount)));

                $("#next_button").click(function(e) {
                    e.preventDefault();
                    $("#confirm_transfer-text").show();
                    $("#spinner").hide();
                    $("#spinner-text").hide();

                    var from_account = $("#from_account").val();
                    var beneficiary = $("#saved_beneficiary").val();
                    var amount = $("#amount").val();
                    var so_start_date = $("#so_start_date").val();
                    var so_end_date = $("#so_end_date").val();
                    var so_frequency = $("#beneficiary_frequency").val();
                    var narration = $("#purpose").val();
                    $(".display_purpose").text(narration)


                    if (!validateAll(from_account, beneficiary, amount, so_start_date, so_frequency,
                            narration)) {
                        toaster('fields cannot be empty', 'error', 2000);
                        return false;
                    }

                    var from_account_info = from_account.split('~');
                    var to_account_info = beneficiary.split('~');

                    from_account = from_account_info[2];
                    beneficiary = to_account_info[2];
                    var bankCode = to_account_info[5];
                    // console.log(bankCode);
                    // console.log(pin);



                    $("#transaction_form").hide()
                    $("#transaction_summary").show()

                })

                $("#confirm_transfer").click(function(e) {
                    e.preventDefault();

                    var customerType = @json(session()->get('customerType'));

                    if (customerType == 'C') {

                        var from_account = $("#from_account").val();
                        var beneficiary = $("#saved_beneficiary").val();
                        var amount = $("#amount").val();
                        var so_start_date = $("#so_start_date").val();
                        var so_end_date = $("#so_end_date").val();
                        var so_frequency = $("#beneficiary_frequency").val();
                        var narration = $("#purpose").val();
                        $(".display_purpose").text(narration)

                        var from_account_info = from_account.split('~');
                        var to_account_info = beneficiary.split('~');

                        from_account = from_account_info[2];
                        beneficiary = to_account_info[2];
                        var bankCode = to_account_info[5];
                        // console.log(bankCode);
                        // console.log(pin);
                        $("#confirm_transfer-text").hide();
                        $("#spinner").show();
                        $("#spinner-text").show();
                        var pin = $("#user_pin").val();
                        // console.log(pin);

                        $.ajax({
                            type: "POST",
                            url: "corporate-standing-order-request-api",
                            datatype: "application/json",
                            data: {
                                'from_account': from_account,
                                'amount': amount,
                                'beneficiary_account': beneficiary,
                                'standing_order_start_date': so_start_date,
                                'standing_order_end_date': so_end_date,
                                'standing_order_frequency': so_frequency,
                                'narration': narration,
                                'bank_code': bankCode,
                                'user_pin': pin
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            success: function(response) {
                                console.log(response);

                                if (response.responseCode == '000') {

                                    Swal.fire(
                                        '',
                                        response.message,
                                        'success'
                                    );

                                    {{-- $(".receipt").show(); --}}

                                    $("#spinner").hide();
                                    $("#spinner-text").hide();
                                    {{-- $(".form_process").hide(); --}}

                                    // setTimeout(function(){
                                    // window.location.reload();
                                    // }, 2000);
                                } else {

                                    toaster(response.message, 'error', 6000);
                                    $("#confirm_transfer-text").show();
                                    $("#spinner").hide();
                                    $("#spinner-text").hide();
                                    $(".form_process").hide();

                                }
                            }
                        });

                    } else {

                        var from_account = $("#from_account").val();
                        var beneficiary = $("#saved_beneficiary").val();
                        var amount = $("#amount").val();
                        var so_start_date = $("#so_start_date").val();
                        var so_end_date = $("#so_end_date").val();
                        var so_frequency = $("#beneficiary_frequency").val();
                        var narration = $("#purpose").val();
                        $(".display_purpose").text(narration)

                        var from_account_info = from_account.split('~');
                        var to_account_info = beneficiary.split('~');

                        from_account = from_account_info[2];
                        beneficiary = to_account_info[2];
                        var bankCode = to_account_info[5];
                        // console.log(bankCode);
                        // console.log(pin);
                        $("#confirm_transfer-text").hide();
                        $("#spinner").show();
                        $("#spinner-text").show();
                        var pin = $("#user_pin").val();
                        // console.log(pin);

                        $.ajax({
                            type: "POST",
                            url: "initiate-standing-order-request-api",
                            datatype: "application/json",
                            data: {
                                'from_account': from_account,
                                'amount': amount,
                                'beneficiary_account': beneficiary,
                                'standing_order_start_date': so_start_date,
                                'standing_order_end_date': so_end_date,
                                'standing_order_frequency': so_frequency,
                                'narration': narration,
                                'bank_code': bankCode,
                                'user_pin': pin
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            success: function(response) {
                                console.log(response);

                                if (response.responseCode == '000') {

                                    Swal.fire(
                                        '',
                                        response.message,
                                        'success'
                                    );
                                    $(".receipt").show();
                                    $("#spinner").hide();
                                    $("#spinner-text").hide();
                                    $(".form_process").hide();
                                } else {

                                    toaster(response.message, 'error', 6000);
                                    $("#confirm_transfer-text").show();
                                    $("#spinner").hide();
                                    $("#spinner-text").hide();
                                    // $(".form_process").hide();

                                }

                        }, error: function (){
                            console.log("something went wrong")
                        }
                    })

                    }




                });





            })
</script>
@endsection
