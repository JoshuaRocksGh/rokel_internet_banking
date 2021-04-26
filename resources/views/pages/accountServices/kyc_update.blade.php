@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class=" ">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-9">
                                <h3 class="text-primary">KYC Update
                                    <button type="button" class="btn btn-info btn-sm float-right  mod-open" data-toggle="modal" data-target="#centermodal"> <span class="fe-info mr-1"></span> info</button>
                                </h3>

                                     <hr>

                            </div>

                            <div class="col-md-2"></div>
                        </div>


                         <div class="row">
                            <div class="col-md-2"></div>

                            <!-- Center modal content -->
                            <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true" style="zoom: 0.9;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-primary" id="myCenterModalLabel">KYC Update</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class=" ">
                                                <div class="btn-group d-block mb-2">
                                                    <p class="card-text" >To successfully Update your KYC, you need to follow the processes below.</p>
                                                        <br>
                                                    <h4 class="card-title" style="color: #0561ad">
                                                        KYC Update Process
                                                    </h4>

                                                </div>
                                                <div class="mail-list mt-3">
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>BASIC INFORMATION</a>
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>PERSONAL  DETAILS</a>
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>RESIDENT ADDRESS</a>
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>EMPLOYMENT DETAILS</a>
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>OTHER PERSONAL DETAILS</a>
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>TAX INFORMATION</a>
                                                </div>

                                                {{-- <br>

                                                <h4 class="card-title" style="color: #0561ad">Requirements</h4>
                                                <div class="mail-list mt-3">
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-account-check-outline font-18 align-middle mr-2" style="color: #0561ad"></i>Selfie</a>
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-card-account-details-outline font-18 align-middle mr-2" style="color: #0561ad"></i>ID (Driver Licence SSNIT/Passport/Voter card +
                                                        Birth Certificate)</a>
                                                    <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-map-marker-outline font-18 align-middle mr-2" style="color: #0561ad"></i>Residential Address</a>
                                                  </div>

                                                <br>

                                                <h5 class="card-title" ><i class="mdi mdi-alert-circle mdi-18px" style="color: #0561ad"></i>&nbsp; Must be 18 years and above</h5> --}}


                                            </div>

                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                             {{-- page title --}}

                        </div>

                        <div class="row">

                            <div class="col-md-1"></div>

                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">

                                        <div id="rootwizard">
                                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                                <li class="nav-item" data-target-form="#basic_information" id="basic_information_tab">
                                                    <a href="#first" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        {{-- <i class="mdi mdi-account-circle mr-1"></i> --}}
                                                        <span class="d-none d-sm-inline">Basic Information</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-target-form="#personal_details" id="personal_details_tab">
                                                    <a href="#second" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        {{-- <i class="mdi mdi-face-profile mr-1"></i> --}}
                                                        <span class="d-none d-sm-inline">Personal Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-target-form="#residential_details" id="residential_details_tab">
                                                    <a href="#third" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        {{-- <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i> --}}
                                                        <span class="d-none d-sm-inline">Residential Details</span>
                                                    </a>
                                                </li><li class="nav-item" data-target-form="#employment_details"  id="employment_details_tab">
                                                    <a href="#fourth" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        {{-- <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i> --}}
                                                        <span class="d-none d-sm-inline">Employment Details</span>
                                                    </a>
                                                </li><li class="nav-item" data-target-form="#tax_information" id="tax_information_tab">
                                                    <a href="#sixth" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        {{-- <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i> --}}
                                                        <span class="d-none d-sm-inline">Tax Information</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content mb-0 b-0 pt-0">

                                                <div class="tab-pane" id="first">
                                                    <form id="basic_information" method="post" action="#" class="form-horizontal" autocomplete="off" aria-autocomplete="off">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                            <h5>Basic Information</h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Customer Number</label>
                                                                <input type="text" class="form-control" id="customer_number"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Title</label>
                                                                {{-- <input type="text" class="form-control" id="title"  required> --}}
                                                                <select class="custom-select " id="title" required>
                                                                    <option selected>Select Title</option>
                                                                    <option value="Mr">Mr</option>
                                                                    <option value="Mrs">Mrs</option>
                                                                    <option value="Dr">Dr</option>
                                                                    <option value="Miss">Miss</option>
                                                                    <option value="Professor">Professor</option>
                                                                </select>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Firstname</label>
                                                                <input type="text" class="form-control" id="firstname"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Surname</label>
                                                                <input type="text" class="form-control" id="surname"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Othername</label>
                                                                <input type="text" class="form-control" id="Othername"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Telephone Number</label>
                                                                <input type="number" class="form-control" id="telephone_number"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Email Address</label>
                                                                <input type="email" class="form-control" id="email_address"  required>
                                                                <br>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <label class="form-label">Date of Birth</label>
                                                                <input type="date" class="form-control" id="date_of_birth"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Select Gender</label>
                                                                <div class="form-group">

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input radio" type="radio" name="gender" id="gender_male" value="Male" >
                                                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                                                    </div>
                                                                    &nbsp;&nbsp;
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input radio" type="radio" name="gender" id="gender_female" value="Female">
                                                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                                                    </div>
                                                                </div>
                                                                {{-- <input type="" class="form-control" id="email_address"  required> --}}
                                                                <br>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Proof of Address</label>
                                                                <input type="hidden" id="proof_of_address_">
                                                                <input type="file" class="form-control-file" id="proof_of_address"  required><br>
                                                                <img class="img-fluid display_selected_id_image" id="display_selected_id_image" src="#" alt="your image" />

                                                                <br>
                                                            </div>

                                                        </div> <!-- end row -->
                                                        <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="basic_information_next_btn">Next<i class="fe-arrow-right"></i> </button>

                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="second">
                                                    <form id="personal_details" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5>Personal Details</h5>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Marital Status</label>
                                                                {{-- <input type="text" class="form-control" id="marital_status"  required> --}}
                                                                <select class="custom-select " id="marital_status"  required>
                                                                    <option selected>Select Marital Status</option>
                                                                    <option value="Single">Single</option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Divorced">Divorced</option>
                                                                    <option value="Widowed">Widowed</option>

                                                                </select>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Number of Children</label>
                                                                <input type="number" class="form-control" id="number_of_children"  required>
                                                                <br>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label">Nationality</label>
                                                                <input type="text" class="form-control" id="nationality"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">ID Type</label>
                                                                <input type="text" class="form-control" id="id_type"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">ID Number</label>
                                                                <input type="text" class="form-control" id="id_number"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Date of Issue</label>
                                                                <input type="date" class="form-control" id="date_of_issue"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Date of Expiry</label>
                                                                <input type="date" class="form-control" id="date_of_expiry"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Mother Maiden Name</label>
                                                                <input type="text" class="form-control" id="mother_maiden_name"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <h5>Next of Kin Information</h5>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Next of Kin Name</label>
                                                                <input type="text" class="form-control" id="next_of_kin_name"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Next of Kin Address</label>
                                                                <input type="text" class="form-control" id="next_of_kin_address"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Next of Kin Telephone</label>
                                                                <input type="text" class="form-control" id="next_of_kin_telephone"  required>
                                                                <br>
                                                            </div>


                                                        </div>
                                                        <!-- end row -->
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class=" list-inline-item"><button class="btn btn-secondary btn-rounded waves-effect waves-light" type="button" id="personal_details_back_btn">Back</button></li>

                                                            <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded waves-effect waves-light" id="personal_details_next_btn" type="submit">Next<i class="fe-arrow-right"></i></button></li>
                                                        </ul>
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="third">
                                                    <form id="residential_details" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5>Residential Address Details</h5>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Country of Residence</label>
                                                                <input type="text" class="form-control" id="country_of_residence"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Number of years at residence</label>
                                                                <input type="text" class="form-control" id="years_at_residence"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">City</label>
                                                                <input type="text" class="form-control" id="city"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Town</label>
                                                                <input type="text" class="form-control" id="town"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Residential Address</label>
                                                                <input type="text" class="form-control" id="residential_address"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Postal Address</label>
                                                                <input type="text" class="form-control" id="postal_address"  required>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class=" list-inline-item"><button class="btn btn-secondary btn-rounded waves-effect waves-light" type="button" id="residential_details_back_btn">Back</button></li>

                                                            <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded waves-effect waves-light" id="residential_details_next_btn" type="submit">Next<i class="fe-arrow-right"></i></button></li>
                                                        </ul>
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="fourth">
                                                    <form id="employment_details" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5>Employment Details</h5>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Employment Type</label>
                                                                <input type="text" class="form-control" id="employment_type"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Employee Number</label>
                                                                <input type="number" class="form-control" id="employee_number"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Employee Code</label>
                                                                <input type="text" class="form-control" id="employee_code"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Department</label>
                                                                <input type="text" class="form-control" id="department"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Date of Employement</label>
                                                                <input type="date" class="form-control" id="date_of_employment"  required>
                                                                <br>
                                                            </div>

                                                            {{-- <div class="col-md-6">
                                                                <label class="form-label">Postal Address</label>
                                                                <input type="text" class="form-control" id="postal_address"  required>
                                                                <br>
                                                            </div> --}}
                                                        </div>
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class=" list-inline-item"><button class="btn btn-secondary btn-rounded waves-effect waves-light" type="button" id="employment_details_back_btn">Back</button></li>

                                                            <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded waves-effect waves-light" id="employment_details_next_btn" type="submit">Next<i class="fe-arrow-right"></i></button></li>
                                                        </ul>
                                                        <!-- end row -->
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="sixth">
                                                    <form id="tax_information" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5>Tax Information</h5>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Tax Identification Number</label>
                                                                <input type="text" class="form-control" id="tax_identification_number"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Last Update Date</label>
                                                                <input type="Date" class="form-control" id="last_update_date"  required>
                                                                <br>
                                                            </div>



                                                            <div class="col-md-6">
                                                                <label class="form-label">Are you a citizen of US?</label>
                                                                {{-- <input type="text" class="form-control" id="city"  required> --}}
                                                                <div class="form-group">

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input radio" type="radio" name="citizen_of_us" id="citizen_yes" value="Yes" >
                                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                    </div>
                                                                    &nbsp;&nbsp;
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input radio" type="radio" name="citizen_of_us" id="citizen_no" value="No">
                                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">US Resident</label>
                                                                {{-- <input type="text" class="form-control" id="town"  required> --}}
                                                                <div class="form-group">

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input radio" type="radio" name="onetime" id="resident_yes" value="Yes">
                                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                    </div>
                                                                    &nbsp;&nbsp;
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input radio" type="radio" name="onetime" id="resident_no" value="No">
                                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                            </div>


                                                        </div>
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class=" list-inline-item"><button class="btn btn-secondary btn-rounded waves-effect waves-light" type="button" id="tax_information_back_btn">Back</button></li>

                                                            <li class="list-inline-item float-right">
                                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#bs-example-modal-lg" type="submit" id="tax_information_next_btn">Submit</button>
                                                                {{-- <button  type="button" class="btn btn-secondary" data-toggle="modal" data-target="#scrollable-modal" type="submit" id="tax_information_next_btn">Submit</button> --}}

                                                                {{-- <button class="btn btn-primary btn-rounded waves-effect waves-light" id="tax_information_next_btn" type="submit">Next</button> --}}
                                                            </li>

                                                        </ul>
                                                        <!-- end row -->
                                                    </form>
                                                </div>

                                                {{-- <ul class="list-inline wizard mb-0">
                                                    <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                                    </li>
                                                    <li class="next list-inline-item float-right"><a href="javascript: void(0);" class="btn btn-secondary">Next</a></li>
                                                </ul> --}}

                                            </div> <!-- tab-content -->
                                        </div> <!-- end #rootwizard-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-1"></div>


                            <!--  Modal content for the Large example -->
                            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">KYC Summary</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">Customer Number:&emsp;
                                                        <span id="display_customer_number"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Title:&emsp;
                                                        <span id="display_title"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Firstname:&emsp;
                                                        <span id="display_firstname"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Surname:&emsp;
                                                        <span id="display_surname"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Othername:&emsp;
                                                        <span id="display_othername"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Telephone Number:&emsp;
                                                        <span id="display_telephone_number"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Email Address:&emsp;
                                                        <span id="display_email_address"></span>

                                                    </label>
                                                    <br>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Date of Birth:&emsp;
                                                        <span id="display_date_of_birth"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Select Gender:&emsp;
                                                        <span id="display_gender_male"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Marital Status:&emsp;
                                                        <span id="display_marital_status"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Number of Children:&emsp;
                                                        <span id="display_number_of_children"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Nationality:&emsp;
                                                        <span id="display_nationality"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">ID Type:&emsp;
                                                        <span id="display_id_type"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">ID Number:&emsp;
                                                        <span id="display_id_number"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Date of Issue:&emsp;
                                                        <span id="display_date_of_issue"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Date of Expiry:&emsp;
                                                        <span id="display_date_of_expiry"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Mother Maiden Name:&emsp;

                                                    </label>
                                                    <span id="display_mother_maiden_name"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Next of Kin Name:&emsp;
                                                    <span id="display_next_of_kin_name"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Next of Kin Address:&emsp;
                                                    <span id="display_next_of_kin_address"></span>

                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Next of Kin Telephone:&emsp;
                                                    <span id="display_next_of_kin_telephone"></span>
                                                    </label>
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Country of Residence:&emsp;
                                                        <span id="display_country_of_residence"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Number of years at residence:&emsp;
                                                        <span id="display_years_at_residence"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">City:&emsp;
                                                        <span id="display_city"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Town:&emsp;
                                                        <span id="display_town"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Residential Address:&emsp;
                                                        <span id="display_residential_address"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Postal Address:&emsp;
                                                        <span id="display_postal_address"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Employment Type:&emsp;
                                                        <span id="display_employment_type"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Employee Number:&emsp;
                                                        <span id="display_employee_number"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Employee Code:&emsp;
                                                        <span id="display_employee_code"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Department:&emsp;
                                                        <span id="display_department"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Date of Employement:&emsp;
                                                        <span id="display_date_of_employment"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Last Update Date:&emsp;
                                                        <span id="display_last_update_date"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Tax Identification Number:&emsp;
                                                        <span id="display_tax_identification_number"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Are you a citizen of US? &emsp;
                                                        <span id="display_citizen_of_us"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">US Resident:&emsp;
                                                        <span id="display_us_resident"></span>
                                                    </label>

                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Proof of Address:&emsp;
                                                        <img class="img-fluid display_selected_id_image" id="display_selected_id_image" src="#" alt="your image" />
                                                    </label>
                                                    <span id="display_proof_of_address"></span>


                                                    <br>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" data-dismiss="modal" id="kyc_confirm_btn">Confirm</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

            function lovs(){
                $.ajax({
                    'type': 'GET',
                    'url' : 'get-my-account',
                    "datatype" : "application/json",
                    success:function(response){
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                        $('#from_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));
                        $('#to_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance));

                        });
                    },
                    error: function(xhr, status, error){
                       alert("API SERVER ERROR ")
                    }

                })
            }


            $(document).ready(function() {
                setTimeout(function(){
                    lovs();
                },3000);
            })
