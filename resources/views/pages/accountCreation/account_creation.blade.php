@extends('layouts.app')

@section('content')

    @include('snippets.top_navbar', ['page_title' => 'ACCOUNT OPENING'])



    <div class="container">

        <br>
        <div class="row">
            <legend></legend>
            <br>
            <legend></legend>
            <p class="sub-header font-18 purple-color">
                <br>
            </p>
            <br>
            <div class="col-md-2">
                <a href="{{ url('/') }}" type="button" class="btn btn-soft-blue waves-effect waves-light float-left"><i
                        class="mdi mdi-reply-all-outline"></i>&nbsp;Go
                    Back</a>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-body">
                                <i class="mdi mdi-account-plus-outline  mdi-48px" style="margin-left: 40%"></i>
                                <h3 class="card-title" style="text-align: center">SAVINGS ACCOUNT</h3>
                                <p class="card-text" style="text-align: center">An Interest earning Savings Account,
                                    tailored
                                    to suit the lifestyle demands of customers</p>
                                <a href="{{ url('/account-creation/savings-account-creation') }}"
                                    class="btn btn-outline-primary waves-effect waves-light">Apply</a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-body text-xs-center">
                                <i class="mdi mdi-account-plus-outline  mdi-48px" style="margin-left: 40%"></i>
                                <h3 class="card-title" style="text-align: center">CURRENT ACCOUNT</h3>
                                <p class="card-text">An Interest earning Current Account, tailored
                                    to suit the lifestyle demands of customers</p>
                                <a href="#" class="btn btn-outline-primary waves-effect waves-light">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>


            {{-- <div class="col-lg-4">
            <div class="card card-body text-xs-right">
                <i class="mdi mdi-account-plus-outline  mdi-48px" style="margin-left: 40%"></i>
                <h3 class="card-title" style="text-align: center">FIXED DEPOSIT ACCOUNT</h3>
                <p class="card-text">An Interest earning Fixed Account, tailored
                    to suit the lifestyle demands of customers</p>
                <a href="#" class="btn btn-outline-primary waves-effect waves-light">Apply</a>
            </div>
        </div>
    </div> --}}


            {{-- <div class="row">
        <div class="col-lg-4">
            <div class="card card-body">
                <i class="mdi mdi-account-plus-outline  mdi-48px" style="margin-left: 40%"></i>
                <h3 class="card-title" style="text-align: center">SAVINGS ACCOUNT</h3>
                <p class="card-text" style="text-align: center">An Interest earning Savings Account, tailored
                    to suit the lifestyle demands of customers</p>
                <a href="#" class="btn btn-outline-primary waves-effect waves-light">Apply</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-body text-xs-center">
                <i class="mdi mdi-account-plus-outline  mdi-48px" style="margin-left: 40%"></i>
                <h3 class="card-title" style="text-align: center">CURRENT ACCOUNT</h3>
                <p class="card-text">An Interest earning Current Account, tailored
                    to suit the lifestyle demands of customers</p>
                <a href="#" class="btn btn-outline-primary waves-effect waves-light">Apply</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-body text-xs-right">
                <i class="mdi mdi-account-plus-outline  mdi-48px" style="margin-left: 40%"></i>
                <h3 class="card-title" style="text-align: center">FIXED DEPOSIT ACCOUNT</h3>
                <p class="card-text">An Interest earning Fixed Account, tailored
                    to suit the lifestyle demands of customers</p>
                <a href="#" class="btn btn-outline-primary waves-effect waves-light">Apply</a>
            </div>
        </div>
    </div> --}}
            <br>



        </div>
        <!-- end row -->


    @endsection
