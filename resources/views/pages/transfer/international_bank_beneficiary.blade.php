@extends('layouts.master')

@section('content')

<!-- Start Content-->
<div class="container-fluid">
    <br><br>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="sub-header font-18 purple-color" style="cursor: pointer;" onclick="window.history.back()">
                        <i class="fe-arrow-left"></i> INTERNATIONAL BANK BENEFICIARY
                    </p>
                    <hr>


                    <div class="row">
                        <div class="col-md-7">


                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">



                                        <div id="rootwizard">
                                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                                <li class="nav-item" id="details_tab" data-target-form="#accountForm">
                                                    <a href="#first" data-toggle="tab"  class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Bank Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" id="account_tab" data-target-form="#profileForm">
                                                    <a href="#second" data-toggle="tab"  class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Account Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" id="beneficiary_tab" data-target-form="#otherForm">
                                                    <a href="#third" data-toggle="tab"  class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Beneficiary Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" id="summary_tab" data-target-form="#summaryForm">
                                                    <a href="#fourth" data-toggle="tab"  class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Summary</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content mb-0 b-0 pt-0">

                                                <div class="tab-pane active" id="first">
                                                    <form id="international_bank_details" action="#" class="form-horizontal"  autocomplete="off" aria-autocomplete="off">
                                                        <div class="row">
                                                            <div class="col-12">
                                                               <label class="purple-color"> Beneficiary Bank Details</label><br><br>
                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-6">
                                                                        <label for="form-group">Bank Country</label>
                                                                        <select class="custom-select" id="bank_country" name="bank_country" required>
                                                                            <option value="">Bank Country</option>
                                                                            <option value="Ghana">Ghana</option>

                                                                        </select>
                                                                        <br><br>

                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label for="form-group">Bank City</label>
                                                                        <select class="custom-select" id="bank_city" name="bank_city">
                                                                            <option value="">Bank City</option>
                                                                            <option value="Accra">Accra</option>

                                                                        </select>
                                                                    <br><br>

                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label for="form-group">Bank Branch</label>
                                                                        <select class="custom-select" id="bank_branch" name="bank_branch">
                                                                            <option value="">Bank Branch</option>
                                                                            <option value="High-Street">High Street</option>

                                                                        </select>
                                                                        <br><br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label for="form-group">Bank Name</label>
                                                                        <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Bank Name" required>
                                                                        <br><br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label for="form-group">Bank Address</label>
                                                                        <input type="text" id="bank_address" name="bank_address" class="form-control" placeholder="Bank Address" required>
                                                                        <br><br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label for="form-group">Swift Code</label>
                                                                        <input type="text" id="swift_code" name="swift" class="form-control" placeholder="Swift Code" required>
                                                                        <br><br>
                                                                    </div>

                                                                </div>

                                                                <button class="btn btn-primary btn-rounded waves-effect waves-light" type="button" id="bank_details_next_btn">Next <i class="fe-arrow-right"></i></button>

                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="second">
                                                    <form id="international_bank_account_details" class="form-horizontal"  autocomplete="off" aria-autocomplete="off">
                                                        <div class="row">
                                                            <div class="col-12">
                                                               <label class="purple-color"> Beneficiary Account Details</label><br><br>

                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="name3"> Account Number</label>

                                                                        <input type="number" id="acc_number" name="acc_number" class="form-control" placeholder="Account number/BBAN" required>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="name3"> Account Name</label>

                                                                        <input type="text" id="acc_name" name="acc_name" class="form-control" placeholder="Account name" required>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}
                                                                        <label class="form-group" for="surname3">Currency</label>

                                                                        <select class="custom-select" id="currency" name="currency" required>
                                                                            <option value="">Currency</option>
                                                                            <option value="GHS">GHS</option>

                                                                        </select>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="confirm3">Firstname</label>
                                                                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname" required>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="confirm3">Lastname</label>
                                                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname" required>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="confirm3">Middlename</label>
                                                                        <input type="text" id="middlename" name="middlename" class="form-control" placeholder="Middlename" required>
                                                                        <br>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- end col -->
                                                        </div>
                                                        <!-- end row -->
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class=" list-inline-item"><button class="btn btn-secondary btn-rounded waves-effect waves-light" type="button" id="account_deatils_back_btn">Back</button></li>

                                                            <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded waves-effect waves-light" id="account_details_next_btn" type="submit">Next</button></li>
                                                        </ul>
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="third">
                                                    <form id="international_bank_beneficiary_details" method="" action="#" class="form-horizontal"  autocomplete="off" aria-autocomplete="off">
                                                        <div class="row">
                                                            <div class="col-12">
                                                               <label class="purple-color"> Beneficiary Personal Details</label><br><br>


                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="confirm3">Beneficiary Name</label>
                                                                        <input type="text" id="beneficiary_name" name="beneficiary_name" class="form-control" placeholder="Beneficiary name" required>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="confirm3">Beneficiary Email</label>
                                                                        <input type="text" id="beneficiary_email" name="beneficiary_name" class="form-control" placeholder="Beneficiary email" required>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}
                                                                        <label class="form-group" for="confirm3">Nationality</label>
                                                                        <select class="custom-select" id="nationality" name="nationality" required>
                                                                            <option value="">Nationality</option>
                                                                            <option value="Ghanaian">Ghanaian</option>

                                                                        </select>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}
                                                                        <label class="form-group" for="confirm3">Country of Residence</label>

                                                                        <select class="custom-select" id="country_of_residence" name="residence" required>
                                                                            <option value="">Country of residence</option>
                                                                            <option value="Ghana">Ghana</option>

                                                                        </select>
                                                                        <br><br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}
                                                                        <label class="form-group" for="confirm3">City</label>

                                                                        <select class="custom-select" id="city" name="city" required>
                                                                            <option value="">City</option>
                                                                            <option value="Accra">Accra</option>

                                                                        </select>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="confirm3">Address</label>
                                                                        <input type="text" id="address" name="address" class="form-control" placeholder="Address" required>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="form-group" for="confirm3">Telephone</label>
                                                                        <input type="text" id="telephone" name="address" class="form-control" placeholder="Telephone" required>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-10">
                                                                        <br>
                                                                        <div class="form-group">

                                                                            <div class="checkbox checkbox-primary mb-2" id="transfer_email">
                                                                                <input id="checkbox2" type="checkbox">
                                                                                <label class="custom-control-label" for="checkbox2">
                                                                                    Email beneficiary when a transfer is made
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
                                                            <li class=" list-inline-item"><button class="btn btn-secondary btn-rounded waves-effect waves-light" type="back" id="beneficiary_details_back_btn">Back</button></li>

                                                            <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="beneficiary_details_submit_btn">Submit</button></li>
                                                        </ul>
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade " id="fourth">
                                                    <form id="international_bank_summary" method="POST" action="#" class="form-horizontal"  autocomplete="off" aria-autocomplete="off">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                               <label class="purple-color"> Summary</label><br><br>
                                                                <div class="form-group row mb-3">

                                                                    <div class="col-md-6">
                                                                        <label> Bank Country: &emsp;</label><span class="font-weight-light mr-2" id="display_bank_country"></span>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label> Bank City: &emsp;</label><span class="font-weight-light mr-2" id="display_bank_city"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Bank branch: &emsp;</label><span class="font-weight-light mr-2" id="display_bank_branch"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Bank Name: &emsp;</label><span class="font-weight-light mr-2" id="display_bank_name"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Bank Address: &emsp;</label><span class="font-weight-light mr-2" id="display_bank_address"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Swift Code: &emsp;</label><span class="font-weight-light mr-2" id="display_swift_code"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Account Number: &emsp;</label><span class="font-weight-light mr-2" id="display_account_number"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Account Name: &emsp;</label><span class="font-weight-light mr-2" id="display_account_name"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Currency: &emsp;</label><span class="font-weight-light mr-2" id="display_currency"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Firstname: &emsp;</label><span class="font-weight-light mr-2" id="display_firstname"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Lastname: &emsp;</label><span class="font-weight-light mr-2" id="display_lastname"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Middlename: &emsp;</label><span class="font-weight-light mr-2" id="display_middlename"></span>
                                                                        <br>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label> Beneficiary Name: &emsp;</label><span class="font-weight-light mr-2" id="display_beneficiary_name"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Beneficiary Email: &emsp;</label><span class="font-weight-light mr-2" id="display_beneficiary_email"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Nationality: &emsp;</label><span class="font-weight-light mr-2" id="display_nationality"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> Country of Residence: &emsp;</label><span class="font-weight-light mr-2" id="display_country_of_residence"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label> City: &emsp;</label><span class="font-weight-light mr-2" id="display_city"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Address: &emsp;</label><span class="font-weight-light mr-2" id="display_address"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Telephone: &emsp;</label><span class="font-weight-light mr-2" id="display_telephone"></span>
                                                                        <br>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Email Beneficiary: &emsp;</label><span class="font-weight-light mr-2" id="display_transfer_email"></span>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>

                                                        {{--  <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="bank_add_beneficiary_btn">Add Beneficiary <i class="fe-arrow-right"></i></button>  --}}
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class=" list-inline-item"><button class="btn btn-secondary btn-rounded waves-effect waves-light" type="back" id="bank_add_beneficiary_back_btn">Back</button></li>

                                                            <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="bank_add_beneficiary_btn">Add Beneficiary </button></li>
                                                        </ul>
                                                    </form>
                                                </div>


                                                {{--  <ul class="list-inline wizard mb-0">
                                                    <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-color">Previous</a>
                                                    </li>
                                                    <li class="next list-inline-item float-right"><a href="javascript: void(0);" class="btn btn-color">Next</a></li>
                                                </ul>  --}}

                                            </div> <!-- tab-content -->
                                        </div> <!-- end #rootwizard-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                        </div> <!-- end col -->


                        <div class="col-md-5" style="margin-top: 80px;">
                            <img src="{{ asset('assets/images/world.png') }}" class="img-fluid" alt="" >
                       </div> <!-- end col -->



                    </div>
                    <!-- end row -->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function(){


            function toaster(message, icon )
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 10000,
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

            $('#bank_details_next_btn').click(function(e){
                e.preventDefault();

                var bank_country = $('#bank_country').val();
                var bank_city = $('#bank_city').val();
                var bank_branch = $('#bank_branch').val();
                var bank_name = $('#bank_name').val();
                var bank_address = $('#bank_address').val();
                var swift_code = $('#swift_code').val();


                $('#details_tab').removeClass('active show');
                $('#account_tab').addClass('active show');

                $('#first').removeClass('active show');
                $('#second').addClass('active show');

                $('#international_bank_details').hide();
                $('#international_bank_account_details').toggle('500');

            })

            // Return to Beneficiary Bank Details

            $('#account_deatils_back_btn').click(function(e){
                e.preventDefault();

                $('#account_tab').removeClass('active show');
                $('#details_tab').addClass('active show');

                $('#second').removeClass('active show');
                $('#first').addClass('active show');

                $('#international_bank_account_details').hide();
                $('#international_bank_details').toggle('500');



            })

            $('#account_details_next_btn').click(function(e){
                e.preventDefault();

                var acc_number = $('#acc_number').val();
                var acc_name = $('#acc_name').val();
                var currency = $('#currency').val();
                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var middlename = $('#middlename').val();


                $('#account_tab').removeClass('active show');
                $('#beneficiary_tab').addClass('active show');

                $('#second').removeClass('active show');
                $('#third').addClass('active show');

                $('#international_bank_account_details').hide();
                $('#international_bank_beneficiary_details').toggle('500');



            })

            $('#beneficiary_details_back_btn').click(function(e){
                e.preventDefault();


                $('#beneficiary_tab').removeClass('active show');
                $('#account_tab').addClass('active show');

                $('#third').removeClass('active show');
                $('#second').addClass('active show');

                $('#international_bank_beneficiary_details').hide();
                $('#international_bank_account_details').toggle('500');


            })

            $('#beneficiary_details_submit_btn').click(function(e){
                e.preventDefault();


                var bank_country = $('#bank_country').val();
                $('#display_bank_country').text(bank_country);

                var bank_city = $('#bank_city').val();
                $('#display_bank_city').text(bank_city);

                var bank_branch = $('#bank_branch').val();
                $('#display_bank_branch').text(bank_branch);

                var bank_name = $('#bank_name').val();
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
                $('#display_currency').text(currency);

                var firstname = $('#firstname').val();
                $('#display_firstname').text(firstname);

                var lastname = $('#lastname').val();
                $('#display_lastname').text(lastname);

                var middlename = $('#middlename').val();
                $('#display_middlename').text(middlename);

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
                if (transfer_email == 'on'){
                    $('#display_transfer_email').text('Yes');
                 }else {
                    $('#display_transfer_email').text('No');
                 };

                $('#beneficiary_tab').removeClass('active show');
                $('#summary_tab').addClass('active show');

                $('#third').removeClass('active show');
                $('#fourth').addClass('active show');

                $('#international_bank_beneficiary_details').hide();
                $('#international_bank_summary').toggle('500');


            })

            $('#bank_add_beneficiary_back_btn').click(function(e){
                e.preventDefault();


                $('#summary_tab').removeClass('active show');
                $('#beneficiary_tab').addClass('active show');

                $('#fourth').removeClass('active show');
                $('#third').addClass('active show');

                $('#international_bank_summary').hide();
                $('#international_bank_beneficiary_details').toggle('500');
            })

            // SUBMIT TO API


            $('#bank_add_beneficiary_btn').click(function(e){
                e.preventDefault();


                var bank_country = $('#bank_country').val();
                var bank_city = $('#bank_city').val();
                var bank_branch = $('#bank_branch').val();
                var bank_name = $('#bank_name').val();
                var bank_address = $('#bank_address').val();
                var swift_code = $('#swift_code').val();

                var acc_number = $('#acc_number').val();
                var acc_name = $('#acc_name').val();
                var currency = $('#currency').val();
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
                    {{--  console.log(send_email);  --}}
                    if(send_email == 'on'){
                        var transfer_email = ('Y');
                    }else{
                        var transfer_email = ('N');
                    }

                $.ajax({
                    'type' : 'POST' ,
                    'url' : 'international-bank-beneficiary-api' ,
                    "datatype" : "application/json",
                    'data' : {
                        'bank_country' : bank_country ,
                        'bank_city' : bank_city ,
                        'bank_branch' : bank_branch ,
                        'bank_name' : bank_name ,
                        'bank_address' : bank_address,
                        'swift_code' : swift_code ,
                        'acc_number' : acc_number ,
                        'acc_name' : acc_name ,
                        'currency' : currency ,
                        'firstname' : firstname ,
                        'lastname' : lastname ,
                        'middlename' : middlename ,
                        'beneficiary_name' : beneficiary_name ,
                        'beneficiary_email' : beneficiary_email ,
                        'nationality' : nationality ,
                        'country_of_residence' : country_of_residence ,
                        'city' : city ,
                        'address' : address ,
                        'telephone' : telephone ,
                        'sendMail' : transfer_email,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:
                    function(response){

                        console.log(response.responseCode);
                        if(response.responseCode == "000"){

                            toaster(response.message, 'success' );

                        }else{
                            toaster(response.message, 'error' );

                    }
                }

                })


            })

        })

    </script>



@endsection
