@extends('layouts.app')




@section('content')


    @include('snippets.top_navbar', ['page_title' => 'SAVINGS ACCOUNT '])


<div class="container" >
    <br><br><br><br>
    <div class="row" >

        <div class="col-md-4" >

            <div class="card">

                <div class="card-body">
                    <div class=" ">
                        <div class="btn-group d-block mb-2">
                            <p class="card-text" >To successfully create an account
                                You need to follow the KYC collected process</p>
                                <br>
                            <h4 class="card-title" style="color: #7e57c2">Savings Account Process</h4>

                        </div>
                        <div class="mail-list mt-3">
                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>PERSONAL DETAILS</a>
                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>ID  DETAILS</a>
                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>CONTACT DETAILS</a>
                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>BIO DETAILS</a>
                        </div>

                        <br>
                        <h4 class="card-title" style="color: #7e57c2">Requirements</h4>
                        <div class="mail-list mt-3">
                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-account-check-outline font-18 align-middle mr-2" style="color: #7e57c2"></i>Selfie</a>
                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-card-account-details-outline font-18 align-middle mr-2" style="color: #7e57c2"></i>ID (Driver Licence SSNIT/Passport/Voter card +
                                Birth Certificate)</a>
                            <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-map-marker-outline font-18 align-middle mr-2" style="color: #7e57c2"></i>Residential Address</a>
                          </div>

                        <br>

                        <h5 class="card-title" ><i class="mdi mdi-alert-circle mdi-18px" style="color: #7e57c2"></i>&nbsp; Must be 18 years and above</h5>


                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-8">


            <div class="card">

                <div class="card-body">
                    <p class="sub-header font-18 purple-color">
                        SAVINGS ACCOUNT CREATION
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <br><br>
                            <div class="nav nav-pills flex-column navtab-bg nav-pills-tab text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active show py-2" id="custom-v-pills-billing-tab" data-toggle="pill" href="#custom-v-pills-billing" role="tab" aria-controls="custom-v-pills-billing"
                                    aria-selected="true">

                                    Personal Details
                                </a>
                                <a class="nav-link mt-2 py-2" id="custom-v-pills-shipping-tab" data-toggle="pill" href="#custom-v-pills-shipping" role="tab" aria-controls="custom-v-pills-shipping"
                                    aria-selected="false">

                                    Contact & ID Details</a>
                                <a class="nav-link mt-2 py-2" id="custom-v-pills-payment-tab" data-toggle="pill" href="#custom-v-pills-payment" role="tab" aria-controls="custom-v-pills-payment"
                                    aria-selected="false">

                                    Bio Details</a>
                                <a class="nav-link mt-2 py-2" id="summary-tab" data-toggle="pill" href="#summary-v-pills-payment" role="tab" aria-controls="custom-v-pills-payment"
                                    aria-selected="false">

                                    Summary</a>
                            </div>

                        </div> <!-- end col-->
                        <div class="col-lg-8">

                            <div class="tab-content p-3">
                                <div class="tab-pane fade active show" id="custom-v-pills-billing" role="tabpanel" aria-labelledby="custom-v-pills-billing-tab">
                                    <div>
                                        <h4 class="header-title">Personal Details</h4>

                                        <form action="" id="personal_details">
                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-phone">Title</label>

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
                                                        <label for="billing-phone">Surname</label>
                                                        <input class="form-control" type="text" placeholder="Surname" id="surname" required/>
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->

                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-phone">Firstname</label>
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
                                            </div> <!-- end row -->

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="billing-address">Date of Birth</label>

                                                        <div class="form-group mb-3">
                                                           <input class="form-control" id="DOB" type="date" name="date" required>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-town-city">Place of Birth</label>
                                                        <input class="form-control" type="text" placeholder="Enter your place of birth" id="birth_place" required/>
                                                    </div>
                                                </div>

                                            </div> <!-- end row -->
                                            <div class="row">
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
                                            </div> <!-- end row -->

                                            <div class="col-md-12">
                                                {{-- <div class="col-sm-6">
                                                    <a href="{{ url('account-creation') }}" class="btn btn-secondary">
                                                        <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart </a>
                                                </div> <!-- end col --> --}}
                                                <div class="col-md-12">
                                                    <div class="text-sm-right mt-2 mt-sm-0">
                                                        {{--  <a href="#" class="btn btn-primary btn-block" id="next1">
                                                         Next</a>  --}}
                                                         <button class="btn btn-primary btn-block" type="submit" id="submit1">Next</button>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-v-pills-shipping" role="tabpanel" aria-labelledby="custom-v-pills-shipping-tab">
                                    <div>
                                        <h4 class="header-title">Contact Details</h4>

                                        <form action="" id="contact_id_details">
                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input class="form-control" type="number" placeholder="Mobile number" id="mobile_number" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" type="email" placeholder="Email" id="email" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input class="form-control" type="text" placeholder="City" id="city" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Town</label>
                                                        <input class="form-control" type="text" placeholder="Town" id="town" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Residential Address</label>
                                                        <input class="form-control" type="text" placeholder="Home Address" id="residential_address" required/>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end row-->

                                            <h4 class="header-title mt-4">ID Details</h4>

                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>ID Type</label>
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
                                                        <label>ID Number</label></label>
                                                        <input class="form-control" type="text" placeholder="ID Number" id="id_number" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-last-name">Date of Issue</label>
                                                        <input class="form-control" type="date" placeholder="Date of Issue" id="issue_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-last-name">Date of Expiry</label>
                                                        <input class="form-control" type="date" placeholder=" " id="expiry_date" required/>
                                                    </div>
                                                </div>


                                                <div class="form-group mb-3">
                                                    <label for="example-fileinput">Upload Image of Selected ID</label>
                                                    <input type="file" id="image_upload" class="form-control-file" required>
                                                </div>


                                            </div>
                                            <!-- end row-->

                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-secondary">
                                                        Back </a>
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="text-sm-right mt-2 mt-sm-0">
                                                        {{--  <a href="#" class="btn btn-primary" id="next2">
                                                            Next </a>  --}}
                                                            <button class="btn btn-primary" type="submit" id="submit2">Next</button>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                    </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-v-pills-payment" role="tabpanel" aria-labelledby="custom-v-pills-payment-tab">
                                    <div>
                                        <h4 class="header-title">Bio Details</h4>

                                        <!-- Passport Picture Upload-->
                                        <form action="" id="bio_details">
                                            <div class="form-group mb-3">
                                                <label for="example-fileinput">Picture(Passport)</label>
                                                <input type="file" id="passport_picture" class="form-control-file" required><br>
                                                <img class="img-fluid previewImg1" id="previewImg1" src="#" alt="your image" />
                                            </div>

                                            <!-- Paper and Image Capture-->


                                            <div class="form-group mb-3">
                                                <label for="example-fileinput">Selfie with a signed paper</label>
                                                <input type="file" id="selfie_upload" class="form-control-file" required><br>
                                                <img class="img-fluid previewImg2" id="previewImg2" src="#" alt="your image" />
                                            </div>
                                            <!-- Cash on Delivery box-->

                                            <!-- end Cash on Delivery box-->

                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-secondary">
                                                        Back  </a>
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="text-sm-right mt-2 mt-sm-0">
                                                        {{--  <a href="#" class="btn btn-primary">
                                                            Next </a>  --}}
                                                            <button class="btn btn-primary" type="submit" id="final_submit">Next</button>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="summary-v-pills-payment" role="tabpanel" aria-labelledby="custom-v-pills-payment-tab">

                                                <h5 class="mb-3 mt-4 bg-light p-2">Personal Details Summary</h5>
                                                <div class="">

                                                    <p class="mb-1"><span class="font-weight-light mr-2">Title:<span class="font-weight-semibold mr-2" id="display_title"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Surname:<span class="font-weight-semibold mr-2" id="display_surname"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Firstname:<span class="font-weight-semibold mr-2" id="display_firstname"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Gender:<span class="font-weight-semibold mr-2" id="display_select_gender"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Date of Birth:<span class="font-weight-semibold mr-2" id="display_DOB"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Place of Birth:<span class="font-weight-semibold mr-2" id="display_birth_place"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Country:<span class="font-weight-semibold mr-2" id="display_country"> &nbsp</span></span></p>
                                                </div>
                                                <h5 class="mb-3 mt-4 bg-light p-2"> Contact & ID Details Summary</h5>
                                                <div id=" ">
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Mobile Number:<span class="font-weight-semibold mr-2" id="display_mobile_number"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Email:<span class="font-weight-semibold mr-2" id="display_email"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">City:<span class="font-weight-semibold mr-2" id="display_city"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Town:<span class="font-weight-semibold mr-2" id="display_town"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Residential Address:<span class="font-weight-semibold mr-2" id="display_residential_address"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">ID Type:<span class="font-weight-semibold mr-2" id="display_id_type"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">ID Number:<span class="font-weight-semibold mr-2" id="display_id_number"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Date Issued:<span class="font-weight-semibold mr-2" id="display_issue_date"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Date of Expiry:<span class="font-weight-semibold mr-2" id="display_expiry_date"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">ID image:<img class="img-fluid" id="previewImg" src="#" alt="your image" /><span class="font-weight-semibold mr-2" id="display_title"> &nbsp</span></span></p>
                                                </div>
                                                <h5 class="mb-3 mt-4 bg-light p-2"> Bio Details Summary</h5>
                                                <div>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Passport Picture:<img class="img-fluid previewImg1" id="_passport_picture_summary" src="#" alt="your image" /><span class="font-weight-semibold mr-2" id="display_title"> &nbsp</span></span></p>
                                                    <p class="mb-1"><span class="font-weight-light mr-2">Selfie Image:<img class="img-fluid previewImg2" id="selfie_picture_summary" src="#" alt="your image" /><span class="font-weight-semibold mr-2" id="display_title"> &nbsp</span></span></p>
                                                </div>

                                                <button class="btn btn-primary btn-block" type="submit"> Submit</button>

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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        $('#personal_details').submit(function(e){
            e.preventDefault();

            var title = $('#title').val();
            var surname = $('#surname').val();
            var firstname = $('#firstname').val();
            var gender = $("#select_gender input[type='radio']:checked").val();
            var birthday = $("#DOB").datepicker().val();
            var birth_place = $('#birth_place').val();
            var country = $('#country').val();

            $('#custom-v-pills-billing-tab').removeClass('active show');
            $('#custom-v-pills-shipping-tab').addClass('active show');
            $('#custom-v-pills-billing').removeClass('active show');
            $('#custom-v-pills-shipping').addClass('active show');
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


        // ID option selector


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


                $('#custom-v-pills-shipping-tab').removeClass('active show');
                $('#custom-v-pills-payment-tab').addClass('active show');
                $('#custom-v-pills-shipping').removeClass('active show');
                $('#custom-v-pills-payment').addClass('active show');


            })

            $('#bio_details').submit(function(e){
                e.preventDefault();

//                var passport_picture = $('#passport_picture').val();
//                var selfie_upload = $('#selfie_upload').val();


                $('#custom-v-pills-payment-tab').removeClass('active show');
                $('#summary-tab').addClass('active show');
                $('#custom-v-pills-payment').removeClass('active show');
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

{{--  
                // Bio Details on Summary Page
                var file = $("#passport_picture[type=file]").get(0).files[0];

                        if(file){
                            var reader = new FileReader();
                
                            reader.onload = function(){
                                $("#passport_picture_summary").attr("src", reader.result);
                            }
                
                            reader.readAsDataURL(file);
                        }


                                
                 var file = $("#selfie_upload[type=file]").get(0).files[0];
                
                        if(file){
                            var reader = new FileReader();
                
                            reader.onload = function(){
                                $("#selfie_picture_summary").attr("src", reader.result);
                            }
                
                            reader.readAsDataURL(file);
                        }   
                                --}}
            })

            // Bio Details

            $('#passport_picture').change(function(){
                
                 var file = $("#passport_picture[type=file]").get(0).files[0];
                
                        if(file){
                            var reader = new FileReader();
                
                            reader.onload = function(){
                                $(".previewImg1").attr("src", reader.result);
                            }
                
                            reader.readAsDataURL(file);
                        }             
            })
            
            $('#selfie_upload').change(function(){
                
                 var file = $("#selfie_upload[type=file]").get(0).files[0];
                
                        if(file){
                            var reader = new FileReader();
                
                            reader.onload = function(){
                                $(".previewImg2").attr("src", reader.result);
                            }
                
                            reader.readAsDataURL(file);
                        }             
            })
    })

</script>

@endsection
