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
                                        <i class="fas fa-unlock-alt"></i>&nbsp; Change Password
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
                                        <div class="">
                                            {{-- <form>

                                                <div class="form-group">
                                                    <label for="simpleinput">Type Of Enquiry</label>
                                                    <select class="custom-select ">
                                                        <option selected>-- Select Enquiry</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-textarea">Message</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Contact</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Contact</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Date</label>
                                                    <input type="date" id="simpleinput" class="form-control">
                                                </div>

                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                        &nbsp; Submit &nbsp;</button>
                                                </div>

                                            </form> --}}
                                        </div> <!-- end col -->
                                    </p>

                                </div>
                                <div class="tab-pane " id="profile-b2">

                                    <p>
                                        <h4 class="text-primary text-center">Change your password</h4>
                                        <hr>
                                    </p>

                                    <p>
                                        <div class="">
                                            {{-- <form>

                                                <div class="form-group">
                                                    <label for="simpleinput">Type Of Complaint</label>
                                                    <select class="custom-select ">
                                                        <option selected>-- Select Enquiry</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-textarea">Message</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Contact</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Contact</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Date</label>
                                                    <input type="date" id="simpleinput" class="form-control">
                                                </div>

                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                        &nbsp; Submit &nbsp;</button>
                                                </div>

                                            </form> --}}
                                        </div> <!-- end col -->
                                    </p>


                                </div>

                                <div class="tab-pane " id="profile-b3">

                                    <p>
                                        <h4 class="text-primary text-center">Reset your pin</h4>
                                        <hr>
                                    </p>

                                    <p>
                                        <div class="">
                                            {{-- <form>

                                                <div class="form-group">
                                                    <label for="simpleinput">Type Of Complaint</label>
                                                    <select class="custom-select ">
                                                        <option selected>-- Select Enquiry</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-textarea">Message</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Contact</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Contact</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>


                                                <div class="form-group">
                                                    <label for="simpleinput">Prefered Date</label>
                                                    <input type="date" id="simpleinput" class="form-control">
                                                </div>

                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                        &nbsp; Submit &nbsp;</button>
                                                </div>

                                            </form> --}}
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