</script>

<script>
    $(document).ready(function(){

        $('.display_selected_id_image').hide();

        {{-- $('#second').hide();
        $('#third').hide();
        $('#fourth').hide();
        $('#sixth').hide(); --}}


        setTimeout(function() {
            $(".mod-open").trigger('click');
        },3000);

        $('#basic_information_tab').addClass('active show');
        $('#first').addClass('active show');


        function toaster(message, icon , timer )
        {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                {{-- timer: 10000, --}}
                timerProgressBar: false,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })

              Toast.fire({
                icon: icon,
                title: message,
                timer: timer
              })
        }


        $('#proof_of_address').change(function(){

            //console.log('changed');
            var file = $("#proof_of_address[type=file]").get(0).files[0];

                   if(file){
                       var reader = new FileReader();

                       reader.onload = function(){
                           $(".display_selected_id_image").attr("src", reader.result);
                       }

                       reader.readAsDataURL(file);

                       reader.onload = function(){
                           {{-- alert(reader.result) --}}
                        $(".display_selected_id_image").attr("src", reader.result);
                        $('#proof_of_address_').val(reader.result)
                    }






                   }

                $('.display_selected_id_image').show();
            })

        $('#basic_information_next_btn').click(function(e){
            e.preventDefault();

            var customer_number = $('#customer_number').val();
            var title = $('#title').val();
            var firstname = $('#firstname').val();
            var surname = $('#surname').val();
            var Othername = $('#Othername').val();
            var telephone_number = $('#telephone_number').val();
            var email_address = $('#email_address').val();
            var date_of_birth = $('#date_of_birth').val();
            var select_gender = $("input[type='radio']:checked").val();
            {{-- var proof_of_address = $('#proof_of_address').val(); --}}



            /* console.log(customer_number);
            console.log(title);
            console.log(firstname);
            console.log(surname);
            console.log(Othername);
            console.log(telephone_number);
            console.log(email_address);
            console.log(proof_of_address);
            console.log(date_of_birth);
            console.log(select_gender); */

            $('#basic_information_tab').addClass('active show');
            $('#personal_details_tab').addClass('active show');
            $('#first').removeClass('active show');
            $('#second').addClass('active show');


        })

        $('#personal_details_back_btn').click(function(e){
            e.preventDefault();

            $('#basic_information_tab').addClass('active show');
            $('#personal_details_tab').removeClass('active show');


            $('#first').addClass('active show');
            $('#second').removeClass('active show');

        })

        $('#personal_details_next_btn').click(function(e){
            e.preventDefault();

            var marital_status = $('#marital_status').val();
            var number_of_children = $('#number_of_children').val();
            var nationality = $('#nationality').val();
            var id_type = $('#id_type').val();
            var id_number = $('#id_number').val();
            var date_of_issue = $('#date_of_issue').val();
            var date_of_expiry = $('#date_of_expiry').val();
            var mother_maiden_name = $('#mother_maiden_name').val();
            var next_of_kin_name = $('#next_of_kin_name').val();
            var next_of_kin_address = $('#next_of_kin_address').val();
            var next_of_kin_telephone = $('#next_of_kin_telephone').val();

            $('#basic_information_tab').addClass('active show');
            $('#personal_details_tab').addClass('active show');
            $('#residential_details_tab').addClass('active show');

            $('#first').removeClass('active show');
            $('#second').removeClass('active show');
            $('#third').addClass('active show');

        })

        $('#residential_details_back_btn').click(function(e){
            e.preventDefault();

            $('#basic_information_tab').addClass('active show');
            $('#personal_details_tab').addClass('active show');
            $('#residential_details_tab').removeClass('active show');

            $('#first').removeClass('active show');
            $('#second').addClass('active show');
            $('#third').removeClass('active show');
        })

        $('#residential_details_next_btn').click(function(e){
            e.preventDefault();

            var country_of_residence = $('#country_of_residence').val();
            var years_at_residence = $('#years_at_residence').val();
            var city = $('#city').val();
            var town = $('#town').val();
            var residential_address = $('#residential_address').val();
            var postal_address = $('#postal_address').val();


            $('#basic_information_tab').addClass('active show');
            $('#personal_details_tab').addClass('active show');
            $('#residential_details_tab').addClass('active show');
            $('#employment_details_tab').addClass('active show');

            $('#first').removeClass('active show');
            $('#second').removeClass('active show');
            $('#third').removeClass('active show');
            $('#fourth').addClass('active show');

        })

        $('#employment_details_back_btn').click(function(e){
            e.preventDefault();


        $('#residential_details_tab').addClass('active show');
        $('#employment_details_tab').removeClass('active show');


        $('#third').addClass('active show');
        $('#fourth').removeClass('active show');

        })

        $('#employment_details_next_btn').click(function(e){
            e.preventDefault();

            var employment_type = $('#employment_type').val();
            var employee_number = $('#employee_number').val();
            var employee_code = $('#employee_code').val();
            var department = $('#department').val();
            var date_of_employment = $('#date_of_employment').val();


            $('#basic_information_tab').addClass('active show');
            $('#personal_details_tab').addClass('active show');
            $('#residential_details_tab').addClass('active show');
            $('#employment_details_tab').addClass('active show');
            $('#tax_information_tab').addClass('active show');

            $('#fourth').removeClass('active show');
            $('#sixth').addClass('active show');

        })

        $('#tax_information_back_btn').click(function(e){
            e.preventDefault();


            $('#basic_information_tab').addClass('active show');
            $('#personal_details_tab').addClass('active show');
            $('#residential_details_tab').addClass('active show');
            $('#employment_details_tab').addClass('active show');
            $('#tax_information_tab').removeClass('active show');

            $('#fourth').addClass('active show');
            $('#sixth').removeClass('active show');

        })

        $('#tax_information_next_btn').click(function(e){
            e.preventDefault();


            var customer_number = $('#customer_number').val();
            $('#display_customer_number').text(customer_number);

            var title = $('#title').val();
            $('#display_title').text(title);

            var firstname = $('#firstname').val();
            $('#display_firstname').text(firstname);

            var surname = $('#surname').val();
            $('#display_surname').text(surname);

            var Othername = $('#Othername').val();
            $('#display_othername').text(Othername);

            var telephone_number = $('#telephone_number').val();
            $('#display_telephone_number').text(telephone_number);

            var email_address = $('#email_address').val();
            $('#display_email_address').text(email_address);

            var date_of_birth = $('#date_of_birth').val();
            $('#display_date_of_birth').text(date_of_birth);

            if ($('#gender_male').is(":checked"))
            {
                var select_gender = ('Male');
            }else if ($('#gender_female').is(":checked")){
                var select_gender = ("Female");
            }else {
                toaster("Gender Not Selected", "error" , 60000);

                return false;
            }
            $('#display_gender_male').text(select_gender);

            var marital_status = $('#marital_status').val();
            $('#display_marital_status').text(marital_status);

            var number_of_children = $('#number_of_children').val();
            $('#display_number_of_children').text(number_of_children);

            var nationality = $('#nationality').val();
            $('#display_nationality').text(nationality);

            var id_type = $('#id_type').val();
            $('#display_id_type').text(id_type);

            var id_number = $('#id_number').val();
            $('#display_id_number').text(id_number);

            var date_of_issue = $('#date_of_issue').val();
            $('#display_date_of_issue').text(date_of_issue);

            var date_of_expiry = $('#date_of_expiry').val();
            $('#display_date_of_expiry').text(date_of_expiry);

            var mother_maiden_name = $('#mother_maiden_name').val();
            $('#display_mother_maiden_name').text(mother_maiden_name);

            var next_of_kin_name = $('#next_of_kin_name').val();
            $('#display_next_of_kin_name').text(next_of_kin_name);

            var next_of_kin_address = $('#next_of_kin_address').val();
            $('#display_next_of_kin_address').text(next_of_kin_address);

            var next_of_kin_telephone = $('#next_of_kin_telephone').val();
            $('#display_next_of_kin_telephone').text(next_of_kin_telephone);

            var country_of_residence = $('#country_of_residence').val();
            $('#display_country_of_residence').text(country_of_residence);

            var years_at_residence = $('#years_at_residence').val();
            $('#display_years_at_residence').text(years_at_residence);

            var city = $('#city').val();
            $('#display_city').text(city);

            var town = $('#town').val();
            $('#display_town').text(town);

            var residential_address = $('#residential_address').val();
            $('#display_residential_address').text(residential_address);

            var postal_address = $('#postal_address').val();
            $('#display_postal_address').text(postal_address);

            var employment_type = $('#employment_type').val();
            $('#display_employment_type').text(employment_type);

            var employee_number = $('#employee_number').val();
            $('#display_employee_number').text(employee_number);

            var employee_code = $('#employee_code').val();
            $('#display_employee_code').text(employee_code);

            var department = $('#department').val();
            $('#display_department').text(department);

            var date_of_employment = $('#date_of_employment').val();
            $('#display_date_of_employment').text(date_of_employment);

            var last_update_date = $('#last_update_date').val();
            $('#display_last_update_date').text(last_update_date);

            var tax_identification_number = $('#tax_identification_number').val();
            $('#display_tax_identification_number').text(tax_identification_number);

            if ($('#citizen_yes').is(":checked"))
            {
                var citizen_of_US = ('Yes');
            }else if ($('#citizen_no').is(":checked")){
                var citizen_of_US = ("No");
            }else {
                toaster('Select citizenship' , 'error', 6000);

                return false;
            }
            $('#display_citizen_of_us').text(citizen_of_US);


            if ($('#resident_yes').is(":checked"))
            {
                var us_resident = ('Yes');
            }else if ($('#resident_no').is(":checked")){
                var us_resident = ("No");
            }else {
                toaster("Select Residency" , 'error' , 6000);

                return false;
            }
            $('#display_us_resident').text(us_resident);


            /* console.log(select_gender);
            console.log(citizen_of_US);
            console.log(us_resident); */

            {{-- var proof_of_address = $('#proof_of_address').val(); display_proof_of_address --}}

            $('#proof_of_address').change(function(){

                var file = $("#proof_of_address[type=file]").get(0).files[0];

                    if(file){
                        var reader = new FileReader();

                        reader.onload = function(){
                            $(".display_selected_id_image").attr("src", reader.result);
                        }

                        reader.readAsDataURL(file);

                    }

                    $('.display_selected_id_image').show();
            })

        })

            $('#kyc_confirm_btn').click(function(e){
                e.preventDefault();

                if ($('#gender_male').is(":checked"))
                {
                    var select_gender = ('Male');
                }else if ($('#gender_female').is(":checked")){
                    var select_gender = ("Female");
                }else {

                    return false;
                }


                if ($('#citizen_yes').is(":checked"))
                {
                    var citizen_of_US = ('Yes');
                }else if ($('#citizen_no').is(":checked")){
                    var citizen_of_US = ("No");
                }else {

                    return false;
                }



                if ($('#resident_yes').is(":checked"))
                {
                    var us_resident = ('Yes');
                }else if ($('#resident_no').is(":checked")){
                    var us_resident = ("No");
                }else {


                    return false;
                }



                var customer_number = $('#customer_number').val();
                var title = $('#title').val();
                var firstname = $('#firstname').val();
                var surname = $('#surname').val();
                var Othername = $('#Othername').val();
                var telephone_number = $('#telephone_number').val();
                var email_address = $('#email_address').val();
                var date_of_birth = $('#date_of_birth').val();
                var gender = select_gender;
                var marital_status = $('#marital_status').val();
                var number_of_children = $('#number_of_children').val();
                var nationality = $('#nationality').val();
                var id_type = $('#id_type').val();
                var id_number = $('#id_number').val();
                var date_of_issue = $('#date_of_issue').val();
                var date_of_expiry = $('#date_of_expiry').val();
                var mother_maiden_name = $('#mother_maiden_name').val();
                var next_of_kin_name = $('#next_of_kin_name').val();
                var next_of_kin_address = $('#next_of_kin_address').val();
                var next_of_kin_telephone = $('#next_of_kin_telephone').val();
                var country_of_residence = $('#country_of_residence').val();
                var years_at_residence = $('#years_at_residence').val();
                var city = $('#city').val();
                var town = $('#town').val();
                var residential_address = $('#residential_address').val();
                var postal_address = $('#postal_address').val();
                var employment_type = $('#employment_type').val();
                var employee_number = $('#employee_number').val();
                var employee_code = $('#employee_code').val();
                var department = $('#department').val();
                var date_of_employment = $('#date_of_employment').val();
                var last_update_date = $('#last_update_date').val();
                var tax_identification_number = $('#tax_identification_number').val();
                var us_citizen = citizen_of_US ;
                var resident = us_resident ;
                var prove_of_address = $('#proof_of_address_').val()







                $.ajax({
                    'type' : 'POST' ,
                    "url" : " submit-kyc" ,
                    "datatype": "application/json",
                    "data" : {
                        'customer_number' : customer_number ,
                        'title' : title ,
                        'firstname' : firstname ,
                        'surname' : surname ,
                        'Othername' : Othername ,
                        'telephone_number' : telephone_number ,
                        'email_address' : email_address ,
                        'date_of_birth' : date_of_birth ,
                        'gender' : gender ,
                        'marital_status' : marital_status ,
                        'number_of_children' : number_of_children ,
                        'nationality' : nationality ,
                        'id_type' : id_type ,
                        'id_number' : id_number ,
                        'date_of_issue' : date_of_issue ,
                        'date_of_expiry' : date_of_expiry ,
                        'mother_maiden_name' : mother_maiden_name ,
                        'next_of_kin_name' : next_of_kin_name ,
                        'next_of_kin_address' : next_of_kin_address ,
                        'next_of_kin_telephone' : next_of_kin_telephone ,
                        'country_of_residence' : country_of_residence ,
                        'years_at_residence' : years_at_residence ,
                        'city' : city ,
                        'town' : town ,
                        'residential_address' : residential_address ,
                        'postal_address' : postal_address ,
                        'employment_type' : employment_type ,
                        'employee_number' : employee_number ,
                        'employee_code' : employee_code ,
                        'department' : department ,
                        'date_of_employment' : date_of_employment ,
                        'last_update_date' : last_update_date ,
                        'tax_identification_number' : tax_identification_number ,
                        'us_citizen' : us_citizen ,
                        'resident' : resident ,
                        'prove_of_address' : prove_of_address

                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:
                    function(response) {
                        console.log(response);
                        if(response.responseCode == '000'){
                            toaster(response.message, 'success', 10000);
                        }else{
                            toaster(response.message, 'error' , 6000);
                        }
                    }

                })

            })

    })
</script>

@endsection


