@extends('layouts.master')

@section('content')


<div class="container">

    <div class=" card card-body">

        <div class="row ">

        <div class="col-md-2"></div>

            <div class="col-md-8">




                <div class="row">
                    <div class="col-md-2">  </div>

                    <div class="col-md-12">
                        <div class="">


                            <ul class="nav nav-tabs nav-bordered nav-justified">
                                <li class="nav-item">
                                    <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        <i class="mdi mdi-security"></i>&nbsp; Change Pin
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                        <i class="fas fa-lock"></i>&nbsp; Change Password
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-b3" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                        <i class="fas fa-unlock-alt"></i>&nbsp; Forget Pin
                                    </a>
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b2">
                                    <p>
                                        <h4 class="text-primary text-center">Change your pin</h4>
                                        <hr>
                                    </p>

                                    <p>
                                        <p class="text" style="text-align: center">
                                            Your new Pin must be different from
                                            the previous one
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">

                                            <form  autocomplete="off" aria-autocomplete="off">

                                                <div class="form-group">
                                                    <label for="simpleinput">Enter old pin</label>
                                                    <input type="text" id="simpleinput" class="form-control">

                                                </div>



                                                <div class="form-group">
                                                    <label for="simpleinput">Enter new pin</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Confirm pin</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>

                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                        &nbsp; Submit &nbsp;</button>
                                                </div>

                                            </form>

                                        </div>

                                        <div class="col-md-6">
                                            <img src="{{ asset('assets/images/change_pin.jpg') }}" class="img-fluid" alt="">
                                        </div>

                                        </div> <!-- end col -->
                                    </p>

                                </div>
                                <div class="tab-pane " id="profile-b2">

                                    <p>
                                        <h4 class="text-primary text-center">Change your password</h4>
                                        <hr>
                                    </p>

                                    <p>
                                        <p class="text" style="text-align: center">
                                            Your new Password must be different from
                                            the previous one
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">

                                            <form  autocomplete="off" aria-autocomplete="off">

                                                <div class="form-group">
                                                    <label for="simpleinput">Enter old password</label>
                                                    <input type="text" id="simpleinput" class="form-control">

                                                </div>



                                                <div class="form-group">
                                                    <label for="simpleinput">Enter new password</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Confirm password</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>

                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                        &nbsp; Submit &nbsp;</button>
                                                </div>

                                            </form>

                                            </div>
                                        </div> <!-- end col -->
                                    </p>


                                </div>

                                <div class="tab-pane " id="profile-b3">

                                    <p>
                                        <h4 class="text-primary text-center">Reset your pin</h4>
                                        <hr>
                                    </p>

                                    <p>
                                        <p class="text" style="text-align: center">
                                            Enter your email address and we will send you an email with instructions to reset your pin.
                                        </p>
                                        <div class=" ">
                                            <div class="col-md-12">
                                                <form action=""  autocomplete="off" aria-autocomplete="off">

                                                <div class="form-group">
                                                    <label for="simpleinput">Email Address</label>
                                                    <input type="text" id="simpleinput" class="form-control">

                                                </div>
                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary " type="button" id=" ">
                                                        &nbsp; Reset Pin &nbsp;</button>
                                                </div>

                                                </form>
                                            </div>
                                        </div> <!-- end col -->
                                    </p>


                                </div>

                            </div>
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->

                    <div class="col-md-2">  </div>
                </div>


            </div>

            <div class="col-md-2"></div>

        </div>

    </div>

</div>



@endsection
