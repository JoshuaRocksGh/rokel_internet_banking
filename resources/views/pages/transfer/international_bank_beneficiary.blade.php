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

<div class="container-fluid">
    <br>
    <!-- start page title -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-primary">
                <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                INTERNATIONAL BANK BENEFICIARY
            </h4>
        </div>

        <div class="col-md-6 text-right">
            <h6>

                <span class="flaot-right">
                    <b class="text-primary"> Transfer </b> &nbsp; > &nbsp; <b class="text-primary"> Add Beneficiary </b> &nbsp; > &nbsp; <b class="text-danger">International Bank Beneficiary</b>


                </span>

            </h6>

        </div>

        <div class="col-md-12 ">
            <hr class="text-primary" style="margin: 0px;">
        </div>

    </div>
</div>



    <!-- Start Content-->
    <div class="container-fluid">
        <br><br>


        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="card-body">



                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 rtgs_card m-2" style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">


                                <div class="">
                                    <div class=" ">
                                        <div class="card-body">

                                            <br><br><br>

                                            <div id="rootwizard">
                                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                                    <li class="nav-item" id="details_tab" data-target-form="#accountForm">
                                                        <a href="#first" data-toggle="tab"
                                                            class="nav-link rounded-0 pt-2 pb-2">
                                                            <span class="d-none d-sm-inline">Bank Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" id="account_tab" data-target-form="#profileForm">
                                                        <a href="#second" data-toggle="tab"
                                                            class="nav-link rounded-0 pt-2 pb-2">
                                                            <span class="d-none d-sm-inline">Account Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" id="beneficiary_tab" data-target-form="#otherForm">
                                                        <a href="#third" data-toggle="tab"
                                                            class="nav-link rounded-0 pt-2 pb-2">
                                                            <span class="d-none d-sm-inline">Beneficiary Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" id="summary_tab" data-target-form="#summaryForm">
                                                        <a href="#fourth" data-toggle="tab"
                                                            class="nav-link rounded-0 pt-2 pb-2">
                                                            <span class="d-none d-sm-inline">Summary</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content mb-0 b-0 pt-0">

                                                    <div class="tab-pane active" id="first">
                                                        <form id="international_bank_details" action="#"
                                                            class="form-horizontal" autocomplete="off"
                                                            aria-autocomplete="off">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <b class="text-primary"> Beneficiary Bank
                                                                        Details</b><br><br>
                                                                    <div class="form-group row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label for="form-group" class="text-primary">Bank Country &nbsp;  <span
                                                                                    class="text-danger">*</span></label>
                                                                            <select class="custom-select" id="bank_country"
                                                                                name="bank_country" required>
                                                                                <option value="">Bank Country</option>
                                                                                <option value="Ghana">Ghana</option>

                                                                            </select>
                                                                            <br><br>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label for="form-group" class="text-primary">Bank Name &nbsp; <span
                                                                                    class="text-danger">*</span></label>
                                                                            <select class="custom-select" id="bank_name"
                                                                                name="bank_name" required>
                                                                                <option value="">Bank Name</option>
                                                                                {{-- <option value="High-Street">High Street</option> --}}

                                                                            </select>
                                                                            <br><br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label for="form-group" class="text-primary">Bank City &nbsp; <span
                                                                                    class="text-danger">*</span></label>
                                                                            <select class="custom-select" id="bank_city"
                                                                                name="bank_city">
                                                                                <option value="">Bank City</option>
                                                                                <option value="Accra">Accra</option>

                                                                            </select>
                                                                            <br><br>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label for="form-group" class="text-primary">Bank Branch &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <select class="custom-select" id="bank_branch"
                                                                                name="bank_branch">
                                                                                <option value="">Bank Branch</option>
                                                                                {{-- <option value="High-Street">High Street</option> --}}

                                                                            </select>
                                                                            <br><br>
                                                                        </div>



                                                                        <div class="col-md-6">
                                                                            <label for="form-group" class="text-primary">Bank Address &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" id="bank_address"
                                                                                name="bank_address" class="form-control"
                                                                                placeholder="Bank Address" required>
                                                                            <br><br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label for="form-group" class="text-primary">Swift Code &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" id="swift_code" name="swift"
                                                                                class="form-control"
                                                                                placeholder="Swift Code" required>
                                                                            <br><br>
                                                                        </div>

                                                                    </div>

                                                                    <button
                                                                        class="btn btn-primary btn-rounded waves-effect waves-light float-right"
                                                                        type="submit" id="bank_details_next_btn">&nbsp; Next &nbsp;<i class="fe-arrow-right"></i></button>

                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </form>
                                                    </div>

                                                    <div class="tab-pane fade" id="second">
                                                        <form id="international_bank_account_details"
                                                            class="form-horizontal" autocomplete="off"
                                                            aria-autocomplete="off">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <b class="text-primary"> Beneficiary Account
                                                                        Details</b><br><br>

                                                                    <div class="form-group row mb-3">
                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary"> Account Number &nbsp;<span
                                                                                    class="text-danger">*</span></label>

                                                                            <input type="text" id="acc_number" name="acc_number" class="form-control"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Account number/BBAN" required>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary"> Account Name &nbsp;<span
                                                                                    class="text-danger">*</span></label>

                                                                            <input type="text" id="acc_name" name="acc_name"
                                                                                class="form-control"
                                                                                placeholder="Account name" required>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            {{-- <input type="text" id="surname3" name="surname3" class="form-control" required> --}}
                                                                            <label class="form-group text-primary" >Currency &nbsp;<span
                                                                                    class="text-danger">*</span></label>

                                                                            <select class="custom-select" id="currency"
                                                                                name="currency" required>
                                                                                <option value="">Currency</option>
                                                                                {{-- <option value="GHS">GHS</option> --}}

                                                                            </select>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary" >Firstname &nbsp;<span class="text-danger">*</span></label>
                                                                            <input type="text" id="firstname"
                                                                                name="firstname" class="form-control"
                                                                                placeholder="Firstname" required>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary">Lastname &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" id="lastname" name="lastname"
                                                                                class="form-control" placeholder="Lastname"
                                                                                required>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary" >Middlename &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" id="middlename"
                                                                                name="middlename" class="form-control"
                                                                                placeholder="Middlename" required>
                                                                            <br>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                            <ul class="list-inline wizard mb-0">
                                                                <li class=" list-inline-item"><button
                                                                        class="btn btn-secondary btn-rounded waves-effect waves-light"
                                                                        type="button"
                                                                        id="account_deatils_back_btn"> &nbsp;<i class="mdi mdi-reply-all"></i> Back &nbsp;</button></li>

                                                                <li class="list-inline-item float-right"><button
                                                                        class="btn btn-primary btn-rounded waves-effect waves-light"
                                                                        id="account_details_next_btn"
                                                                        type="submit"> &nbsp; Next &nbsp;<i class="fe-arrow-right"></i></button></li>
                                                            </ul>
                                                        </form>
                                                    </div>

                                                    <div class="tab-pane fade" id="third">
                                                        <form id="international_bank_beneficiary_details" method=""
                                                            action="#" class="form-horizontal" autocomplete="off"
                                                            aria-autocomplete="off">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <b class="text-primary"> Beneficiary Personal
                                                                        Details</b><br><br>


                                                                    <div class="form-group row mb-3">
                                                                        {{-- <label class="col-md-3 col-form-label" for="name3"> First name</label> --}}
                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary">Beneficiary Name &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" id="beneficiary_name"
                                                                                name="beneficiary_name" class="form-control"
                                                                                placeholder="Beneficiary name" required>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary" >Beneficiary Email &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" id="beneficiary_email"
                                                                                name="beneficiary_name" class="form-control"
                                                                                placeholder="Beneficiary email" required>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            {{-- <input type="text" id="surname3" name="surname3" class="form-control" required> --}}
                                                                            <label class="form-group text-primary">Nationality &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <select class="custom-select" id="nationality"
                                                                                name="nationality" required>
                                                                                <option value="">Nationality</option>
                                                                                <option value="Ghanaian">Ghanaian</option>

                                                                            </select>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            {{-- <input type="text" id="surname3" name="surname3" class="form-control" required> --}}
                                                                            <label class="form-group text-primary">Country of Residence &nbsp;<span
                                                                                    class="text-danger">*</span></label>

                                                                            <select class="custom-select"
                                                                                id="country_of_residence" name="residence"
                                                                                required>
                                                                                <option value="">Country of residence
                                                                                </option>
                                                                                <option value="Ghana">Ghana</option>

                                                                            </select>
                                                                            <br><br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            {{-- <input type="text" id="surname3" name="surname3" class="form-control" required> --}}
                                                                            <label class="form-group text-primary">City &nbsp;<span
                                                                                    class="text-danger">*</span></label>

                                                                            <select class="custom-select" id="city"
                                                                                name="city" required>
                                                                                <option value="">City</option>
                                                                                <option value="Accra">Accra</option>

                                                                            </select>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary">Address &nbsp;<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" id="address" name="address"
                                                                                class="form-control" placeholder="Address"
                                                                                required>
                                                                            <br>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label class="form-group text-primary">Telephone &nbsp;<span class="text-danger">*</span></label>
                                                                            <input type="text" id="telephone" name="address"
                                                                                class="form-control" placeholder="Telephone"
                                                                                required>
                                                                            <br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="col-md-10">
                                                                                <br>
                                                                                <div class="form-group">

                                                                                    <div class="checkbox checkbox-primary mb-2"
                                                                                        id="transfer_email">
                                                                                        <input id="checkbox2"
                                                                                            type="checkbox">
                                                                                        <label class="custom-control-label"
                                                                                            for="checkbox2">
                                                                                            Email beneficiary when a
                                                                                            transfer is made
                                                                                        </label>
                                                                                    </div>

                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <!-- end col -->
                                                            </div>
                                                            <!-- end row -->
                                                            <ul class="list-inline wizard mb-0">
                                                                <li class=" list-inline-item"><button
                                                                        class="btn btn-secondary btn-rounded waves-effect waves-light"
                                                                        type="back"
                                                                        id="beneficiary_details_back_btn">&nbsp;<i class="mdi mdi-reply-all"></i> Back &nbsp;</button></li>

                                                                <li class="list-inline-item float-right"><button
                                                                        class="btn btn-primary btn-rounded waves-effect waves-light"
                                                                        type="submit"
                                                                        id="beneficiary_details_submit_btn"> &nbsp; Submit &nbsp;</button>
                                                                </li>
                                                            </ul>
                                                        </form>
                                                    </div>

                                                    <div class="tab-pane fade " id="fourth">
                                                        <form id="international_bank_summary" method="POST" action="#"
                                                            class="form-horizontal" autocomplete="off"
                                                            aria-autocomplete="off">
                                                            @csrf
                                                            <div class="row card card-body">
                                                                <div class="col-12">
                                                                    <b class="text-primary"> Summary</b><br><br>
                                                                    <div class="form-group row mb-3">

                                                                        <div class="col-md-6">

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Bank Country: </label>
                                                                                <span class="font-weight-bold text-primary col-md-6"
                                                                                    id="display_bank_country"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Bank branch:</label>
                                                                                <span class="font-weight-bold text-primary col-md-6"
                                                                                    id="display_bank_branch"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Bank Address:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_bank_address"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Account Number:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_account_number"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Currency:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_currency"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Lastname:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_lastname"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Beneficiary Name:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_beneficiary_name"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Nationality:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_nationality"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> City:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_city"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6 ">Telephone:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_telephone"></span>
                                                                                <br>
                                                                            </div>

                                                                        </div>


                                                                        <div class="col-md-6">

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Bank City:</label>
                                                                                <span class=" col-md-6 font-weight-bold text-primary"
                                                                                    id="display_bank_city"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Bank Name:</label>
                                                                                <span class="font-weight-bold text-primary col-md-6"
                                                                                    id="display_bank_name"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Swift Code:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_swift_code"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Account Name: </label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_account_name"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Firstname:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_firstname"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Middlename:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_middlename"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6"> Beneficiary Email:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_beneficiary_email"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6">Country of Residence:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_country_of_residence"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6">Address:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_address"></span>
                                                                                <br>
                                                                            </div>

                                                                            <div class="col-md-12 row">
                                                                                <label class="col-md-6">Email Beneficiary:</label>
                                                                                <span class="font-weight-bold col-md-6 text-primary"
                                                                                    id="display_transfer_email"></span>
                                                                                <br>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- <button class="btn btn-primary btn-roundFimged waves-effect waves-light" type="submit" id="bank_add_beneficiary_btn">Add Beneficiary <i class="fe-arrow-right"></i></button> --}}
                                                            <ul class="list-inline wizard mb-0">
                                                                <li class=" list-inline-item"><button
                                                                        class="btn btn-secondary btn-rounded waves-effect waves-light"
                                                                        type="back"
                                                                        id="bank_add_beneficiary_back_btn">&nbsp;<i class="mdi mdi-reply-all"></i> Back &nbsp;</button>
                                                                </li>

                                                                <li class="list-inline-item float-right"><button
                                                                        class="btn btn-primary btn-rounded waves-effect waves-light"
                                                                        type="submit" id="bank_add_beneficiary_btn">Add
                                                                        Beneficiary </button></li>
                                                            </ul>
                                                        </form>
                                                    </div>


                                                    {{-- <ul class="list-inline wizard mb-0">
                                                    <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-color">Previous</a>
                                                    </li>
                                                    <li class="next list-inline-item float-right"><a href="javascript: void(0);" class="btn btn-color">Next</a></li>
                                                </ul> --}}

                                                </div> <!-- tab-content -->
                                            </div> <!-- end #rootwizard-->

                                        </div> <!-- end card-body -->
                                    </div> <!-- end card-->
                                </div> <!-- end col -->

                            </div> <!-- end col -->

                            <div class="col-md-1"></div>
                        </div>
                        <!-- end row -->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            function get_currency() {
                $.ajax({
                    'type': 'GET',
                    'url': 'get-currency-list-api',
                    "datatype": "application/json",
                    success: function(response) {
                        {{-- console.log(response.data); --}}
                        let data = response.data
                        $.each(data, function(index) {

                            $('#currency').append($('<option>', {
                                value: data[index].isoCode + '~' + data[index].description
                            }).text(data[index].isoCode + '~' + data[index].description));

                        });

                    },

                })
            }


            function bank_list() {
                $.ajax({
                    'type': 'GET',
                    'url': 'get-bank-list-api',
                    "datatype": "application/json",
                    success: function(response) {
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                            $('#bank_name').append($('<option>', {
                                value: data[index].bankCode + '~' + data[index].bankDescription
                            }).text(data[index].bankDescription));

                        });

                    },

                })
            };


            function bank_list() {
                $.ajax({
                    'type': 'GET',
                    'url': 'get-bank-list-api',
                    "datatype": "application/json",
                    success: function(response) {
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                            $('#bank_name').append($('<option>', {
                                value: data[index].bankCode + '~' + data[index].bankDescription
                            }).text(data[index].bankDescription));

                        });

                    },

                })
            };


            function bank_branches_list() {
                $.ajax({
                    'type': 'GET',
                    'url': 'get-bank-branches-list-api',
                    "datatype": "application/json",
                    success: function(response) {
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                            $('#bank_branch').append($('<option>', {
                                value: data[index].branchCode + '~' + data[index].branchDescription
                            }).text(data[index].branchDescription));

                        });

                    },

                })
            };

            $(document).ready(function() {


                setTimeout(function() {
                    get_currency();
                    bank_list();
                    bank_branches_list();
                }, 2000);

                {{-- $("#rootwizard").click(function(e){
                    e.preventDefault();
                    return false;
                }) --}}

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
                };

                $('#details_tab').addClass('active show');
                $('#international_bank_account_details').hide();
                $('#international_bank_beneficiary_details').hide();
                $('#international_bank_summary').hide();

                $('#bank_details_next_btn').click(function(e) {
                    e.preventDefault();

                    var bank_country = $('#bank_country').val();
                    var bank_city = $('#bank_city').val();
                    var bank_branch = $('#bank_branch').val();
                    var bank_name = $('#bank_name').val();
                    var bank_address = $('#bank_address').val();
                    var swift_code = $('#swift_code').val();


                    if (bank_country == '' || bank_country == undefined || bank_city == '' || bank_city ==
                        undefined || bank_branch == '' || bank_branch == undefined || bank_name == '' ||
                        bank_name == undefined || bank_address == '' || bank_address == undefined ||
                        swift_code == '' || swift_code == undefined) {
                        toaster('Fields must not be empty', 'error', 6000);
                        {{-- alert(); --}}

                        return false;
                    } else {
                        $('#details_tab').addClass('active show');
                        $('#account_tab').addClass('active show');
                        $('#first').addClass('active show');
                        $('#second').addClass('active show');

                        $('#international_bank_details').hide();
                        $('#international_bank_account_details').toggle('500');
                    }

                })

                // Return to Beneficiary Bank Details

                $('#account_deatils_back_btn').click(function(e) {
                    e.preventDefault();

                    $('#account_tab').removeClass('active show');
                    $('#details_tab').addClass('active show');

                    $('#second').removeClass('active show');
                    $('#first').addClass('active');

                    $('#international_bank_account_details').hide();
                    $('#international_bank_details').toggle('500');



                })

                $('#account_details_next_btn').click(function(e) {
                    e.preventDefault();

                    var acc_number = $('#acc_number').val();
                    var acc_name = $('#acc_name').val();
                    var currency = $('#currency').val();
                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var middlename = $('#middlename').val();

                    if (acc_number == '' || acc_number == undefined ||
                        acc_name == '' || acc_name == undefined ||
                        currency == '' || currency == undefined ||
                        firstname == '' || firstname == undefined ||
                        lastname == '' || lastname == undefined ||
                        middlename == '' || middlename == undefined
                    ) {
                        toaster('Fields must not be empty', 'error', 6000);

                        return false;
                    } else {


                        $('#account_tab').addClass('active show');
                        $('#beneficiary_tab').addClass('active show');

                        $('#second').addClass('active show');
                        $('#third').addClass('active show');

                        $('#international_bank_account_details').hide();
                        $('#international_bank_beneficiary_details').toggle('500');

                    }


                })

                $('#beneficiary_details_back_btn').click(function(e) {
                    e.preventDefault();


                    $('#beneficiary_tab').removeClass('active show');
                    $('#account_tab').addClass('active show');

                    $('#third').removeClass('active show');
                    $('#second').addClass('active show');

                    $('#international_bank_beneficiary_details').hide();
                    $('#international_bank_account_details').toggle('500');


                })

                $('#beneficiary_details_submit_btn').click(function(e) {
                    e.preventDefault();


                    var bank_country = $('#bank_country').val();
                    $('#display_bank_country').text(bank_country);
                    console.log()

                    var bank_city = $('#bank_city').val();
                    $('#display_bank_city').text(bank_city);

                    var bank_branch_ = $('#bank_branch').val().split('~');
                    var bank_branch = bank_branch_[1];
                    $('#display_bank_branch').text(bank_branch);

                    var bank_name_ = $('#bank_name').val().split('~');
                    var bank_name = bank_name_[1]
                    $('#display_bank_name').text(bank_name);

                    var bank_address = $('#bank_address').val();
                    $('#display_bank_address').text(bank_address);

                    var swift_code = $('#swift_code').val();
                    $('#display_swift_code').text(swift_code);

                    var acc_number = $('#acc_number').val();
                    $('#display_account_number').text(acc_number);

                    var acc_name = $('#acc_name').val();
                    $('#display_account_name').text(acc_name);

                    var currency = $('#currency').val();
                    {{-- var currency = currency_[1] --}}
                    $('#display_currency').text(currency);

                    var firstname = $('#firstname').val();
                    $('#display_firstname').text(firstname);

                    var lastname = $('#lastname').val();
                    $('#display_lastname').text(lastname);

                    var middlename = $('#middlename').val();
                    $('#display_middlename').text(middlename);

                    {{--  --}}
                    var beneficiary_name = $('#beneficiary_name').val();
                    $('#display_beneficiary_name').text(beneficiary_name);

                    var beneficiary_email = $('#beneficiary_email').val();
                    $('#display_beneficiary_email').text(beneficiary_email);

                    var nationality = $('#nationality').val();
                    $('#display_nationality').text(nationality);

                    var country_of_residence = $('#country_of_residence').val();
                    $('#display_country_of_residence').text(country_of_residence);

                    var city = $('#city').val();
                    $('#display_city').text(city);

                    var address = $('#address').val();
                    $('#display_address').text(address);

                    var telephone = $('#telephone').val();
                    $('#display_telephone').text(telephone);

                    var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();
                    if (transfer_email == 'on') {
                        $('#display_transfer_email').text('Yes');
                    } else {
                        $('#display_transfer_email').text('No');
                    };

                    if (beneficiary_name == '' || beneficiary_name == undefined ||
                        beneficiary_email == '' || beneficiary_email == undefined ||
                        nationality == '' || nationality == undefined ||
                        country_of_residence == '' || country_of_residence == undefined ||
                        city == '' || city == undefined ||
                        address == '' || address == undefined ||
                        telephone == '' || telephone == undefined
                    ) {
                        toaster('Fields must not be empty', 'error', 6000);

                        return false;
                    } else {
                        $('#beneficiary_tab').addClass('active show');
                        $('#summary_tab').addClass('active show');

                        $('#third').addClass('active show');
                        $('#fourth').addClass('active show');

                        $('#international_bank_beneficiary_details').hide();
                        $('#international_bank_summary').toggle('500');
                    }




                })

                $('#bank_add_beneficiary_back_btn').click(function(e) {
                    e.preventDefault();


                    $('#summary_tab').removeClass('active show');
                    $('#beneficiary_tab').addClass('active show');

                    $('#fourth').removeClass('active show');
                    $('#third').addClass('active show');

                    $('#international_bank_summary').hide();
                    $('#international_bank_beneficiary_details').toggle('500');
                })

                // SUBMIT TO API


                $('#bank_add_beneficiary_btn').click(function(e) {
                    e.preventDefault();


                    var bank_country = $('#bank_country').val();
                    var bank_city = $('#bank_city').val();
                    var bank_branch_ = $('#bank_branch').val().split('~');
                    var bank_branch = bank_branch_[1];
                    var bank_name_ = $('#bank_name').val().split('~');
                    var bank_name = bank_name_[1];
                    var bank_address = $('#bank_address').val();
                    var swift_code = $('#swift_code').val();

                    var acc_number = $('#acc_number').val();
                    var acc_name = $('#acc_name').val();
                    var currency_ = $('#currency').val().split('~');
                    var currency = currency_[0];
                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var middlename = $('#middlename').val();

                    var beneficiary_name = $('#beneficiary_name').val();
                    var beneficiary_email = $('#beneficiary_email').val();
                    var nationality = $('#nationality').val();
                    var country_of_residence = $('#country_of_residence').val();
                    var city = $('#city').val();
                    var address = $('#address').val();
                    var telephone = $('#telephone').val();
                    var send_email = $("#transfer_email input[type='checkbox']:checked").val();
                    {{-- console.log(send_email); --}}
                    if (send_email == 'on') {
                        var transfer_email = ('Y');
                    } else {
                        var transfer_email = ('N');
                    }

                    function redirect_page() {
                        window.location.href = "{{ url('beneficiary-list') }}";

                    };

                    console.log(bank_country);
                    console.log(bank_city);
                    console.log(bank_branch);
                    console.log(bank_name);
                    console.log(bank_address);
                    console.log(swift_code);
                    console.log(acc_number);
                    console.log(acc_name);
                    console.log(currency);
                    console.log(firstname);
                    console.log(lastname);
                    console.log(middlename);
                    console.log(beneficiary_name);
                    console.log(beneficiary_email);
                    console.log(nationality);
                    console.log(country_of_residence);
                    console.log(city);
                    console.log(address);
                    console.log(telephone);
                    console.log(send_email);
                    {{-- console.log(bank_country); --}}

                    $.ajax({
                        'type': 'POST',
                        'url': 'international-bank-beneficiary-api',
                        "datatype": "application/json",
                        'data': {
                            'bank_country': bank_country,
                            'bank_city': bank_city,
                            'bank_branch': bank_branch,
                            'bank_name': bank_name,
                            'bank_address': bank_address,
                            'swift_code': swift_code,
                            'acc_number': acc_number,
                            'acc_name': acc_name,
                            'currency': currency,
                            'firstname': firstname,
                            'lastname': lastname,
                            'middlename': middlename,
                            'beneficiary_name': beneficiary_name,
                            'beneficiary_email': beneficiary_email,
                            'nationality': nationality,
                            'country_of_residence': country_of_residence,
                            'city': city,
                            'address': address,
                            'telephone': telephone,
                            'sendMail': transfer_email,
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {

                            console.log(response.responseCode);
                            if (response.responseCode == "000") {

                                toaster(response.message, 'success', 10000);
                                setTimeout(function() {

                                    redirect_page();
                                }, 2000);

                            } else {
                                toaster(response.message, 'error', 6000);

                            }
                        }

                    })


                })

            })

        </script>



    @endsection
