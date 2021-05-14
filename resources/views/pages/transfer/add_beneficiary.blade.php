@extends('layouts.master')

@section('content')


    <legend></legend>

    <div class="col-12">

        <div class="card-body ">

            <div class="row">
                <div class="col-md-12">

                    <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-left">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Transfer</a>
                                                </li>
                                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">RTGS</a></li> --}}
                                                <li class="breadcrumb-item active text-danger">Add Beneficiary</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <h1 class="header-title text-primary" style="font-size: 24px"><img
                                src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                            ADD TRANSFER BENEFICIARY</h1>

                        <p class="text-muted font-14 m-b-20">

                            {{-- Real Time Gross Settlement(RTGS) refers to a funds transfer system that allows for the
                                instantaneous transfer of money. --}}
                            <hr style="border: 1px solid">
                        </p>
                    <h3 class="text-primary">Add Transfer Beneficiary</h3>
                    <p class="text-muted font-14 m-b-20">
                        <span>
                            <b class="text-danger">Please Note: </b>
                            <b>Add the persons you want to be transacting with using the links below.</b>
                        </span>
                    </p>
                    <hr>
                </div>
            </div>

            <div class="row">
                {{-- <div class="col-md-3" >
                    <div class="card text-white bg-warning text-xs-center">
                    <a href="{{ url('add-beneficiary/own-account-beneficiary') }}">
                        <div class="card-body">
                            <h3 class="text-white" >Own Account</h3>

                            <i data-feather="refresh-cw" class="icons-l card-icon"></i>

                            <blockquote class="card-bodyquote">

                                    <br>
                                <footer class="p-text">Someone famous in <cite title="Source Title">Source Title</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </a>
                    </div> <!-- end card-box-->
                </div> <!-- end col --> --}}


                <div class="col-md-4">
                    <div class="card text-white bg-danger text-xs-center">
                        <a href="{{ url('add-same-bank-beneficiary') }}">
                            <div class="card-body">
                                <h3 class="text-white">Same Bank</h3>
                                {{-- <i class="mdi mdi-cart-outline text-white" style="font-size: 200px"></i> --}}
                                {{-- <i class="dripicons-export text-white" style="font-size: 100px"></i> --}}
                                <i data-feather="refresh-cw" class="icons-l card-icon"></i>

                                <blockquote class="card-bodyquote">
                                    {{-- <p class="p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p> --}}
                                    <br>
                                    <footer class="p-text">Add Beneficiaries Within This Bank Here!
                                    </footer>
                                </blockquote>
                            </div>
                        </a>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->



                <div class="col-md-4">
                    <div class="card text-white bg-success text-xs-center">
                        <a href="{{ url('add-local-bank-beneficiary') }}">
                            <div class="card-body">
                                <h3 class="text-white">Other Local Bank</h3>
                                {{-- <i class="fas fa-external-link-alt" style="font-size: 100px"></i> --}}
                                {{-- <i data-feather="feather-repeat" class="icons-xxl"></i> --}}
                                <i data-feather="repeat" class="icons-l card-icon"></i>


                                <blockquote class="card-bodyquote">
                                    {{-- <p class="p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p> --}}
                                    <br>
                                    <footer class="p-text">Add Beneficiaries From Other Banks Here!</cite>
                                    </footer>
                                </blockquote>
                            </div>
                    </div> <!-- end card-box-->
                    </a>
                </div> <!-- end col -->


                <div class="col-md-4">
                    <div class="card text-white bg-info text-xs-center">
                        <a href="{{ url('add-international-bank-beneficiary') }}">
                            <div class="card-body">
                                <h3 class="text-white">International Bank</h3>
                                <i data-feather="globe" class="icons-l card-icon"></i>
                                <blockquote class="card-bodyquote">
                                    {{-- <p class="p-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p> --}}
                                    <br>
                                    <footer class="p-text">Add International Bank Beneficiaries Here!
                                    </footer>
                                </blockquote>
                            </div>
                        </a>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

            </div>
        </div>
    </div>



@endsection
