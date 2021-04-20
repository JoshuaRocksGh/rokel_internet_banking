@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card card-background-image">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-6">
                                <h3 class="text-primary">KYC Update</h4>

                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-info btn-sm  mod-open" data-toggle="modal" data-target="#centermodal"> <span class="fe-info mr-1"></span> info</button>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                         <hr>

                         <div class="row">
                            <div class="col-md-2"></div>

                            <!-- Center modal content -->
                            <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true" style="zoom: 0.9;">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-primary" id="myCenterModalLabel">Aquiring a Savings Account</h4>
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
                                                                <input type="text" class="form-control" id="title"  required>
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
                                                                <label class="form-label">Proof of Address</label>
                                                                <input type="file" class="form-control-file" id="proof_of_address"  required>
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

                                                        </div> <!-- end row -->
                                                        <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="basic_information_next_btn">Next <i class="fe-arrow-right"></i></button>

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
                                                                <input type="text" class="form-control" id="marital_status"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Number of Children</label>
                                                                <input type="text" class="form-control" id="number_of_children"  required>
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
                                                                <input type="number" class="form-control" id="id_number"  required>
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
                                                                <label class="form-label">Last Update Date</label>
                                                                <input type="Date" class="form-control" id="last_update_date"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Tax Identification Number</label>
                                                                <input type="text" class="form-control" id="tax_identification_number"  required>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label">Are you a citizen of US?</label>
                                                                {{-- <input type="text" class="form-control" id="city"  required> --}}
                                                                <div class="form-group">

                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input radio" type="radio" name="onetime" id="citizen_yes" value="Yes" >
                                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                                    </div>
                                                                    &nbsp;&nbsp;
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input radio" type="radio" name="onetime" id="citizen_no" value="No">
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
                                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#bs-example-modal-lg" type="submit">Submit</button>
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
                                            <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="form-label">Customer Number</label>
                                                    <span id="display_customer_number"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Title</label>
                                                    <span id="display_title"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Firstname</label>
                                                    <span id="display_firstname"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Surname</label>
                                                    <span id="display_surname"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Othername</label>
                                                    <span id="display_othername"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Telephone Number</label>
                                                    <span id="display_telephone_number"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Email Address</label>
                                                    <span id="display_email_address"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Proof of Address</label>
                                                    <span id="display_proof_of_address"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Date of Birth</label>
                                                    <span id="display_date_of_birth"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Select Gender</label>
                                                    <span id="display_gender_male"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Marital Status</label>
                                                    <span id="display_marital_status"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Number of Children</label>
                                                    <span id="display_number_of_children"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Nationality</label>
                                                    <span id="display_nationality"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">ID Type</label>
                                                    <span id="display_id_type"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">ID Number</label>
                                                    <span id="display_id_number"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Date of Issue</label>
                                                    <span id="display_date_of_issue"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Date of Expiry</label>
                                                    <span id="display_date_of_expiry"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Mother Maiden Name</label>
                                                    <span id="display_mother_maiden_name"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Next of Kin Name</label>
                                                    <span id="display_next_of_kin_name"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Next of Kin Address</label>
                                                    <span id="display_next_of_kin_address"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Next of Kin Telephone</label>
                                                    <span id="display_next_of_kin_telephone"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Country of Residence</label>
                                                    <span id="display_country_of_residence"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Number of years at residence</label>
                                                    <span id="display_years_at_residence"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">City</label>
                                                    <span id="display_city"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Town</label>
                                                    <span id="display_town"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Residential Address</label>
                                                    <span id="display_residential_address"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Postal Address</label>
                                                    <span id="display_postal_address"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Employment Type</label>
                                                    <span id="display_employment_type"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Employee Number</label>
                                                    <span id="display_employee_number"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Employee Code</label>
                                                    <span id="display_employee_code"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Department</label>
                                                    <span id="display_department"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Date of Employement</label>
                                                    <span id="display_date_of_employment"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Last Update Date</label>
                                                    <span id="display_last_update_date"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Tax Identification Number</label>
                                                    <span id="display_tax_identification_number"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">Are you a citizen of US?</label>
                                                    <span id="display_citizen_of_us"></span>
                                                    <br>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="form-label">US Resident</label>
                                                    <span id="display_us_resident"></span>
                                                    <br>
                                                </div>

                                            </div>

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

<script>
    $(document).ready(function(){

        {{-- $('#second').hide();
        $('#third').hide();
        $('#fourth').hide();
        $('#sixth').hide(); --}}


        setTimeout(function() {
            $(".mod-open").trigger('click');
        },3000);

        $('#basic_information_tab').addClass('active show');
        $('#first').addClass('active show');


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
            var proof_of_address = $('#proof_of_address').val();



            console.log(customer_number);
            console.log(title);
            console.log(firstname);
            console.log(surname);
            console.log(Othername);
            console.log(telephone_number);
            console.log(email_address);
            console.log(proof_of_address);
            console.log(date_of_birth);
            console.log(select_gender);

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

    })
</script>

@endsection


