@extends('layouts.app')




@section('content')


    @include('snippets.top_navbar', ['page_title' => 'SAVINGS ACCOUNT '])


<div class="container" style="zoom: 0.8;">
    <br><br><br><br>
    <div class="row" >

        <div class="col-md-1" >



        </div>

        <div class="col-md-10">


            <div class="card card-background-image">

                <div class="card-body">


                    <!-- Center modal content -->
                    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true" style="zoom: 0.9;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-primary" id="myCenterModalLabel">Acquiring a Savings Account</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                </div>
                                <div class="modal-body">
                                    <div class=" ">
                                        <div class="btn-group d-block mb-2">
                                            <p class="card-text" >To successfully create an account
                                                You need to follow the KYC collected process</p>
                                                <br>
                                            <h4 class="card-title" style="color: #0561ad">
                                                Process
                                            </h4>

                                        </div>
                                        <div class="mail-list mt-3">
                                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>PERSONAL DETAILS</a>
                                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>ID  DETAILS</a>
                                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>CONTACT DETAILS</a>
                                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #0561ad"></i>BIO DETAILS</a>
                                        </div>

                                        <br>
                                        <h4 class="card-title" style="color: #0561ad">Requirements</h4>
                                        <div class="mail-list mt-3">
                                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-account-check-outline font-18 align-middle mr-2" style="color: #0561ad"></i>Selfie</a>
                                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-card-account-details-outline font-18 align-middle mr-2" style="color: #0561ad"></i>ID (Driver Licence SSNIT/Passport/Voter card +
                                                Birth Certificate)</a>
                                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-map-marker-outline font-18 align-middle mr-2" style="color: #0561ad"></i>Residential Address</a>
                                          </div>

                                        <br>

                                        <h5 class="card-title" ><i class="mdi mdi-alert-circle mdi-18px" style="color: #0561ad"></i>&nbsp; Must be 18 years and above</h5>


                                    </div>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->



                    <p class="sub-header font-18 purple-color">
                        ACCOUNT CREATION
                        <button type="button" class="btn btn-info btn-sm float-right mod-open" data-toggle="modal" data-target="#centermodal"> <span class="fe-info mr-1"></span> info</button>

                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <br><br>
                            <div class="nav nav-pills flex-column navtab-bg nav-pills-tab text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show py-2" id="custom-v-pills-personal-details-tab" data-toggle="pill" href="#custom-v-pills-personal-details" role="tab" aria-controls="custom-v-pills-personal-details"
                                    aria-selected="true">

                                    Personal Details
                                </a>
                                <a class="nav-link mt-2 py-2" id="custom-v-pills-contact-and-id-details-tab" data-toggle="pill" href="#custom-v-pills-contact-and-id-details" role="tab" aria-controls="custom-v-pills-contact-and-id-details"
                                    aria-selected="false">

                                    Contact & ID Details</a>
                                <a class="nav-link mt-2 py-2" id="custom-v-pills-bio-details-tab" data-toggle="pill" href="#custom-v-pills-bio-details" role="tab" aria-controls="custom-v-pills-bio-details"
                                    aria-selected="false">

                                    Bio Details</a>
                                <a class="nav-link mt-2 py-2" id="summary-tab" data-toggle="pill" href="#summary-v-pills-payment" role="tab" aria-controls="custom-v-pills-payment-payment"
                                    aria-selected="false">

                                    Summary</a>
                            </div>

                        </div> <!-- end col-->
                        <div class="col-lg-8">

                            <div class="tab-content p-3">
                                <div class="tab-pane fade active show" id="custom-v-pills-personal-details" role="tabpanel" aria-labelledby="custom-v-pills-personal-details-tab">
                                    <div>

                                        <h5 class="mb-3 mt-0 bg-light p-2">Personal Details</h5>

                                        <form action="" id="personal_details"  autocomplete="off" aria-autocomplete="off">
                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b for="billing-phone">Title</b>

                                                            <select class="custom-select title" id="title" required>
                                                                <option value="">Title</option>
                                                                {{--  <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Dr">Dr</option>
                                                                <option value="Miss">Miss</option>  --}}
                                                            </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b for="billing-phone">Surname</b>
                                                        <input class="form-control" type="text" placeholder="Surname" id="surname" required/>
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b for="billing-phone">Firstname</b>
                                                         <input class="form-control" type="text" placeholder="Firstname" id="firstname" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-phone">Gender</label>
                                                        <div class="row" id="select_gender">
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <div class="radio form-check-inline radio-primary">
                                                                        <input type="radio" id="radio1" value="Male" name="radioInline" required>
                                                                        <label for="inlineRadio1">Male </label>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                        <div class="radio form-check-inline radio-primary">
                                                                            <input type="radio" id="radio2" value="Female" name="radioInline" required>
                                                                            <label for="inlineRadio2">Female </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="billing-address">Date of Birth</label>

                                                        <div class="form-group mb-3">
                                                           <input class="form-control" id="DOB" type="date" name="date" required>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-town-city">Place of Birth</label>
                                                        <input class="form-control" type="text" placeholder="Enter your place of birth" id="birth_place" required/>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select data-toggle="select2" title="Country" class="form-control country" id="country" required>
                                                            <option value="">Select Country</option>
                                                            {{--  <option value="AF~Afghanistan">Afghanistan</option>
                                                            <option value="AL~Albania">Albania</option>  --}}

                                                        </select>
                                                    </div>
                                                </div>


                                            <div class="col-md-12">
                                                {{-- <div class="col-sm-6">
                                                    <a href="{{ url('account-creation') }}" class="btn btn-secondary">
                                                        <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart </a>
                                                </div> <!-- end col --> --}}
                                                <div class="col-md-12">
                                                    <div class="text-sm-right mt-2 mt-sm-0">

                                                         <button class="btn btn-primary btn-rounded float-right" type="submit" id="submit1">
                                                             Next
                                                             <i class="fe-arrow-right"></i>
                                                         </button>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-v-pills-contact-and-id-details" role="tabpanel" aria-labelledby="custom-v-pills-contact-and-id-details-tab">
                                    <div>
                                        <h5 class="mb-3 mt-1 bg-light p-2">Contact Details</h5>

                                        <form action="" id="contact_id_details"  autocomplete="off" aria-autocomplete="off">
                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b>Mobile Number</b>
                                                        <input class="form-control" type="" placeholder="Mobile number" id="mobile_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b>Email</b>
                                                        <input class="form-control" type="email" placeholder="Email" id="email" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b>City</b>
                                                        <input class="form-control" type="text" placeholder="City" id="city" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b>Town</b>
                                                        <input class="form-control" type="text" placeholder="Town" id="town" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b>Residential Address</b>
                                                        <input class="form-control" type="text" placeholder="Home Address" id="residential_address" required/>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end row-->


                                        <h5 class="mb-3 mt-1 bg-light p-2">ID Details</h5>


                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b>ID Type</b>
                                                            <select class="custom-select" id="id_type" required>
                                                                <option value="">ID Type</option>
                                                                {{--  <option value="Passport">Passport</option>
                                                                <option value="Driver license">Driver license</option>
                                                                <option value="Voter ID">Voter ID</option>
                                                                <option value="4">Ghana Card</option>  --}}
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b>ID Number</b></label>
                                                        <input class="form-control" type="text" placeholder="ID Number" id="id_number" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b for="billing-last-name">Date of Issue</b>
                                                        <input class="form-control" type="date" placeholder="Date of Issue" id="issue_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <b for="billing-last-name">Date of Expiry</b>
                                                        <input class="form-control" type="date" placeholder=" " id="expiry_date" required/>
                                                    </div>
                                                </div>


                                                <div class="form-group mb-3">
                                                    <b for="example-fileinput">Upload Image of Selected ID</b>
                                                    <input type="file" id="image_upload" class="form-control-file" required><br>
                                                    <input type="hidden" id="image_upload_">
                                                    <img class="img-fluid display_selected_id_image" id="display_selected_id_image" src="#" alt="your image" />
                                                </div>


                                            </div>
                                            <!-- end row-->


                                            <div class="row mt-4">

                                                <div class="col-xl-7">

                                                </div> <!-- end col -->



                                                <div class="col-xl-5">
                                                    <button type="button" class="btn btn-secondary btn-rounded" data-toggle="pill" href="#custom-v-pills-personal-details" role="tab" aria-controls="custom-v-pills-personal-details">
                                                        <i class="fe-arrow-left"></i> Previous  </button>

                                                            <button class="btn btn-primary btn-rounded float-right" type="submit" id="submit2">
                                                                Next  <i class="fe-arrow-right"></i>
                                                            </button>

                                                </div> <!-- end col -->

                                            </div> <!-- end row -->


                                    </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-v-pills-bio-details" role="tabpanel" aria-labelledby="custom-v-pills-bio-details-tab">
                                    <div>
                                        <h5 class="mb-3 mt-1 bg-light p-2">Bio Details</h5>


                                        <!-- Passport Picture Upload-->
                                        <form action="" id="bio_details" autocomplete="off" aria-autocomplete="off">
                                            <div class="form-group mb-3">
                                                <b for="example-fileinput">Picture(Passport)</b>
                                                <input type="file" id="passport_picture" class="form-control-file" required><br>
                                                <input type="hidden" id="passport_picture_">
                                                <img class="img-fluid img_display display_passport_picture previewImg1" id="previewImg1" src="#" alt="your image" />
                                            </div>

                                            <!-- Paper and Image Capture-->


                                            <div class="form-group mb-3">
                                                <b for="example-fileinput">Selfie with a signed paper</b>
                                                <input type="file" id="selfie_upload" class="form-control-file" required><br>
                                                <input type="hidden" id="selfie_upload_">
                                                <img class="img-fluid img_display display_selfie previewImg2" id="previewImg2" src="#" alt="your image" />
                                            </div>
                                            <!-- Cash on Delivery box-->

                                            <!-- end Cash on Delivery box-->
                                            <ul class="list-inline wizard mb-0">
                                                <li class=" list-inline-item"><button type="button"  class="btn btn-secondary btn-rounded" id="bio-previous-btn" data-toggle="pill" href="#custom-v-pills-contact-and-id-details" role="tab" aria-controls="custom-v-pills-contact-and-id-details">
                                                    <i class="fe-arrow-left"></i> Previous  </button></li>

                                                <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded float-right" type="submit" id="final_submit">
                                                    Next  <i class="fe-arrow-right"></i>
                                                </button></li>
                                            </ul>
{{--
                                            <div class="row mt-4">
                                                <div class="col-sm-7">

                                                </div> <!-- end col -->

                                                    <div class="col-sm-5">

                                                        <button type="button"  class="btn btn-secondary btn-rounded" id="bio-previous-btn" data-toggle="pill" href="#custom-v-pills-contact-and-id-details" role="tab" aria-controls="custom-v-pills-contact-and-id-details">
                                                            <i class="fe-arrow-left"></i> Previous  </button>

                                                            <button class="btn btn-primary btn-rounded float-right" type="submit" id="final_submit">
                                                                Next  <i class="fe-arrow-right"></i>
                                                            </button>

                                                </div> <!-- end col -->
                                            </div> <!-- end row-->  --}}

                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="summary-v-pills-payment" role="tabpanel" aria-labelledby="custom-v-pills-bio-details-tab">
                                    <div>
                                               <h5 class="mb-3 mt-1 bg-light p-2">Personal Details</h5>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light">Title:</span> </p>  <span class="font-weight-semibold col-6" id="display_title"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light">Surname:</span></p> <span class="font-weight-semibold col-6" id="display_surname"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light">Firstname:</span></p> <span class="font-weight-semibold col-6" id="display_firstname"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light"> Gender:</span></p> <span class="font-weight-semibold col-6" id="display_select_gender"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light"> Date of Birth:</span></p> <span class="font-weight-semibold col-6" id="display_DOB"></span>
                                                        </div>
                                                        <div class="row">

                                                        <p class="col-6"><span class="font-weight-light"> Place of Birth:</span></p><span class="font-weight-semibold col-6" id="display_birth_place"></span>
                                                        </div>
                                                        <div class="row">

                                                        <p class="col-6"><span class="font-weight-light"> Country: </span></p><span class="font-weight-semibold col-6" id="display_country"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="mb-3 mt-4 bg-light p-2"> Contact & ID Details</h5>
                                                <div id="row">
                                                    <div class="col-12">
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light">Mobile Number:</span></p> <span class="font-weight-semibold col-6" id="display_mobile_number"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light">Email:</span></p> <span class="font-weight-semibold col-6" id="display_email"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light">City:</span></p> <span class="font-weight-semibold col-6" id="display_city"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light">Town:</span></p> <span class="font-weight-semibold col-6" id="display_town"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light"> Residential Address:</span></p><span class="font-weight-semibold col-6" id="display_residential_address"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light ">ID Type:<span></p></span><span class="font-weight-semibold col-6" id="display_id_type"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light ">ID Number:<span></p><span class="font-weight-semibold col-6" id="display_id_number"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light ">Date Issued:<span></p><span class="font-weight-semibold col-6" id="display_issue_date"></span>
                                                        </div>
                                                        <div class="row">

                                                            <p class="col-6"><span class="font-weight-light ">Date of Expiry:<span></p><span class="font-weight-semibold col-6" id="display_expiry_date"></span>
                                                        </div>
                                                    </div>
                                                    <p class="mb-1"><span class="font-weight-light "> <b> ID image: </b>  <br> <img class="img-fluid display_selected_id_image" id="previewImg" src="#" alt="your image" /><span class="font-weight-semibold mr-3" id="display_title"> &nbsp</span>
                                                </div>
                                                <h5 class="mb-3 mt-4 bg-light p-2"> Bio Details</h5>
                                                <div>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"><b> Passport Picture: </b>  <br> <img class="img-fluid display_passport_picture previewImg1" id="_passport_picture_summary" src="#" alt="your image" /><span class="font-weight-semibold mr-3" id="display_title"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Selfie Image: </b>  <br> <img class="img-fluid display_selfie previewImg2" id="selfie_picture_summary" src="#" alt="your image" /><span class="font-weight-semibold mr-3" id="display_title"> &nbsp</span></span></p>
                                                </div>

                                            </div>

                                            <ul class="list-inline wizard mb-0">
                                                <li class=" list-inline-item"><button type="button"  class="btn btn-secondary btn-rounded" id="bio-previous-btn" data-toggle="pill" href="#custom-v-pills-bio-details" role="tab" aria-controls="custom-v-pills-bio-details"><i class="fe-arrow-left"></i> Previous</button></li>

                                                <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded float-right " type="button" id="confirm_submit">
                                                    <span id="confirm_submit_text">Confirm & Submit</span>
                                                    <span class="spinner-border spinner-border-sm mr-1" role="status"
                                                        id="spinner" aria-hidden="true"></span>
                                                    <span id="spinner-text">Loading...</span>
                                                </button></li>
                                            </ul>
{{--
                                            <div class="row mt-4">
                                                <div class="col-sm-5">

                                                </div> <!-- end col -->

                                                    <div class="col-sm-7">
                                                            <button type="button"  class="btn btn-secondary btn-rounded" id="bio-previous-btn" data-toggle="pill" href="#custom-v-pills-bio-details" role="tab" aria-controls="custom-v-pills-bio-details"><i class="fe-arrow-left"></i> Previous</button>
                                                            <button class="btn btn-primary btn-rounded float-right " type="button"> <i class="fe-checked"></i> Confirm & Submit</button>

                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
  --}}


                                    </div>


                                    <!-- Full width modal content -->
                                    <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-full-width">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6>Text in a modal</h6>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    <hr>
                                                    <h6>Overflowing text to show scroll behavior</h6>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                </div>

            </div>


        </div>

    </div>

