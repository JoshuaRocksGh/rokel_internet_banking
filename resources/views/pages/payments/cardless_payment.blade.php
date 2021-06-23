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
            src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
        }

        input.key {
            font-family: 'password';
            width: 100px;
            height: 26px;
        }

    </style>


@endsection

@section('content')

    <div class="">

        <div class="container-fluid">
            <br>
            <!-- start page title -->
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary">
                        <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                        CARDLESS
                    </h4>
                </div>

                <div class="col-md-6 text-right">
                    <h6>

                        <span class="flaot-right">
                            <b class="text-primary"> Payment </b> &nbsp; > &nbsp; <b class="text-danger">Cardless
                                Payment</b>


                        </span>

                    </h6>

                </div>

                <div class="col-md-12 ">
                    <hr class="text-primary" style="margin: 0px;">
                </div>

            </div>
        </div>

        <div class="">

            <ul class="nav nav-pills navtab-bg nav-justified">
                <li class="nav-item">
                    <a href="#send_cardless_page" data-toggle="tab" aria-expanded="true"
                        class="nav-link active send_korpor_tab">
                        Send Cardless
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#reverse_cardless_page" data-toggle="tab" aria-expanded="false"
                        class="nav-link reverse_korpor_tab">
                        Reverse Cardless
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#redeem_cardless_page" data-toggle="tab" aria-expanded="false"
                        class="nav-link redeem_korpor_tab">
                        Redeem Cardless
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#cardless_trans_page" data-toggle="tab" aria-expanded="false"
                        class="nav-link korpor_trans_tab">
                        Cardless Transactions
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="send_cardless_page">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class=" col-md-7 m-2" id="request_form_div"
                                                                style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                                                <br><br><br>

                                                <form action="#" class="select_beneficiary" id="payment_details_form"
                                                    autocomplete="off" aria-autocomplete="none">
                                                    @csrf
                                                    <div class="row container">
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-9">

                                                            {{-- <br><br><br> --}}
                                                            <div class="row">
                                                                {{-- <div class="col-md-1"></div> --}}

                                                                <div class="col-md-12">

                                                                    <div class="form-group row mb-3">
                                                                        <b class="col-md-5 text-primary">Pay From&nbsp;
                                                                            <span class="text-danger">*</span> </b>


                                                                        <select class="form-control col-md-7 from_account"
                                                                            required>
                                                                            <option value="">Select Account
                                                                            </option>


                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group row">

                                                                        <b class="col-md-5 text-primary"> Destination &nbsp; <span class="text-danger">*</span></b>

                                                                        <div class="row col-md-7 ">
                                                                            <div class="radio radio-primary form-check-inline m-1 col-md-5 destination">
                                                                                <input type="radio" id="inlineRadio1" value="SELF" name="radioInline" >
                                                                                <label for="inlineRadio1"> Self </label>
                                                                            </div>
                                                                            <div class="radio  radio-primary form-check-inline m-1 col-md-5 transfer_type">
                                                                                <input type="radio" id="inlineRadio2" value="OTHERS" name="radioInline" checked>
                                                                                <label for="inlineRadio2"> Others</label>
                                                                            </div>

                                                                        </div>

                                                                    </div>


                                                                    <div class="others_form">
                                                                        <div class="form-group row mb-3">

                                                                            <b class="col-md-5 text-primary">Amount&nbsp;
                                                                                <span class="text-danger">*</span></b>


                                                                            <input type="text" class="form-control col-md-7 "
                                                                                id="amount"
                                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                                required>
                                                                            <br>



                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <b class="col-md-5 text-primary"> Receiver Name
                                                                                &nbsp; <span class="text-danger">*</span></b>


                                                                            <input type="text" class="form-control col-md-7 "
                                                                                id="receiver_name"
                                                                                placeholder="enter receiver name"
                                                                                autocomplete="off" required>
                                                                            <br>

                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <b class="col-md-5 text-primary"> Receiver's Phone
                                                                                Number: &nbsp; <span
                                                                                    class="text-danger">*</span></b>

                                                                            <input type="text" class="form-control col-md-7 "
                                                                                id="receiver_phoneNum"
                                                                                placeholder="receiver Phone Number"
                                                                                autocomplete="off"
                                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                                required>
                                                                            <br>

                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <b class="col-md-5 text-primary"> Receiver's
                                                                                Address: &nbsp; <span
                                                                                    class="text-danger"></span></b>

                                                                            <input type="text" class="form-control col-md-7 "
                                                                                id="receiver_address"
                                                                                placeholder="receiver Address"
                                                                                autocomplete="off" required>
                                                                            <br>

                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <b class="col-md-5 text-primary " for="pin">
                                                                                Enter Your Pin
                                                                                <span class="text-danger">*</span></b>
                                                                            <input type="password" class="form-control col-md-7"
                                                                                id="user_pin"
                                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">



                                                                        </div>

                                                                        <div class="form-group text-right ">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success "
                                                                                id="confirm_button">
                                                                                <span class="submit-text">Submit</span>
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm mr-1"
                                                                                    id="spinner" role="status"
                                                                                    aria-hidden="true"></span>
                                                                                <span id="spinner-text">Loading...</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="self_form">
                                                                        <div class="form-group row mb-3">

                                                                            <b class="col-md-5 text-primary">Amount&nbsp;
                                                                                <span class="text-danger">*</span></b>


                                                                            <input type="text" class="form-control col-md-7 "
                                                                                id="amount_self"
                                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                                required>
                                                                            <br>



                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <b class="col-md-5 text-primary"> Receiver Name
                                                                                &nbsp; <span class="text-danger">*</span></b>

                                                                                {{-- value={{ session()->get('userAlias') }} --}}
                                                                            <input type="text" class="form-control col-md-7"
                                                                                id="receiver_name_self"
                                                                                placeholder="enter receiver name" value="{{ Session()->get('userAlias') }}"
                                                                                autocomplete="off"  required>
                                                                            <br>

                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <b class="col-md-5 text-primary"> Receiver's Phone
                                                                                Number: &nbsp; <span
                                                                                    class="text-danger">*</span></b>

                                                                            <input type="text" class="form-control col-md-7 "
                                                                                id="receiver_phoneNum_self"
                                                                                placeholder="receiver Phone Number"
                                                                                autocomplete="off"  value="{{ session()->get('customerPhone') }}"
                                                                                required>
                                                                            <br>
                                                                            {{-- oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" --}}
                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <b class="col-md-5 text-primary"> Receiver's
                                                                                Address: &nbsp; <span
                                                                                    class="text-danger"></span></b>

                                                                            <input type="text" class="form-control col-md-7 "
                                                                                id="receiver_address_self"
                                                                                placeholder="enter your Address"
                                                                                autocomplete="off" required>
                                                                            <br>

                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <b class="col-md-5 text-primary " for="pin">
                                                                                Enter Your Pin
                                                                                <span class="text-danger">*</span></b>
                                                                            <input type="password" class="form-control col-md-7"
                                                                                id="user_pin_self"
                                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">



                                                                        </div>

                                                                        <div class="form-group text-right ">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success "
                                                                                id="confirm_button_self">
                                                                                <span class="submit-text">Submit</span>
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm mr-1"
                                                                                    id="spinner-self" role="status"
                                                                                    aria-hidden="true"></span>
                                                                                <span id="spinner-text-self">Loading...</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>




                                                                </div>

                                                                {{-- <div class="col-md-1"></div> --}}
                                                            </div>









                                                        </div>
                                                        <div class="col-md-1"></div>

                                                    </div>











                                                </form>


                                            </div> <!-- end col -->

                                            <div class="col-md-4 m-2 others_summary"
                                                        style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                                        <br><br>
                                                <div class=" col-md-12 card card-body">
                                                            {{-- <br><br> --}}
                                                    <div class="row">
                                                        <span class="col-md-12 success-message"></span>
                                                        <h6 class="col-md-5">Account Name:</h6>
                                                        <span class="text-primary display_from_account_name col-md-7"></span>

                                                        <h6 class="col-md-5">Account Number:</h6>
                                                        <span class="text-primary display_from_account_no col-md-7"></span>

                                                        <h6 class="col-md-5">Available Balance:</h6>
                                                        <span
                                                            class="text-primary display_from_account_amount col-md-7"></span>

                                                        <h6 class="col-md-5">Account Currency:</h6>
                                                        <span class="text-primary display_currency col-md-7"></span>

                                                        <h6 class="col-md-5">Amount:</h6>
                                                        <span class="text-primary display_amount col-md-7"></span>


                                                        <h6 class="col-md-5">Receiver's Name: </h6>
                                                        <span class="text-success display_receiver_name col-md-7"></span>

                                                        <h6 class="col-md-5">Receiver's Phone Number:</h6>
                                                        <span
                                                            class="text-success display_receiver_phoneNum col-md-7"></span>

                                                        <h6 class="col-md-5">Receiver's Address:</h6>
                                                        <span class="text-success display_receiver_address col-md-7"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group text-center display_button_print">

                                                    <span>&nbsp;
                                                        <span>&nbsp; <button class="btn btn-light btn-rounded" type="button"
                                                                id="print_receipt" onclick="window.print()">Print
                                                                Receipt
                                                            </button></span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 m-2 self_summary"
                                                        style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                                        <br><br>
                                                <div class=" col-md-12 card card-body">
                                                            {{-- <br><br> --}}
                                                    <div class="row">
                                                        <span class="col-md-12 success-message"></span>
                                                        <h6 class="col-md-5">Account Name:</h6>
                                                        <span class="text-primary display_from_account_name_self col-md-7"></span>

                                                        <h6 class="col-md-5">Account Number:</h6>
                                                        <span class="text-primary display_from_account_no_self col-md-7"></span>

                                                        <h6 class="col-md-5">Available Balance:</h6>
                                                        <span
                                                            class="text-primary display_from_account_amount_self col-md-7"></span>

                                                        <h6 class="col-md-5">Account Currency:</h6>
                                                        <span class="text-primary display_currency_self col-md-7"></span>

                                                        <h6 class="col-md-5">Amount:</h6>
                                                        <span class="text-primary display_amount_self col-md-7"></span>


                                                        <h6 class="col-md-5">Receiver's Name: </h6>
                                                        <span class="text-success display_receiver_name_self col-md-7">{{ session()->get('userAlias') }}</span>

                                                        <h6 class="col-md-5">Receiver's Phone Number:</h6>
                                                        <span
                                                            class="text-success display_receiver_phoneNum_self col-md-7">{{ session()->get('customerPhone') }}</span>

                                                        <h6 class="col-md-5">Receiver's Address:</h6>
                                                        <span class="text-success display_receiver_address_self col-md-7"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group text-center display_button_print">

                                                    <span>&nbsp;
                                                        <span>&nbsp; <button class="btn btn-light btn-rounded" type="button"
                                                                id="print_receipt" onclick="window.print()">Print
                                                                Receipt
                                                            </button></span>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="reverse_cardless_page">
                    <div class="row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6  m-2" id="request_form_div"
                                                                            style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                                                            <br><br><br>

                                                                            <form action="#" class="select_beneficiary" id="payment_details_form" autocomplete="off"
                                                                                aria-autocomplete="none">
                                                                                @csrf

                                                                            <div class="col-md-12">
                                                                                        {{-- <br><br><br> --}}
                                                                                        <div class="row">
                                                                                            {{-- <div class="col-md-1"></div> --}}

                                                                                            <div class="col-md-12">




                                                        <div class="form-group row">

                                                            <b class="col-md-5 text-primary"> Reference Number &nbsp; <span
                                                                    class="text-danger">*</span></b>


                                                            <input type="text" class="form-control col-md-7"
                                                                id="reference_no"
                                                                placeholder="0098348789" autocomplete="off" required>
                                                            <br>

                                                        </div>

                                                        <br>
                                                        <div class="form-group row">

                                                            <b class="col-md-5 text-primary"> Receiver's Phone Number:
                                                                &nbsp; <span class="text-danger">*</span></b>

                                                            <input type="text" class="form-control col-md-7"
                                                                id="receiver_phoneNo_reverse"
                                                                placeholder="enter phone number" autocomplete="off"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                required>
                                                            <br>

                                                        </div>


                                                        <br>
                                                        <div class="form-group row">

                                                            <b class="col-md-5 text-primary" for="pin">
                                                                Enter Your Pin
                                                                <span class="text-danger">*</span></b>
                                                            <input type="password" class="form-control col-md-7"
                                                                id="user_pin_reverse"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">



                                                        </div>
                                                        <br><br><br>
                                                        <div class="form-group text-right ">
                                                            <button type="button"
                                                                class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success"
                                                                id="reverse_button">
                                                                <span id="reverse-text">Reverse</span>
                                                                <span class="spinner-border spinner-border-sm mr-1"
                                                                    id="spinner-reverse" role="status"
                                                                    aria-hidden="true"></span>
                                                                <span id="spinner-text-reverse">Loading...</span>
                                                            </button>
                                                        </div>


                                                    </div>

                                                    {{-- <div class="col-md-1"></div> --}}
                                                </div>

                                            </div>
                                        </form>

                                    </div>
                                    <div class="col-md-5">
                                        <br>
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="carouselExampleControls" class="carousel slide"
                                                    data-ride="carousel" style="min-height: 120px; max-height: auto;">
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="carousel-item active">
                                                            <img class="d-block img-fluid" style="min-height: 100%"
                                                                src="{{ asset('assets/images/ads/sim_korpor_ad_5.jpeg') }}"
                                                                alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block img-fluid" style="height: auto;"
                                                                src="{{ asset('assets/images/ads/sim_korpor_ad_6.jpeg') }}"
                                                                alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block img-fluid" style="min-height"
                                                                src="{{ asset('assets/images/ads/sim_korpor_ad_7.jpeg') }}"
                                                                alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls"
                                                        role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls"
                                                        role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="redeem_cardless_page">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6  m-2" id="request_form_div"
                                                                        style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                                                        <br><br><br>

                                                                        <form action="#" class="select_beneficiary" id="payment_details_form" autocomplete="off"
                                                                            aria-autocomplete="none">
                                                                            @csrf

                                                                        <div class="col-md-12">
                                                                                    {{-- <br><br><br> --}}
                                                                                    <div class="row">
                                                                                        {{-- <div class="col-md-1"></div> --}}

                                                                                        <div class="col-md-12 redeem_cardless">

                                                                                            <p class="text-muted font-14 m-b-20">
                                                                                                <span> <i class="fa fa-info-circle  text-red"></i> <b style="color:red;">Please
                                                                                                        Note:&nbsp;&nbsp;</b> <span class="">Enter the remittance and phone number for cardless payment details.

                                                                                                <hr>
                                                                                            </p>


                                                                                                    <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary"> Mobile Number &nbsp; <span
                                                                                                                class="text-danger">*</span></b>


                                                                                                        <input type="text" class="form-control col-md-7"
                                                                                                            id="mobile_no" autocomplete="off" required>
                                                                                                        <br>

                                                                                                    </div>

                                                                                                    <br>
                                                                                                    <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary"> Remittance Number:
                                                                                                            &nbsp; <span class="text-danger">*</span></b>

                                                                                                        <input type="text" class="form-control col-md-7"
                                                                                                            id="remittance_no"
                                                                                                            placeholder="enter phone number" autocomplete="off"
                                                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                                                            required>
                                                                                                        <br>

                                                                                                    </div>


                                                                                                    <br>
                                                                                                    {{-- <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary" for="pin">
                                                                                                            Enter Your Pin
                                                                                                            <span class="text-danger">*</span></b>
                                                                                                        <input type="password" class="form-control col-md-7"
                                                                                                            id="user_pin_reverse"
                                                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">



                                                                                                    </div> --}}
                                                                                                    <br><br><br>
                                                                                                    <div class="form-group text-right ">
                                                                                                        <button type="button"
                                                                                                            class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success "
                                                                                                            id="redeem_button">
                                                                                                            <span id="next-text">Next</span>
                                                                                                            <span class="spinner-border spinner-border-sm mr-1"
                                                                                                                id="spinner-next" role="status"
                                                                                                                aria-hidden="true"></span>
                                                                                                            <span id="spinner-text-next">Loading...</span>
                                                                                                        </button>
                                                                                                    </div>


                                                                                        </div>
                                                                                        <div class="col-md-12 cardless_details">

                                                                                                    <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary"> Receiver's Name:</b>


                                                                                                        <input type="text" class="form-control col-md-7"
                                                                                                            id="receiver_name_redeem" autocomplete="off" readonly>
                                                                                                        <br>

                                                                                                    </div>

                                                                                                    <br>
                                                                                                    <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary"> Receiver's Phone:
                                                                                                            </b>

                                                                                                        <input type="text" class="form-control col-md-7"
                                                                                                            id="receiver_phone_redeem"
                                                                                                             autocomplete="off"
                                                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                                                            readonly>
                                                                                                        <br>

                                                                                                    </div>


                                                                                                    <br>
                                                                                                    {{-- <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary" for="pin">
                                                                                                            Enter Your Pin
                                                                                                            <span class="text-danger">*</span></b>
                                                                                                        <input type="password" class="form-control col-md-7"
                                                                                                            id="user_pin_reverse"
                                                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">



                                                                                                    </div> --}}
                                                                                                    <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary"> Receiver's Address:
                                                                                                            </b>

                                                                                                        <input type="text" class="form-control col-md-7"
                                                                                                            id="receiver_address_redeem"
                                                                                                             autocomplete="off"
                                                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                                                            readonly>
                                                                                                        <br>

                                                                                                    </div>
                                                                                                    <br>

                                                                                                    <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary"> Amount:</b>

                                                                                                        <input type="text" class="form-control col-md-7"
                                                                                                            id="receiver_amount_redeem"
                                                                                                             autocomplete="off"
                                                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                                                            readonly>
                                                                                                        <br>

                                                                                                    </div>
                                                                                                    <br>

                                                                                                    <div class="form-group row">

                                                                                                        <b class="col-md-5 text-primary"> Enter OTP:
                                                                                                            &nbsp; <span class="text-danger">*</span></b>

                                                                                                        <input type="text" class="form-control col-md-7"
                                                                                                            id="receiver_otp_redeem"
                                                                                                            placeholder="One Time Password" autocomplete="off"
                                                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                                                                            required>
                                                                                                        <br>

                                                                                                    </div>



                                                                                                    <br><br><br>
                                                                                                    <div class="form-group text-right ">
                                                                                                        <button type="button"
                                                                                                            class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success"
                                                                                                            id="done_button">
                                                                                                            <span id="redeem-text">Redeem</span>
                                                                                                            <span class="spinner-border spinner-border-sm mr-1"
                                                                                                                id="spinner-redeem" role="status"
                                                                                                                aria-hidden="true"></span>
                                                                                                            <span id="spinner-text-redeem">Loading...</span>
                                                                                                        </button>
                                                                                                    </div>


                                                                                        </div>

                                                {{-- <div class="col-md-1"></div> --}}
                                                                                    </div>

                                                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-5">
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carouselExampleControls" class="carousel slide"
                                                data-ride="carousel" style="min-height: 120px; max-height: auto;">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" style="min-height: 100%"
                                                            src="{{ asset('assets/images/ads/sim_korpor_ad_9.jpeg') }}"
                                                            alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" style="height: auto;"
                                                            src="{{ asset('assets/images/ads/sim_korpor_ad_10.jpeg') }}"
                                                            alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" style="min-height"
                                                            src="{{ asset('assets/images/ads/sim_korpor_ad_7.jpeg') }}"
                                                            alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane" id="cardless_trans_page">
                    <div class="col-md-12">
                        <div class="cards_table row">
                            <div class="col-md-12 col-sm-12 col-xs-12 m-2 customize_card" id=""
                                    style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                    <div class="p-3 mt-4 mt-lg-0 rounded">
                                        <br>

                                        <div class="card-box">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                        Unreedeemed/Pending
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                        Completed
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                        Reversed
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane" id="home">

                                                    <div class="card mb-2 bg-info">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-8">
                                                                        <form class="form-inline">
                                                                            <div class="form-group">
                                                                                <select class="form-control unredeemed" required>
                                                                                    <option value="">Select Account Number</option>


                                                                                </select>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="text-sm-right">
                                                                            <button type="button"
                                                                                class="btn btn-primary waves-effect waves-light"
                                                                                id="submit_account_no_unredeemed"><i
                                                                                    class="mdi mdi-plus-circle mr-1"></i>Submit</button>
                                                                        </div>
                                                                    </div><!-- end col-->
                                                                </div>
                                                            </div> <!-- end card-body-->
                                                        </div> <!-- end card-->

                                                    <div class="table-responsive table-bordered accounts_display_area">
                                                        <table id="" class="table table-striped mb-0 ">
                                                            <thead>
                                                                <tr class="bg-primary text-white ">
                                                                    <td> <b> Reference Number </b> </td>
                                                                    <td> <b> Receiver's Name </b> </td>
                                                                    <td> <b> Receiver's Address </b> </td>
                                                                    <td> <b> Amount </b> </td>
                                                                    <td> <b>Status</b></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="background-color:white;" class="unredeem_cardless_list_display">


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane show active" id="profile">

                                                    <div class="card mb-2 bg-info">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <form class="form-inline">
                                                                        <div class="form-group">
                                                                            <select class="form-control from_account" required>
                                                                                <option value="">Select Account Number</option>


                                                                            </select>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="text-sm-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary waves-effect waves-light"
                                                                            id="submit_account_number_completed"><i
                                                                                class="mdi mdi-plus-circle mr-1"></i>Submit</button>
                                                                    </div>
                                                                </div><!-- end col-->
                                                            </div>
                                                        </div> <!-- end card-body-->
                                                    </div> <!-- end card-->

                                                    <div class="table-responsive table-bordered accounts_display_area">
                                                        <table id="" class="table mb-0 ">
                                                            <thead>
                                                                <tr class="bg-primary text-white ">
                                                                    <td> <b> Reference Number </b> </td>
                                                                    <td> <b> Receiver's Name </b> </td>
                                                                    <td> <b> Receiver's Address </b> </td>
                                                                    <td> <b> Amount </b> </td>
                                                                    <td> <b>Status</b></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="background-color:white;" class="redeemed_cardless_list_display">


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="messages">

                                                    <div class="card mb-2 bg-info">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <form class="form-inline">
                                                                        <div class="form-group">
                                                                            <select class="form-control reversed" required>
                                                                                <option value="">Select Account Number</option>


                                                                            </select>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="text-sm-right">
                                                                        <button type="button"
                                                                            class="btn btn-primary waves-effect waves-light"
                                                                            id="submit_account_no_reversed"><i
                                                                                class="mdi mdi-plus-circle mr-1"></i>Submit</button>
                                                                    </div>
                                                                </div><!-- end col-->
                                                            </div>
                                                        </div> <!-- end card-body-->
                                                    </div> <!-- end card-->


                                                    <div class="table-responsive table-bordered accounts_display_area">
                                                        <table id="" class="table mb-0 ">
                                                            <thead>
                                                                <tr class="bg-primary text-white ">
                                                                    <td> <b> Reference Number </b> </td>
                                                                    <td> <b> Receiver's Name </b> </td>
                                                                    <td> <b> Receiver's Address </b> </td>
                                                                    <td> <b> Amount </b> </td>
                                                                    <td> <b>Status</b></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody style="background-color:white;" class="reversed_cardless_list_display">


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                </div>


                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>




    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function from_account() {
            $.ajax({
                'type': 'GET',
                'url': 'get-accounts-api',
                "datatype": "application/json",
                success: function(response) {
                    console.log(response.data);
                    let data = response.data
                    $.each(data, function(index) {

                        $('.from_account').append($('<option>', {
                            value: data[index].accountType + '~' + data[index]
                                .accountDesc + '~' + data[index].accountNumber + '~' +
                                data[index].currency + '~' + data[index]
                                .availableBalance
                        }).text(data[index].accountType + '~' + data[index].accountNumber +
                            '~' + data[index].currency + '~' + data[index].availableBalance
                        ));

                        $('.unredeemed').append($('<option>', {
                            value: data[index].accountType + '~' + data[index]
                                .accountDesc + '~' + data[index].accountNumber + '~' +
                                data[index].currency + '~' + data[index]
                                .availableBalance
                        }).text(data[index].accountType + '~' + data[index].accountNumber +
                            '~' + data[index].currency + '~' + data[index].availableBalance
                        ));

                        $('.reversed').append($('<option>', {
                            value: data[index].accountType + '~' + data[index]
                                .accountDesc + '~' + data[index].accountNumber + '~' +
                                data[index].currency + '~' + data[index]
                                .availableBalance
                        }).text(data[index].accountType + '~' + data[index].accountNumber +
                            '~' + data[index].currency + '~' + data[index].availableBalance
                        ));

                    });
                },

            })
        }

        function get_unredeemed_cardless(accountNo) {
            $.ajax({
                "type": "GET",
                "url": "unredeem-cardless-request",
                'accountNo':from_account,
                "datatype": "application/json",
                success: function(response) {
                    // <td>  <a href="{{ url('account-enquiry?accountNumber=${data[index].accountNumber}') }}"> <b class="text-primary">${data[index].accountNumber} </b> </a></td>

                    if (response.data.length > 0) {
                        let data = response.data;

                        let unredeemed_cardless_list = response.data;
                        console.log(unredeemed_cardless_list);
                        $.each(data, function(index) {
                            $('.unredeem_cardless_list_display').append(
                                `<tr>

                                            <td> <b> ${data[index].REMITTANCE_REF} </b>  </td>
                                            <td> <b> ${data[index].BENEF_NAME}  </b>  </td>
                                            <td> <b> ${data[index].BENEF_ADDRESS1}  </b>  </td>
                                            <td> <b> ${data[index].REMITTANCE_AMOUNT}</b></td>
                                            <td> <strong><span class="badge badge-warning">&nbsp;Pending&nbsp;</span></strong> </td>
                                            </tr>`
                            )
                        })

                    }

                }
            })
        }


        function toaster(message, icon, timer) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: timer,
                timerProgressBar: false,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: icon,
                title: message
            })
        }



        $(document).ready(function() {

            $("#spinner").hide();
            $("#spinner-text").hide();
            $("#spinner-reverse").hide();
            $("#spinner-text-reverse").hide();
            $("#spinner-text-self").hide();
            $("#spinner-self").hide();
            $("#spinner-text-next").hide();
            $("#spinner-next").hide();
            $(".self_form").hide();
            $(".self_summary").hide();
            $("#spinner-redeem").hide();
            $("#spinner-text-redeem").hide();

            $(".cardless_details").hide();

            $("#redeem_button").click(function(){

                let mobile_no = $("#mobile_no").val();
                console.log(mobile_no);
                let remittance_no = $("#remittance_no").val();
                console.log(remittance_no);

                if (mobile_no =='' || remittance_no ==''){
                    toaster("fields must not be empty","error", 2000);
                    return false;
                }





                $.ajax({

                    type: 'POST',
                    url: 'cardless-otp',
                    datatype: "application/json",
                    data: {
                        "remittance_no":remittance_no,
                        "mobile_no": mobile_no
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {

                        console.log(response)

                        if (response.responseCode == '000') {
                            toaster(response.message, 'success', 20000);

                            $(".redeem_cardless").hide();
                            $(".cardless_details").show();
                            let receiver_name = response.data.beneficiaryName;
                            console.log(receiver_name);
                            $("#receiver_name_redeem").text(receiver_name);
                            $("#receiver_name_redeem").val(receiver_name);
                            let receiver_address = response.data.beneficiaryAddress;
                            // $("#receiver_address_redeem").text(receiver_address);
                            $("#receiver_address_redeem").val(receiver_address);
                            let receiver_amount = response.data.remittanceAmount;
                            $("#receiver_amount_redeem").val(receiver_amount);

                            let receiver_num = $("#mobile_no").val();
                            $("#receiver_phone_redeem").val(receiver_num);

                            let accountNo = response.data.accountNumber;

                            $("#done_button").click(function(){

                                let otp = $("#receiver_otp_redeem").val();
                                if(otp==''){
                                    toaster("Kindly enter the otp",'error', 20000);
                                    return false;
                                }

                                $.ajax({
                                    type: 'POST',
                                    url: 'redeem-cardless',
                                    datatype: "application/json",
                                    data: {
                                        "remittance_no":remittance_no,
                                        "mobile_no": mobile_no
                                    },
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(response) {

                                        console.log(response)

                                        if (response.responseCode == '000') {

                                        }
                                    }

                                });


                            });



                            $("#request_form_div").hide();
                            $('.display_button_print').show();
                            // alert("done test");

                        } else {

                            toaster(response.message, 'error', 9000);

                            $('#spinner').hide();
                            $('#spinner-text').hide();
                            $('.submit-text').show();
                            // $('#confirm_payment').show();
                            // $('#confirm_button').attr('disabled', false);
                        }
                    }
                });


            });


            // $("#")
            // $('#print_receipt').hide();

            $(".display_button_print").hide();


            //codes to display self or others transfer
            $("#inlineRadio1").click(function(){
                    var destination_type = $('input[type="radio"][name="radioInline"]:checked').val();
                    // console.log(destination_type);
                    $(".self_form").show();
                    $(".self_summary").show();
                    $(".others_form").hide();
                    $(".others_summary").hide();
                });

                $("#inlineRadio2").click(function(){
                    var destination_type = $('input[type="radio"][name="radioInline"]:checked').val();
                    // console.log(destination_type);
                    $(".others_form").show();
                    $(".others_summary").show();
                    $(".self_form").hide();
                    $(".self_summary").hide();

                });


            setTimeout(function() {
                from_account();
                // get_unredeemed_cardless();


            }, 200);

            function sweet_alert(message, icon, timer) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: false,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: icon,
                    title: message
                })
            }

            {{-- hide select accounts info --}}
            $(".from_account_display_info").hide()
            $(".to_account_display_info").hide()
            $("#schedule_payment_date").hide()
            $("#frequency").hide()
            $('#schedule_payment_contraint_input').hide()
            $('.display_schedule_payment_date').text('N/A')

            $("#cardless_payment_form").show()
            $("#cardless_payment_summary").hide()

            //show card after the from_account value changes
            $(".from_account").change(function() {
                var from_account = $(this).val()
                {{-- alert(from_account) --}}
                if (from_account == '' || from_account.trim() == undefined) {
                    {{-- alert('money') --}}
                    // $(".from_account_display_info").hide()

                } else {
                    from_account_info = from_account.split("~")


                    // var to_account = $('#to_account').val()

                    // set summary values for display
                    $(".display_from_account_type").text(from_account_info[0].trim())
                    $(".display_from_account_name").text(from_account_info[1].trim())
                    $(".display_from_account_no").text(from_account_info[2].trim())
                    $(".display_from_account_currency").text(from_account_info[3].trim())

                    $(".display_currency").text(from_account_info[3].trim()) // set summary currency

                    amt = from_account_info[4].trim()

                    $(".display_from_account_amount").text(formatToCurrency(Number(from_account_info[4].trim())))
                    $(".from_account_display_info").show()

                    //set summary value for display for self

                    $(".display_from_account_type_self").text(from_account_info[0].trim())
                    $(".display_from_account_name_self").text(from_account_info[1].trim())
                    $(".display_from_account_no_self").text(from_account_info[2].trim())
                    $(".display_from_account_currency_self").text(from_account_info[3].trim())

                    $(".display_currency_self").text(from_account_info[3].trim()) // set summary currency

                    amt = from_account_info[4].trim()

                    $(".display_from_account_amount_self").text(formatToCurrency(Number(from_account_info[4]
                        .trim())))
                    $(".from_account_display_info_self").show()
                }





            });

            //for testing process
            $('.from_account').change(function() {
                var from_account = $('.from_account').val();
                console.log(from_account);
                // alert(from_account);
            });

            $('.unredeemed').change(function(){
                var account = $('.unredeemed').val();
                console.log(account);
            })

            $('#amount').change(function() {
                var amount = $('#amount').val();
                console.log(amount);
            });

            $('#receiver_name').change(function() {
                var receiver_name = $('#receiver_name').val();
                console.log(receiver_name);
            });

            $('#receiver_phoneNum').change(function() {
                var receiver_phoneNum = $('#receiver_phoneNum').val();
                console.log(receiver_phoneNum);
            });

            $('#receiver_address').change(function() {
                var receiver_address = $('#receiver_address').val();
                console.log(receiver_address);
            });

            $('#user_pin').change(function() {
                var user_pin = $('#user_pin').val();
                console.log(user_pin);
            });
            //end of testing process


            //display for others
            $("#receiver_name").change(function() {
                var receiver_name = $("#receiver_name").val();
                $(".display_receiver_name").text(receiver_name);
            });

            $("#receiver_phoneNum").change(function() {
                var receiver_phoneNum = $("#receiver_phoneNum").val();
                $(".display_receiver_phoneNum").text(receiver_phoneNum);
            });

            $("#receiver_address").change(function() {
                var receiver_address = $("#receiver_address").val();
                $(".display_receiver_address").text(receiver_address);
            })

            $("#amount").change(function() {
                var amount = $("#amount").val();
                $(".display_amount").text(amount);
            });

            //cardless transfer details for self
            $('#amount_self').change(function() {
                var amount = $('#amount_self').val();
                console.log(amount);
            });

            $('#receiver_name_self').click(function() {
                var receiver_name = $('#receiver_name_self').val();
                console.log(receiver_name);
            });

            $('#receiver_phoneNum_self').change(function() {
                var receiver_phoneNum = $('#receiver_phoneNum_self').val();
                console.log(receiver_phoneNum);
            });

            $('#receiver_address_self').change(function() {
                var receiver_address = $('#receiver_address_self').val();
                console.log(receiver_address);
            });

            $('#user_pin_self').change(function() {
                var user_pin = $('#user_pin_self').val();
                console.log(user_pin);
            });
            //end of testing process


            $("#receiver_name_self").click(function() {
                var receiver_name = @json(session()->get('userAlias'));
                $(".display_receiver_name_self").text(receiver_name);
            });

            $("#receiver_phoneNum_self").change(function() {
                var receiver_phoneNum = $("#receiver_phoneNum_self").val();
                $(".display_receiver_phoneNum_self").text(receiver_phoneNum);
            });

            // $("#receiver_address_self").change(function() {
            //     var receiver_address = $("#receiver_address_self").val();
            //     $(".display_receiver_address_self").text(receiver_address);
            // })

            $("#amount_self").change(function() {
                var amount = $("#amount_self").val();
                $(".display_amount_self").text(amount);
            });

            $(".reference_no").change(function(){
                var reference_no = $(".reference_no").val();
                console.log(reference_no);
            });

            $(".receiver_phoneNo_reverse").change(function(){
                var receiver_phoneNo = $(".receiver_phoneNo_reverse").val();
                console.log(receiver_phoneNo);
            });






            function formatToCurrency(amount) {
                return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
            }

            // $("#next_button").click(function(e) {
            //     e.preventDefault();

            //     //go to the cardless payment summary page...
            //     // let from_account = $('#from_account').val();
            //     let from_account = $('#from_account').val().split('~');
            //     let transfer_amount = $('#amount').val();
            //     let receiver_name = $('#receiver_name').val();
            //     let receiver_phoneNum = $('#receiver_phoneNum').val();
            //     let receiver_address = $('#receiver_address').val();
            //     let sender_name = @json(session()->get('userAlias'));
            //     let user_pin = $('#user_pin').val();


            //     if (from_account == '' || amount == '' || receiver_name == '' || receiver_phoneNum ==
            //         '' || receiver_address == '') {
            //         toaster('Field must not be empty', 'error', 10000)
            //         return false
            //     } else {

            //         //hide the payment form and show the summary form
            //         $("#cardless_payment_form").hide()
            //         $("#cardless_payment_summary").show();

            //         amt = from_account_info[4].trim();
            //         if (amt < transfer_amount) {
            //             toaster('Insufficient account balance', 'error', 9000);
            //             return false
            //         } else {

            //             //display this is the payment summary
            //             $("#display_amount").text(transfer_amount);
            //             $("#display_receiver_name").text(receiver_name);
            //             $("#display_receiver_address").text(receiver_name);
            //             $("#display_receiver_phoneNum").text(receiver_phoneNum);



            //         }


            //     }

            //     $("#cardless_payment_form").hide();
            //     $("#cardless_payment_summary").show();



            // });


            // $("#back_button").click(function(e) {
            //     e.preventDefault()
            //     $("#cardless_payment_summary").hide();
            //     $("#cardless_payment_form").show();

            // });

            $('#submit_account_no_unredeemed').click(function() {


                let from_account = $(".unredeemed").val();
                let from_account_info = from_account.split("~")
                let from_account_value = from_account_info[2].trim();
                console.log(from_account_value);

                            $.ajax({

                                type: 'POST',
                                url: 'unredeem-cardless-request',
                                datatype: "application/json",
                                data:{
                                    'accountNo':from_account_value,
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {

                                    console.log(response)

                                    if (response.data.length > 0) {
                                        let data = response.data;

                                        let unredeemed_cardless_list = response.data;
                                        console.log(unredeemed_cardless_list);
                                        $.each(data, function(index) {
                                            $('.unredeem_cardless_list_display').append(
                                                `<tr>

                                                            <td> <b> ${data[index].REMITTANCE_REF} </b>  </td>
                                                            <td> <b> ${data[index].BENEF_NAME}  </b>  </td>
                                                            <td> <b> ${data[index].BENEF_ADDRESS1}  </b>  </td>
                                                            <td> <b> ${formatToCurrency(parseFloat(data[index].REMITTANCE_AMOUNT))}</b></td>
                                                            <td> <h5><span class="badge badge-warning">&nbsp;Pending&nbsp;</span></h5> </td>
                                                            </tr>`
                                            )
                                        })

                                    }
                                }
                            });


            });

            $('#submit_account_no_reversed').click(function() {
                let from_account = $(".reversed").val();
                let from_account_info = from_account.split("~")
                let from_account_value = from_account_info[2].trim();
                console.log(from_account_value);

                            $.ajax({

                                type: 'POST',
                                url: 'reversed-cardless-request',
                                datatype: "application/json",
                                data:{
                                    'accountNo':from_account_value,
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {

                                    console.log(response)

                                    if (response.data.length > 0) {
                                        let data = response.data;

                                        let unredeemed_cardless_list = response.data;
                                        console.log(unredeemed_cardless_list);
                                        $.each(data, function(index) {
                                            $('.reversed_cardless_list_display').append(
                                                `<tr>

                                                            <td> <b> ${data[index].REMITTANCE_REF} </b>  </td>
                                                            <td> <b> ${data[index].BENEF_NAME}  </b>  </td>
                                                            <td> <b> ${data[index].BENEF_ADDRESS1}  </b>  </td>
                                                            <td> <b> ${formatToCurrency(parseFloat(data[index].REMITTANCE_AMOUNT))}</b></td>
                                                            <td> <h5><span class="badge badge-danger">&nbsp;Cancelled&nbsp;</span></h5> </td>
                                                            </tr>`
                                            )
                                        })

                                    }
                                }
                            });


            });



            $('#confirm_button').click(function() {
                // alert('i have been clicked');
                var from_account = $('.from_account').val();

                // let from_account = from_account_value;
                let transfer_amount = $('#amount').val();
                console.log(transfer_amount);
                // alert('');
                let receiver_name = $('#receiver_name').val();
                let receiver_phoneNum = $('#receiver_phoneNum').val();
                let receiver_address = $('#receiver_address').val();
                let sender_name = @json(session()->get('userAlias'));
                let user_pin = $('#user_pin').val();
                // console.log(sender_name);





                if (from_account.trim() == '' || transfer_amount == '' || receiver_name == '' || receiver_phoneNum =='' || receiver_address == '' || user_pin=='') {
                        // alert('fields must not be empty');
                    toaster('Fields must not be empty', 'error', 10000);
                    return false;
                } else {

                    //hide the payment form and show the summary form
                    $("#cardless_payment_form").hide()
                    $("#cardless_payment_summary").show();

                    amt = from_account_info[4].trim();
                    if (amt < transfer_amount) {
                        toaster('Insufficient account balance', 'error', 9000);
                        return false
                    } else {

                        //display this is the payment summary
                        $("#display_amount").text(transfer_amount);
                        $("#display_receiver_name").text(receiver_name);
                        $("#display_receiver_address").text(receiver_name);
                        $("#display_receiver_phoneNum").text(receiver_phoneNum);



                    }

                    if (user_pin == "") {
                        toaster('enter your pin', 'error', 9000);
                        // console.log("Error is from here.");
                        return false;
                    } else {

                        $('#spinner').show(),
                            $('#spinner-text').show(),
                            // $('#print_receipt').hide();
                            $('.submit-text').hide();
                            let from_account_value = from_account_info[2].trim();
                        $.ajax({

                            'type': 'POST',
                            'url': 'initiate-cardless',
                            "datatype": "application/json",
                            'data': {
                                'amount': transfer_amount,
                                'debit_account': from_account_value,
                                'pin_code': user_pin,
                                'receiver_address': receiver_address.trim(),
                                'receiver_name': receiver_name.trim(),
                                'receiver_phone': receiver_phoneNum,
                                'sender_name': sender_name.trim()
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {

                                console.log(response)

                                if (response.responseCode == '000') {
                                    toaster(response.message, 'success', 20000);
                                    $("#request_form_div").hide();
                                    $('.display_button_print').show();
                                } else {

                                    toaster(response.message, 'error', 9000);

                                    $('#spinner').hide();
                                    $('#spinner-text').hide();
                                    $('.submit-text').show();
                                    // $('#confirm_payment').show();
                                    // $('#confirm_button').attr('disabled', false);
                                }
                            }
                        });
                    }
                }
            });

            $('#confirm_button_self').click(function() {
                // alert('i have been clicked');
                let from_account = $('.from_account').val();
                let transfer_amount = $('#amount_self').val();
                console.log(transfer_amount);
                // alert('');
                let receiver_name = $('#receiver_name_self').val();
                let receiver_phoneNum = $('#receiver_phoneNum_self').val();
                let receiver_address = $('#receiver_address_self').val();
                let sender_name = @json(session()->get('userAlias'));
                let user_pin = $('#user_pin_self').val();
                // console.log(sender_name);



                //

                if (from_account.trim() == '' || transfer_amount == '' || receiver_name == '' || receiver_phoneNum =='' || user_pin=='') {
                        // alert('fields must not be empty');
                    toaster('Fields must not be empty', 'error', 10000);
                    return false;
                } else {

                    //hide the payment form and show the summary form
                    $("#cardless_payment_form").hide()
                    $("#cardless_payment_summary").show();

                    amt = from_account_info[4].trim();
                    if (amt < transfer_amount) {
                        toaster('Insufficient account balance', 'error', 9000);
                        return false
                    } else {

                        //display this is the payment summary
                        $("#display_amount").text(transfer_amount);
                        $("#display_receiver_name").text(receiver_name);
                        $("#display_receiver_address").text(receiver_name);
                        $("#display_receiver_phoneNum").text(receiver_phoneNum);



                    }

                    if (user_pin == "") {
                        toaster('enter your pin', 'error', 9000);
                        // console.log("Error is from here.");
                        return false;
                    } else {

                        $('#spinner').show(),
                            $('#spinner-text').show(),
                            // $('#print_receipt').hide();
                            $('.submit-text').hide();
                            let from_account_value = from_account_info[2].trim();
                        $.ajax({

                            'type': 'POST',
                            'url': 'initiate-cardless',
                            "datatype": "application/json",
                            'data': {
                                'amount': transfer_amount,
                                'debit_account': from_account_value,
                                'pin_code': user_pin,
                                'receiver_address': receiver_address.trim(),
                                'receiver_name': receiver_name.trim(),
                                'receiver_phone': receiver_phoneNum,
                                'sender_name': sender_name.trim()
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {

                                console.log(response)

                                if (response.responseCode == '000') {
                                    toaster(response.message, 'success', 20000);
                                    $("#request_form_div").hide();
                                    $('.display_button_print').show();
                                } else {

                                    toaster(response.message, 'error', 9000);

                                    $('#spinner').hide();
                                    $('#spinner-text').hide();
                                    $('.submit-text').show();
                                    // $('#confirm_payment').show();
                                    // $('#confirm_button').attr('disabled', false);
                                }
                            }
                        });
                    }
                }
            });

            $('#reverse_button').click(function(){


                let reference_no = $("#reference_no").val();
                let receiver_phoneNo = $("#receiver_phoneNo_reverse").val();
                let pin = $("#user_pin_reverse").val();



                // if (from_account == '' || amount == '' || receiver_name == '' || receiver_phoneNum ==
                //     '' || receiver_address == '') {
                //     toaster('Field must not be empty', 'error', 10000)
                //     return false
                // }

                if(reference_no =="" || receiver_phoneNo == "" || pin ==""){
                    toaster("Fields must not be empty","error", 10000)
                    return false;
                }
                else{

                    $("#spinner-reverse").show();
                    $("#spinner-text-reverse").show();
                    $("#reverse-text").hide();

                    $.ajax({

                    'type' : 'POST',
                    'url' : 'reverse-cardless',
                    "datatype" : "application/json",
                    'data' : {
                        'reference_no' : reference_no,
                        'receiver_phoneNo' : receiver_phoneNo,
                        'pin' : pin
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:
                    function(response){


                        if(response.responseCode == '000'){
                            toaster(response.message, 'success', 2000)
                            // var data = response.data.loanSchedule
                            // console.log(response)
                            $('#spinner-text-reverse').hide()
                            $('#spinner-reverse').hide()
                            $('#reverse-text').show();
                            setTimeout(function() {
                                window.location.reload();
                                }, 20000);

                            }
                            else
                            {

                            toaster(response.message, 'error', 9000 );
                            $('#spinner-text-reverse').hide()
                            $('#spinner-reverse').hide()
                            $('#reverse-text').show();
                            }
                    },
                    error: function(xhr, status, error){
                        $('#submit').attr('disabled',false);
                        $('#spinner').hide()
                        $('#spinner-text').hide()

                        $('#log_in').show()
                        $('#error_message').text("Connection Error")
                        $('#failed_login').show()
                    }
                    });


                }

            });








        });

    </script>
@endsection
