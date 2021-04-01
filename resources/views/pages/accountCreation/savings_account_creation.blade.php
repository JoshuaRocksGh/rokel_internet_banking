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
                                    <h4 class="modal-title text-primary" id="myCenterModalLabel">Aquiring a Savings Account</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
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
                                                                <option value="Mr">Mr</option>
                                                                <option value="Mrs">Mrs</option>
                                                                <option value="Dr">Dr</option>
                                                                <option value="Miss">Miss</option>
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
                                                            <option value="AF~Afghanistan">Afghanistan</option>
                                                            <option value="AL~Albania">Albania</option>

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
                                                        <input class="form-control" type="number" placeholder="Mobile number" id="mobile_number" required/>
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
                                                                <option value="Passport">Passport</option>
                                                                <option value="Driver license">Driver license</option>
                                                                <option value="Voter ID">Voter ID</option>
                                                                <option value="4">Ghana Card</option>
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
                                                <img class="img-fluid img_display display_passport_picture previewImg1" id="previewImg1" src="#" alt="your image" />
                                            </div>

                                            <!-- Paper and Image Capture-->


                                            <div class="form-group mb-3">
                                                <b for="example-fileinput">Selfie with a signed paper</b>
                                                <input type="file" id="selfie_upload" class="form-control-file" required><br>
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
                                               <h5 class="mb-3 mt-1 bg-light p-2">Personal Details Summary</h5>
                                                <div class="">

                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Title: </b> <span class="font-weight-semibold mr-3" id="display_title"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Surname: </b> <span class="font-weight-semibold mr-3" id="display_surname"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Firstname: </b> <span class="font-weight-semibold mr-3" id="display_firstname"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Gender: </b> <span class="font-weight-semibold mr-3" id="display_select_gender"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Date of Birth: </b> <span class="font-weight-semibold mr-3" id="display_DOB"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Place of Birth: </b> <span class="font-weight-semibold mr-3" id="display_birth_place"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Country: </b> <span class="font-weight-semibold mr-3" id="display_country"> &nbsp</span></span></p>
                                                </div>
                                                <h5 class="mb-3 mt-4 bg-light p-2"> Contact & ID Details Summary</h5>
                                                <div id=" ">
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Mobile Number: </b> <span class="font-weight-semibold mr-3" id="display_mobile_number"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Email: </b> <span class="font-weight-semibold mr-3" id="display_email"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> City: </b> <span class="font-weight-semibold mr-3" id="display_city"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Town: </b> <span class="font-weight-semibold mr-3" id="display_town"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Residential Address: </b> <span class="font-weight-semibold mr-3" id="display_residential_address"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> ID Type: </b> <span class="font-weight-semibold mr-3" id="display_id_type"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> ID Number: </b> <span class="font-weight-semibold mr-3" id="display_id_number"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Date Issued: </b> <span class="font-weight-semibold mr-3" id="display_issue_date"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Date of Expiry: </b> <span class="font-weight-semibold mr-3" id="display_expiry_date"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> ID image: </b>  <br> <img class="img-fluid display_selected_id_image" id="previewImg" src="#" alt="your image" /><span class="font-weight-semibold mr-3" id="display_title"> &nbsp</span></span></p>
                                                </div>
                                                <h5 class="mb-3 mt-4 bg-light p-2"> Bio Details Summary</h5>
                                                <div>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"><b> Passport Picture: </b>  <br> <img class="img-fluid display_passport_picture previewImg1" id="_passport_picture_summary" src="#" alt="your image" /><span class="font-weight-semibold mr-3" id="display_title"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2"> <b> Selfie Image: </b>  <br> <img class="img-fluid display_selfie previewImg2" id="selfie_picture_summary" src="#" alt="your image" /><span class="font-weight-semibold mr-3" id="display_title"> &nbsp</span></span></p>
                                                </div>

                                            </div>

                                            <ul class="list-inline wizard mb-0">
                                                <li class=" list-inline-item"><button type="button"  class="btn btn-secondary btn-rounded" id="bio-previous-btn" data-toggle="pill" href="#custom-v-pills-bio-details" role="tab" aria-controls="custom-v-pills-bio-details"><i class="fe-arrow-left"></i> Previous</button></li>

                                                <li class="list-inline-item float-right"><button class="btn btn-primary btn-rounded float-right " type="button"> <i class="fe-checked"></i> Confirm & Submit</button></li>
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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  --}}

@endsection



@section('scripts')

<script>

    $(document).ready(function(){

    //    $('#previewImg').hide();
    $('.display_selected_id_image').hide();
    $(".display_passport_picture").hide();
    $('.display_selfie').hide();


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
                $('#dislay_id_type').text(id_type);

                var id_number = $('#id_number').val();
                $('#display_id_number').text(id_number);

                var issue_date = $("#issue_date").datepicker().val();
//                $('#display_issue_date').text(issue_date);

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
                        }

                        $(".display_selfie").show()
            })
    })

</script>


@endsection