</div>
{{--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  --}}
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endsection



@section('scripts')

<script>

    {{--  function get_lovs() {

        $(".accounts_display_area").hide()
        $(".accounts_error_area").hide()
        $(".accounts_loading_area").show()

        $.ajax({
            "type": "GET",
            "url": "get-accounts-api",
            "datatype": "application/json",

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log(response);
                if (response.responseCode == '000') {

                    let data = response.data.;

                    let custerlist =



                    $.each(data, function(index) {
                        $('.casa_list_display').append(`<tr>
                            <td>  <a href="{{ url('account-enquiry?accountNumber=${data[index].accountNumber}') }}"> <b class="text-primary">${data[index].accountNumber} </b> </a></td>
                            <td> <b> ${data[index].accountDesc} </b>  </td>
                            <td> <b> ${data[index].accountType}  </b>  </td>
                            <td> <b> ${data[index].currency}  </b>  </td>
                            <td> <b> ${data[index].availableBalance}   </b> </b></td>
                            <td> <b> ${data[index].ledgerBalance}   </b>  </td>
                            <td>  <b> 0.00  </b> </td>
                        </tr>`)

                    })



                    $(".accounts_error_area").hide()
                    $(".accounts_loading_area").hide()
                    $(".accounts_display_area").show()

                } else {

                    $(".accounts_error_area").hide()
                    $(".accounts_loading_area").hide()
                    $(".accounts_display_area").show()

                }

            },
            error: function(xhr, status, error) {

                $(".accounts_loading_area").hide()
                $(".accounts_display_area").hide()
                $(".accounts_error_area").show()


            }
        })
    }  --}}

    function lovs_list() {
        $.ajax({
            'type': 'GET',
            'url': '../get-lovs-list-api',
            "datatype": "application/json",
            success: function(response) {
                console.log(response);
                let title_list = response.data.titleList;
                let country_list = response.data.nationalityList
                let id_list = response.data.documentTypeList

                console.log(id_list);

                $.each(title_list, function(index) {

                    $('#title').append($('<option>', {
                        value: title_list[index].description
                    }).text(title_list[index].description
                    ));



                });

                $.each(country_list, function(index) {

                    $('#country').append($('<option>', {
                        value: country_list[index].description
                    }).text(country_list[index].description
                    ));

                });

                $.each(id_list, function(index) {

                    $('#id_type').append($('<option>', {
                        value: id_list[index].description
                    }).text(id_list[index].description
                    ));

                });
            },


        })
    }

    $(document).ready(function(){

        $('#spinner').hide(),
        $('#spinner-text').hide(),
        $('#print_receipt').hide();

        setTimeout(function(){
            lovs_list();
        }, 1000);


    //    $('#previewImg').hide();
    $('.display_selected_id_image').hide();
    $(".display_passport_picture").hide();
    $('.display_selfie').hide();

    $("#v-pills-tab").click(function(e){
        return false;
    });

    setTimeout(function() {
            $(".mod-open").trigger('click');
        },4000);


        $('#personal_details').submit(function(e){
            e.preventDefault();

            var title = $('#title').val();
            var surname = $('#surname').val();
            var firstname = $('#firstname').val();
            var gender = $("#select_gender input[type='radio']:checked").val();
            var birthday = $("#DOB").datepicker().val();
            var birth_place = $('#birth_place').val();
            var country = $('#country').val();

            $('#custom-v-pills-personal-details-tab').removeClass('active show');
            $('#custom-v-pills-contact-and-id-details-tab').addClass('active show');
            $('#custom-v-pills-personal-details').removeClass('active show');
            $('#custom-v-pills-contact-and-id-details').addClass('active show');
            return false;
//            alert(title + ' ' + surname + ' ' + firstname + ' ' + gender + ' ' + birthday + ' ' + birth_place + ' ' + country);
        })

        // Personal Details form
        $('#next1').click(function(e){
            e.preventDefault();

            var title = $('#title').val();
            var surname = $('#surname').val();
            var firstname = $('#firstname').val();
            var gender = $("#select_gender input[type='radio']:checked").val();
            var birthday = $("#DOB").datepicker().val();
            var birth_place = $('#birth_place').val();
            var country = $('#country').val();

//            alert(title + '' + surname + '' + firstname + '' + gender + '' + birthday + '' + birth_place + '' + country);


        })


        $('#image_upload').change(function(){

            var file = $("#image_upload[type=file]").get(0).files[0];

                   if(file){
                       var reader = new FileReader();

                       reader.onload = function(){
                           $(".display_selected_id_image").attr("src", reader.result);
                       }

                       reader.readAsDataURL(file);

                       reader.onload = function(){
                        {{--  alert(reader.result)  --}}
                        $(".display_selected_id_image").attr("src", reader.result);
                        $('#image_upload_').val(reader.result)

                       }
                   }

                $('.display_selected_id_image').show();
       })


        $('#previewImg').change(function(){

            var file = $("#previewImg[type=file]").get(0).files[0];

                   if(file){
                       var reader = new FileReader();

                       reader.onload = function(){
                           $(".previewImg").attr("src", reader.result);
                       }

                       reader.readAsDataURL(file);
                   }
       })


            // C0ntact Details Values
            $('#contact_id_details').submit(function(e){
//            $('#next2').submit(function(e){
                e.preventDefault();

                var mobile_number = $('#mobile_number').val();
                var email = $('#email').val();
                var city = $('#city').val();
                var town = $('#town').val();
                var residential_address = $('#residential_address').val();
                var id_type = $('#id_type').val();
                var id_number = $('#id_number').val();
                var issue_date = $("#issue_date").datepicker().val();
                var expiry_date = $("#expiry_date").datepicker().val();
//                var image_upload = $('#image_upload').val(this.files && this.files.length ? this.files[0].name.split('.')[0] : '');
//                console.log(image_upload);



                var file = $("input[type=file]").get(0).files[0];

                        if(file){
                            var reader = new FileReader();

                            reader.onload = function(){
                                $("#previewImg").attr("src", reader.result);


                            }

                            reader.readAsDataURL(file);

                        }


//                alert(mobile_number + ' ' + email + ' ' + city + ' ' + town + ' ' + id_number + ' ' + residential_address + ' ' + issue_date + ' ' + expiry_date + ' ');


                $('#custom-v-pills-contact-and-id-details-tab').removeClass('active show');
                $('#custom-v-pills-bio-details-tab').addClass('active show');
                $('#custom-v-pills-contact-and-id-details').removeClass('active show');
                $('#custom-v-pills-bio-details').addClass('active show');


            })

            $('#bio-previous-btn').click(function(){


            })

            $('#bio_details').submit(function(e){
                e.preventDefault();


                $('#custom-v-pills-bio-details-tab').removeClass('active show');
                $('#summary-tab').addClass('active show');
                $('#custom-v-pills-bio-details').removeClass('active show');
                $('#summary-v-pills-payment').addClass('active show');

                // Personal Details
                var title = $('#title').val();
                $('#display_title').text(title);

                var surname = $('#surname').val();
                $('#display_surname').text(surname);

                var firstname = $('#firstname').val();
                $('#display_firstname').text(firstname);

                var gender = $("#select_gender input[type='radio']:checked").val();
                $('#display_select_gender').text(gender);

                var birthday = $("#DOB").datepicker().val();
                $('#display_DOB').text(birthday);

                var birth_place = $('#birth_place').val();
                $('#display_birth_place').text(birth_place);

                var country = $('#country').val();
                var country_info = country.split("~")
                $('#display_country').text(country_info[1]);



                // Contact & ID Details
                var mobile_number = $('#mobile_number').val();
                $('#display_mobile_number').text(mobile_number);

                var email = $('#email').val();
                $('#display_email').text(email);

                var city = $('#city').val();
                $('#display_city').text(city);

                var town = $('#town').val();
                $('#display_town').text(town);

                var residential_address = $('#residential_address').val();
                $('#display_residential_address').text(residential_address);

                var id_type = $('#id_type').val();
                $('#display_id_type').text(id_type);

                var id_number = $('#id_number').val();
                $('#display_id_number').text(id_number);

                var issue_date = $("#issue_date").datepicker().val();
                $('#display_issue_date').text(issue_date);

                var expiry_date = $("#expiry_date").datepicker().val();
                $('#display_expiry_date').text(expiry_date);


                var file = $("input[type=file]").get(0).files[0];

                        if(file){
                            var reader = new FileReader();

                            reader.onload = function(){
                                $("#previewImg").attr("src", reader.result);
                            }

                            reader.readAsDataURL(file);
                        }


                })

            // Bio Details

            $('#passport_picture').change(function(){

                 var file = $("#passport_picture[type=file]").get(0).files[0];

                        if(file){
                            var reader = new FileReader();

                            reader.onload = function(){
                                $(".display_passport_picture").attr("src", reader.result);
                            }

                            reader.readAsDataURL(file);

                            reader.onload = function(){
                                {{--  alert(reader.result)  --}}

                                $(".display_passport_picture").attr("src", reader.result);
                                $('#passport_picture_').val(reader.result)
                            }
                        }
                        $(".display_passport_picture").show();
            })

            $('#selfie_upload').change(function(){

                 var file = $("#selfie_upload[type=file]").get(0).files[0];

                        if(file){
                            var reader = new FileReader();

                            reader.onload = function(){
                                $(".display_selfie").attr("src", reader.result);
                            }

                            reader.readAsDataURL(file);

                            reader.onload = function(){
                                {{--  alert(reader.result)  --}}
                                $(".display_selfie").attr("src", reader.result);
                                $('#selfie_upload_').val(reader.result)
                         }

                        }

                        $(".display_selfie").show();
            })


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

            $("#confirm_submit").click(function(e){
                e.preventDefault();


                // Personal Details
                var title = $('#title').val();
                $('#display_title').text(title);

                var surname = $('#surname').val();
                $('#display_surname').text(surname);

                var firstname = $('#firstname').val();
                $('#display_firstname').text(firstname);

                var gender = $("#select_gender input[type='radio']:checked").val();
                $('#display_select_gender').text(gender);

                var birthday = $("#DOB").datepicker().val();
                $('#display_DOB').text(birthday);

                var birth_place = $('#birth_place').val();
                $('#display_birth_place').text(birth_place);

                var country = $('#country').val();
                var country_info = country.split("~")
                $('#display_country').text(country_info[1]);
                var country_ = country[1];


                // Contact & ID Details
                var mobile_number = $('#mobile_number').val();
                $('#display_mobile_number').text(mobile_number);

                var email = $('#email').val();
                $('#display_email').text(email);

                var city = $('#city').val();
                $('#display_city').text(city);

                var town = $('#town').val();
                $('#display_town').text(town);

                var residential_address = $('#residential_address').val();
                $('#display_residential_address').text(residential_address);

                var id_type = $('#id_type').val();
                $('#display_id_type').text(id_type);

                var id_number = $('#id_number').val();
                $('#display_id_number').text(id_number);

                var issue_date = $("#issue_date").datepicker().val();
                $('#display_issue_date').text(issue_date);

                var expiry_date = $("#expiry_date").datepicker().val();
                $('#display_expiry_date').text(expiry_date);

                var id_iamge = $('#image_upload_').val();

                var passport_picture = $('#passport_picture_').val();

                var signed_selfie_paper = $('#selfie_upload_').val();


                /* console.log(title);
                console.log(surname);
                console.log(firstname);
                console.log(gender);
                console.log(birthday);
                console.log(birth_place);
                console.log(country);
                console.log(mobile_number);
                console.log(email);
                console.log(city);
                console.log(town);
                console.log(residential_address);
                console.log(id_type);
                console.log(id_number);
                console.log(issue_date);
                console.log(expiry_date);
                console.log(id_iamge);
                console.log(passport_picture);
                console.log(signed_selfie_paper) */

                $('#spinner').show();
                    $('#spinner-text').show();

                    $('#confirm_submit_text').hide(),
                    $('#confirm_submit').attr('disabled', true);

                $.ajax({
                    "type" : "POST" ,
                    "url" : "../savings-account-creation-api" ,
                    "datatype": "application/json",
                    "data" : {
                        "title" : title ,
                        "surname" : surname ,
                        "firstname" : firstname ,
                        "gender" : gender ,
                        "birthday" : birthday ,
                        "birth_place" : birth_place ,
                        "country" : country ,
                        "mobile_number" : mobile_number ,
                        "email" : email ,
                        "city" : city ,
                        "town" : town ,
                        "residential_address" : residential_address ,
                        "id_type" : id_type ,
                        "id_number" : id_number ,
                        "issue_date" : issue_date ,
                        "expiry_date" : expiry_date ,
                        "id_iamge" : id_iamge ,
                        "passport_picture" : passport_picture ,
                        "signed_selfie_paper" :signed_selfie_paper

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

                            $('#spinner').hide();
                            $('#spinner-text').hide();
                            $('#confirm_submit_text').show(),
                            {{--  $('#print_receipt').hide();  --}}
                            {{--  $('#confirm_transfer').show();  --}}
                            $('#confirm_submit').attr('disabled', false);
                        }
                    }
                })

            })
    })

</script>


@endsection
