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
                            <form action="#"  autocomplete="off" aria-autocomplete="off">

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">



                                        <div id="rootwizard">
                                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                                <li class="nav-item active" id="details_tab" data-target-form="#accountForm">
                                                    <a href="#first" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Bank Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" id="account_tab" data-target-form="#profileForm">
                                                    <a href="#second" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Account Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" id="beneficiary_tab" data-target-form="#otherForm">
                                                    <a href="#third" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Beneficiary Details</span>
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
                                                                    <div class="col-md-12">
                                                                        <label for="form-group">Bank Country</label>
                                                                        <select class="custom-select" id="bank_country" name="bank_country" required>
                                                                            <option value="">Bank Country</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                        <label for="form-group">Bank City</label>
                                                                        <select class="custom-select" id="bank_city" name="bank_city">
                                                                            <option value="">Bank City</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                        <label for="form-group">Bank Branch</label>
                                                                        <select class="custom-select" id="bank_branch" name="bank_branch">
                                                                            <option value="">Bank Branch</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                        <label for="form-group">Bank Name</label>
                                                                        <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Bank Name" required>


                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                        <label for="form-group">Bank Address</label>
                                                                        <input type="text" id="bank_address" name="bank_address" class="form-control" placeholder="Bank Address" required>


                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="confirm3">Re Password</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <label for="form-group">Swift Code</label>
                                                                        <input type="text" id="swift_code" name="swift" class="form-control" placeholder="Swift Code" required>

                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="bank_details_next_btn">Next <i class="fe-arrow-right"></i></button>

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
                                                                    <label class="col-md-3 col-form-label" for="name3"> Account Number</label>
                                                                    <div class="col-md-12">
                                                                        <input type="number" id="acc_nmuber" name="acc_number" class="form-control" placeholder="Account number/BBAN" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="surname3">Currency</label>
                                                                    <div class="col-md-12">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}

                                                                        <select class="custom-select" id="currency" name="currency" required>
                                                                            <option value="">Currency</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

{{--
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="email3">Email</label>
                                                                    <div class="col-md-9">
                                                                        <input type="email" id="email3" name="email3" class="form-control" required>
                                                                    </div>
                                                                </div>  --}}

                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="confirm3">Firstname</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Firstname" required>
{{--
                                                                        <select class="custom-select ">
                                                                            <option selected>Bank Branch</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>  --}}

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="confirm3">Lastname</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Lastname" required>
{{--
                                                                        <select class="custom-select ">
                                                                            <option selected>Bank Branch</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>  --}}

                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="confirm3">Middlename</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="middlename" name="middlename" class="form-control" placeholder="Middlename" required>
{{--
                                                                        <select class="custom-select ">
                                                                            <option selected>Bank Branch</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>  --}}

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
                                                    <form id="international_bank_beneficiary_details" method="post" action="#" class="form-horizontal"  autocomplete="off" aria-autocomplete="off">
                                                        <div class="row">
                                                            <div class="col-12">
                                                               <label class="purple-color"> Beneficiary Personal Details</label><br><br>
                                                                    {{--  <h2 class="mt-0">
                                                                        <i class="mdi mdi-check-all"></i>
                                                                    </h2>

                                                                      --}}
                                                                    {{--  <h3 class="mt-0">Thank you !</h3>
                                                                      --}}
{{--
                                                                    <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                                                        dui. Aliquam mattis dictum aliquet.</p>
                                                                          --}}
{{--
                                                                    <div class="mb-3">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck4" required>
                                                                            <label class="custom-control-label" for="customCheck4">I agree with the Terms and Conditions</label>
                                                                        </div>
                                                                    </div>
                                                                      --}}

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <label class="col-md-3 col-form-label" for="confirm3">Beneficiary Name</label>
                                                                        <input type="text" id="beneficiary_name" name="beneficiary_name" class="form-control" placeholder="Beneficiary name" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <label class="col-md-3 col-form-label" for="confirm3">Beneficiary Email</label>
                                                                        <input type="text" id="beneficiary_email" name="beneficiary_name" class="form-control" placeholder="Beneficiary email" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <label class="col-md-3 col-form-label" for="confirm3">Middlename</label>
                                                                        <input type="text" id="middlename" name="middlename" class="form-control" placeholder="Middlename" required>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="surname3"> Last name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}
                                                                        <label class="col-md-3 col-form-label" for="confirm3">Nationality</label>
                                                                        <select class="custom-select" id="nationality" name="nationality" required>
                                                                            <option value="">Nationality</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="surname3"> Last name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}
                                                                        <label class="col-md-3 col-form-label" for="confirm3">Country of Residence</label>

                                                                        <select class="custom-select" id="residence" name="residence" required>
                                                                            <option value="">Country of residence</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="surname3"> Last name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}
                                                                        <label class="col-md-3 col-form-label" for="confirm3">City</label>

                                                                        <select class="custom-select" id="city" name="city" required>
                                                                            <option value="">City</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <label class="col-md-3 col-form-label" for="confirm3">Address</label>
                                                                        <input type="text" id="address" name="address" class="form-control" placeholder="Address" required>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <!-- end col -->
                                                        </div>
                                                        <!-- end row -->
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class=" list-inline-item"><button class="btn btn-secondary btn-rounded waves-effect waves-light" type="back" id="beneficiary_details_back_btn">Back</button></li>

                                                            <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit">Submit</button></li>
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

                            </form>
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

            $('#details_tab').addClass('active show');
            $('#international_bank_account_details').hide();
            $('#international_bank_beneficiary_details').hide();


            $('#bank_details_next_btn').click(function(e){
                e.preventDefault();

                var bank_contry = $('#bank_country').val();
                var bank_city = $('#bank_city').val();
                var bank_branch = $('#bank_branch').val();
                var bank_name = $('#bank_name').val();
                var bank_address = $('#bank_address').val();
                var swift_code = $('#swift_code').val();

                console.log(bank_contry);
                console.log(bank_city);
                console.log(bank_branch);
                console.log(bank_name);
                console.log(bank_address);
                console.log(swift_code);


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
                var currency = $('#currency').val();
                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var middlename = $('#middlename').val();

                console.log(acc_number);
                console.log(currency);
                console.log(firstname);
                console.log(lastname);
                console.log(middlename);

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

            // SUBMIT TO API
            $('#international_bank_beneficiary_details').submit(function(e){
                e.preventDefault();


                var bank_contry = $('#bank_country').val();
                var bank_city = $('#bank_city').val();
                var bank_branch = $('#bank_branch').val();
                var bank_name = $('#bank_name').val();
                var bank_address = $('#bank_address').val();
                var swift_code = $('#swift_code').val();

                var acc_number = $('#acc_number').val();
                var currency = $('#currency').val();
                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var middlename = $('#middlename').val();

                var beneficiary_name = $('#beneficiary_name').val();
                var beneficiary_email = $('#beneficiary_email').val();
                var middlename = $('#middlename').val();
            })

        })

    </script>



@endsection
