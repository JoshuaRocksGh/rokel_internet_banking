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
                            </div>

                        </div> <!-- end col-->
                        <div class="col-lg-8">

                            <div class="tab-content p-3">
                                <div class="tab-pane fade active show" id="custom-v-pills-billing" role="tabpanel" aria-labelledby="custom-v-pills-billing-tab">
                                    <div>
                                        <h4 class="header-title">Personal Details</h4>

                                        <form action="">
                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-phone">Title</label>

                                                            <select class="custom-select title">
                                                                <option selected id="title_select">Title</option>
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
                                                        <input class="form-control" type="text" placeholder="Surname" id="surname" />
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->

                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-phone">Firstname</label>
                                                         <input class="form-control" type="email" placeholder="Firstname" id="firstname" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-phone">Gender</label>
                                                        <div class="row" id="select_gender">
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <div class="radio form-check-inline radio-primary">
                                                                        <input type="radio" id="male" value="Male" name="radioInline" >
                                                                        <label for="inlineRadio1">Male </label>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                        <div class="radio form-check-inline radio-primary">
                                                                            <input type="radio" id="female" value="Female" name="radioInline">
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
                                                           <input class="form-control" id="DOB" type="date" name="date">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> <!-- end row -->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-town-city">Place of Birth</label>
                                                        <input class="form-control" type="text" placeholder="Enter your place of birth" id="birth_place" />
                                                    </div>
                                                </div>

                                            </div> <!-- end row -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select data-toggle="select2" title="Country" class="form-control country">
                                                            <option value="0">Select Country</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="BN">Brunei Darussalam</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Cote dIvoire</option>
                                                            <option value="HR">Croatia (Hrvatska)</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KR">Korea, Republic of</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macau</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="MD">Moldova, Republic of</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="AN">Netherlands Antilles</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russian Federation</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint LUCIA</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SH">St. Helena</option>
                                                            <option value="PM">St. Pierre and Miquelon</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syrian Arab Republic</option>
                                                            <option value="TW">Taiwan, Province of China</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Viet Nam</option>
                                                            <option value="VG">Virgin Islands (British)</option>
                                                            <option value="VI">Virgin Islands (U.S.)</option>
                                                            <option value="WF">Wallis and Futuna Islands</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
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
                                                        <a href="#" class="btn btn-primary btn-block" id="next1">
                                                         Next</a>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-v-pills-shipping" role="tabpanel" aria-labelledby="custom-v-pills-shipping-tab">
                                    <div>
                                        <h4 class="header-title">Contact Details</h4>

                                        <form action="">
                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input class="form-control" type="number" placeholder="Mobile number" id="mobile_number" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" type="email" placeholder="Email" id="email" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input class="form-control" type="text" placeholder="City" id="city" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Town</label>
                                                        <input class="form-control" type="text" placeholder="Town" id="town" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Residential Address</label>
                                                        <input class="form-control" type="text" placeholder="Home Address" id="residential_address" />
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end row-->

                                            <h4 class="header-title mt-4">ID Details</h4>

                                            <div class="">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>ID Type</label>
                                                            <select class="custom-select id">
                                                                <option selected>ID Type</option>
                                                                <option value="1">Passport</option>
                                                                <option value="2">Driver license</option>
                                                                <option value="3">Voter ID</option>
                                                                <option value="4">Ghana Card</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>ID Number</label></label>
                                                        <input class="form-control" type="text" placeholder="ID Number" id="id_number" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-last-name">Date of Issue</label>
                                                        <input class="form-control" type="date" placeholder="Date of Issue" id="issue_date" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="billing-last-name">Date of Expiry</label>
                                                        <input class="form-control" type="date" placeholder=" " id="expiry_date" />
                                                    </div>
                                                </div>


                                                <div class="form-group mb-3">
                                                    <label for="example-fileinput">Upload Image of Selected ID</label>
                                                    <input type="file" id="example-fileinput" class="form-control-file">
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
                                                        <a href="#" class="btn btn-primary" id="next2">
                                                            Next </a>
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

                                        <div class="form-group mb-3">
                                            <label for="example-fileinput">Picture(Passport)</label>
                                            <input type="file" id="example-fileinput" class="form-control-file">
                                        </div>

                                        <!-- Paper and Image Capture-->


                                        <div class="form-group mb-3">
                                            <label for="example-fileinput">Selfie with a signed paper</label>
                                            <input type="file" id="example-fileinput" class="form-control-file">
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
                                                    <a href="#" class="btn btn-primary">
                                                         Next </a>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->

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
<script>
    $(document).ready(function(){

        // Personal Details form
        $('#next1').click(function(e){
            e.preventDefault();


            var title = $('select.title').val();
            if ($('select.title').val() == 'Title' ){
                {{-- alert('Chose a Title'); --}}
            }

            var surname = $('#surname').val();
            if (surname.trim() == '' || surname.trim() == undefined ){
                {{-- alert("Enter your Surname"); --}}
            }

            var firstname = $('#firstname').val();
            if (firstname.trim() == '' || firstname.trim() == undefined ){
                {{-- alert("Enter your Firstname"); --}}
            }


            var gender = $("#select_gender input[type='radio']:checked").val();

            var birthday = $("#DOB").datepicker().val();
            var birth_place = $('#birth_place').val();



            // check if the value are empty or undefined.. if any is, alert that all filed required
            // if not show the next section..


            // please make use of the same bank transfer...there is alot you can learn and use from there

        })


        // ID option selector
        $('select.id').change(function(){
            var id_type = $(this).children("option:selected").val();
            console.log(id_type)
        })

        // Contact ID Details form
        $('#next2').click(function(e){
            e.preventDefault();

            // you dont have to be doing onchange
            let title = $('select.title').val();
            alert(title)

            // C0ntact Details Values
            var mobile_number = $('#mobile_number').val();
            var email = $('#email').val();
            var city = $('#city').val();
            var town = $('#town').val();
            var id_number = $('#id_number').val();
            var residential_address = $('#residential_address').val();
            var issue_date = $("#issue_date").datepicker().val();
            var expiry_date = $("#expiry_date").datepicker().val();

            {{-- console.log(mobile_number);
            console.log(email);
            console.log(city);
            console.log(town);
            console.log(id_number);
            console.log(residential_address);
            console.log(issue_date);
            console.log(expiry_date); --}}
            {{-- console.log(mobile_number); --}}


            {{-- ID details --}}
        })

    })
</script>

@endsection
