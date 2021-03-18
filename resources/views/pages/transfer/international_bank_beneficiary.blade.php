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
                            <form action="#">

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                      

                                        <div id="rootwizard">
                                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-3">
                                                <li class="nav-item active" data-target-form="#accountForm">
                                                    <a href="#first" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Bank Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-target-form="#profileForm">
                                                    <a href="#second" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Account Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" data-target-form="#otherForm">
                                                    <a href="#third" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <span class="d-none d-sm-inline">Beneficiary Details</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content mb-0 b-0 pt-0">

                                                <div class="tab-pane active" id="first">
                                                    <form id="accountForm" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-12">
                                                               <label class="purple-color"> Beneficiary Bank Details</label><br><br>
                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                       
                                                                        <select class="custom-select" id="bank_country" name="bank_country" required>
                                                                            <option selected>Bank Country</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                     
                                                                        <select class="custom-select" id="bank_city" name="bank_city">
                                                                            <option selected>Bank City</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                     
                                                                        <select class="custom-select" id="bank_branch" name="bank_branch">
                                                                            <option selected>Bank Branch</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                        <input type="password" id="bank_name" name="bank_name" class="form-control" placeholder="Bank Name" required>


                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    <div class="col-md-12">
                                                                        <input type="password" id="bank_address" name="bank_address" class="form-control" placeholder="Bank Address" required>


                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="confirm3">Re Password</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <input type="password" id="swift" name="swift" class="form-control" placeholder="Swift" required>

                                                                    </div>
                                                                </div>


                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="second">
                                                    <form id="profileForm" method="post" action="#" class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-12">
                                                               <label class="purple-color"> Beneficiary Account Details</label><br><br>

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="acc_nmuber" name="acc_number" class="form-control" placeholder="Account number/BBAN" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="surname3"> Last name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}

                                                                        <select class="custom-select" id="currency" name="currency">
                                                                            <option selected>Currency</option>
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
                                                                    {{--  <label class="col-md-3 col-form-label" for="confirm3">Re Password</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <input type="password" id="firstname" name="firstname" class="form-control" placeholder="Firstname" required>
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
                                                                    {{--  <label class="col-md-3 col-form-label" for="confirm3">Re Password</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <input type="password" id="lastname" name="lastname" class="form-control" placeholder="Lastname" required>
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
                                                                    {{--  <label class="col-md-3 col-form-label" for="confirm3">Re Password</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <input type="password" id="middlename" name="middlename" class="form-control" placeholder="Middlename" required>
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
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="third">
                                                    <form id="otherForm" method="post" action="#" class="form-horizontal">
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
                                                                        <input type="text" id="beneficiary_name" name="beneficiary_name" class="form-control" placeholder="Beneficiary name" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="beneficiary_email" name="beneficiary_name" class="form-control" placeholder="Beneficiary email" required>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="nickname" name="nickname" class="form-control" placeholder="Nickname" required>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="surname3"> Last name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        {{--  <input type="text" id="surname3" name="surname3" class="form-control" required>  --}}

                                                                        <select class="custom-select" id="nationality" name="nationality">
                                                                            <option selected>Nationality</option>
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

                                                                        <select class="custom-select" id="residence" name="residence">
                                                                            <option selected>Country of residence</option>
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

                                                                        <select class="custom-select" id="city" name="city">
                                                                            <option selected>City</option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-3">
                                                                    {{--  <label class="col-md-3 col-form-label" for="name3"> First name</label>  --}}
                                                                    <div class="col-md-12">
                                                                        <input type="text" id="address" name="address" class="form-control" placeholder="Address" required>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <!-- end col -->
                                                        </div>
                                                        <!-- end row -->
                                                    </form>
                                                </div>

                                                <ul class="list-inline wizard mb-0">
                                                    <li class="previous list-inline-item"><a href="javascript: void(0);" class="btn btn-color">Previous</a>
                                                    </li>
                                                    <li class="next list-inline-item float-right"><a href="javascript: void(0);" class="btn btn-color">Next</a></li>
                                                </ul>

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




@endsection
